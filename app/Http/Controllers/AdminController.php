<?php

namespace App\Http\Controllers;


use App\Models\Payment;
use App\Models\Souvenir;
use App\Models\Student;
use App\Models\User;
use App\Models\GuestInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view("admin.home.dashboard");
    }

    public function profile()
    {
        return view("admin.setting.profile");
    }

    public function souvenirs()
    {
        $data= Souvenir::orderBy("created_at","DESC")->get();
        return view("admin.souvenir.index")->with('data',$data);
    }

    public function profileUpdate(Request $request)
    {


        if ($request['password'] != null) {
            $data = [
                "name" => $request['name'],
                "email" => $request['email'],
                "password" => Hash::make($request['password']),
            ];
        } else {
            $data = [
                "name" => $request['name'],
                "email" => $request['email'],
            ];
        }

        try {
            User::where('id', Auth::user()->id)->update($data);
            Alert::success('Success ', "Profile Updated");

        } catch (\Exception $exception) {

            Alert::error('Error ', getErrorMessage($exception->getMessage(), "There is an error. Try later"));
        }

        return back();

    }

    public function AllStudent(Request $request)
    {
        $query = Student::with("academicQualification", "profession", "guests", "gift", 'payments')->orderBy('created_at', "DESC");
        if ($request['reg_no'] != null) {
            $query->where('registration_id', $request['reg_no']);
        }
        if ($request['phone'] != null) {
            $query->where('phone', $request['phone']);
        }
        if ($request['date'] != null) {
            $query->whereDate('created_at', $request['date']);
        }
        if ($request['payment'] != null) {
            $query->where('is_payment', $request['payment']);
        }
        $result = $query->paginate(50);
        return view('admin.student.all')->with('result', $result);
    }

    public function paymentStudent(Request $request)
    {
        $query = Student::with("academicQualification", "profession", "guests", "gift", 'payments')

            ->orderBy('created_at', "DESC")->where('is_payment', true);
        if ($request['reg_no'] != null) {
            $query->where('registration_id', $request['reg_no']);
        }
        if ($request['phone'] != null) {
            $query->where('phone', $request['phone']);
        }
        if ($request['date'] != null) {
            $query->whereDate('created_at', $request['date']);
        }
        if ($request['payment'] != null) {
            $query->where('is_payment', $request['payment']);
        }
        $result = $query->paginate(50);
        return view('admin.student.payment')->with('result', $result);
    }
    public function adminStudentEdit($id)
    {
        $result = Student::with("academicQualification", "profession",)->where('id', $id)->first();

        return view('admin.student.edit')->with('result', $result);
    }
    public function adminStudentUpdate(Request $request)
    {

        $image_file = $request['profile_pic'];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/student');
            $image->move($destinationPath, $image_name);
            $image_file = '/images/student/' . $image_name;
        }
        $request['profile_pic'] = $image_file;
        $request['created_at'] = Carbon::now();
        $request['updated_at'] = Carbon::now();

        try {
            Student::where('id', $request['id'])->update($request->except("_token", "image"));

            Alert::success("Success", "Successfully Updated");
            return back();
        } catch (\Exception $exception) {
            Alert::error("Sorry", $exception->getMessage());
            return back();
        }
    }

    public function nonpaymentStudent(Request $request)
    {
        $query = Student::with("academicQualification", "profession", "guests", "gift")->orderBy('created_at', "DESC")->where('is_payment', false);
        if ($request['reg_no'] != null) {
            $query->where('registration_id', $request['reg_no']);
        }
        if ($request['phone'] != null) {
            $query->where('phone', $request['phone']);
        }
        if ($request['date'] != null) {
            $query->whereDate('created_at', $request['date']);
        }
        if ($request['payment'] != null) {
            $query->where('is_payment', $request['payment']);
        }
        $result = $query->paginate(50);
        return view('admin.student.non_payment')->with('result', $result);
    }

    public function logOut()
    {
        Auth::logout();
        return Redirect::to("/login");
    }

    public function paymentData()
    {
        return Payment::orderBy("created_at", "DESC")->get();
    }

    /**
     * My Function
     */
    public function checkPayment($id){

        $row = Student::with("payments")->where('id', $id)->first();
        return view('admin.student.checkpayment', ['row' => $row]);

    }

    public function sslcValidate(Request $request){

        // SSLc info
        $store_id = env("STORE_ID");
        $store_passwd = env("STORE_PASSWORD");

        $APILINK = "https://securepay.sslcommerz.com/validator/api/merchantTransIDvalidationAPI.php";

        //$APILINK = "https://sandbox.sslcommerz.com/validator/api/merchantTransIDvalidationAPI.php";

        $transid = $request->transid;
        $student_id = $request->id;
        $phone = $request->phone;
        $email = $request->email;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $APILINK."?tran_id={$transid}&store_id={$store_id}&store_passwd={$store_passwd}");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // open if you run on local
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $result_array = json_decode($result);



        $status = $result_array->element[0]->status;
        $response = $result_array->element[0];

        if(sizeof($result_array->element) == 2){
            $status = $result_array->element[1]->status;
            $response = $result_array->element[1];
        }

        if (($status == 'VALIDATED' || $status == 'VALID') && $student_id == $response->value_a) {
            Student::where('id', $student_id)->update([
                'is_payment' => true,
            ]);
            $data = [
                'tran_id' => $transid,
                'status' => "Payment Done",
                'ssl_data' => json_encode($response),
            ];
            Payment::where('tran_id', $transid)->update($data);
            $message = "Congrats! Your '75 Years Celebration and Reunion of Chandpur College' registration is Successful! Check Your Email Inbox or Spam Folder for Invitation Letter.";

            // Sending sms
            if(!empty($phone)){
                try {
                    sendSms($phone, $message);
                } catch (\Throwable $th) {}
            }
            $student = Student::where('id', $student_id)->first();
            $guest_count = GuestInfo::where('student_id', $student->id)->count();

            $data = [
                'invoice' => $student->registration_id,
                'name' => $student->eng_name,
                'nationality' => $student->nationality,
                'gender' => $student->gender,
                'email' => $student->email,
                'phone' => $student->phone,
                'address' => $student->address,
                'birth_date' => $student->birth_date,
                'blood_group' => $student->blood_group,
                'father_name' => $student->father_name,
                'nid_no' => $student->nid_no,
                'registration_id' => $student->registration_id,
                't_shirt_size' => $student->t_shirt_size,
                'education_year' => $student->education_year,
                'profile_pic' => $student->profile_pic,
                'guest_count' => $guest_count,
                'logo' => "/frontend/img/header-logo.png",
                'sign1' => "/frontend/img/asit-signature.png",
                'sign2' => "/frontend/img/jillur-rahman.png",
                'sign3' => "/frontend/img/ratan-signature.png",
                'subject' => "ঐতিহ্যের উৎকর্ষে উল্লাসের ৭৫ বছর ",
            ];

            $invoice = $student->registration_id;

            if (isset($data['email']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL) == true) {
                try {
                    Mail::send('email-template.confirm', $data, function ($message) use ($data, $invoice) {
                        $message->to($data['email'])
                            ->subject($data['subject']);
                        $message->from('asad.livingbrands@gmail.com', $data['subject']);
                        $message->attach(public_path() . "/pdf/$invoice.pdf");
                    });
                } catch (\Exception $exception) {}
            }

            Alert::success('Success ', "Registration information updated.");

        }else{
            Alert::error('Error ', "Invalid Payment");
        }
        return redirect()->back();
    }

}
