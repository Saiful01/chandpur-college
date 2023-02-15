<?php

namespace App\Http\Controllers;

use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\AcademicQualification;
use App\Models\GiftDelivery;
use App\Models\GuestInfo;
use App\Models\Otp;
use App\Models\Payment;
use App\Models\Post;
use App\Models\ProfessionalExperinece;
use App\Models\Souvenir;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {

        $query = GuestInfo::join('students', 'students.id', '=', 'guest_infos.student_id')
            ->where('students.is_payment', true)->pluck('guest_infos.student_id');

        Student::where('students.is_payment', true)->whereIn('id', $query)->get();


        Session::forget('student_id');
        return view("frontend.home.index");

    }

    public function privacypolicy()
    {

        return view("frontend.student.privacy-policy");
    }

    public function termscondition()
    {

        return view("frontend.student.terms-condition");
    }

    public function refundpolicy()
    {

        return view("frontend.student.refund-policy");
    }

    public function registration()
    {

        return view("frontend.student.registration");
    }

    public function postDetails($id)
    {
        $result = Post::where('id', $id)->first();
        return view("test")->with("result", $result);
    }

    public function personalInfo(Request $request)
    {
        if ($request->isMethod("POST")) {
            $exist = Student::where('phone', $request['phone'])->where('is_payment', true)->first();
            if ($exist != null) {
                Alert::error("Sorry", "আপনি এই মোবাইল  নম্বর দিয়ে রেজিস্ট্রেশন করে ফেলেছেন, অন্য মোবাইল  নম্বর দিয়ে চেষ্টা করুন");
                return back();
            }
            $image_file = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/student');
                $image->move($destinationPath, $image_name);
                $image_file = '/images/student/' . $image_name;
            }
            $request['profile_pic'] = $image_file;
            $request['registration_id'] = uniqid();
            $request['created_at'] = Carbon::now();
            $request['updated_at'] = Carbon::now();

            try {
                $student_id = Student::insertGetId($request->except("_token", "image"));
                Session::put("student_id", $student_id);

                Alert::success("Success", "Successfully Created");
                return Redirect::to("/student/academic-info");
            } catch (\Exception $exception) {
                Alert::error("Sorry", $exception->getMessage());
                return back();
            }
        }
        return view("frontend.student.personal-info");
    }

    public function personalInfoUpdate(Request $request)
    {
        if ($request->isMethod("POST")) {
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
                return Redirect::to("/student/academic-info");
            } catch (\Exception $exception) {
                Alert::error("Sorry", $exception->getMessage());
                return back();
            }
        }
        return view("frontend.student.personal-info");
    }

    public function CurrentPersonalInfo(Request $request)
    {
        if ($request->isMethod("POST")) {
            $image_file = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/student');
                $image->move($destinationPath, $image_name);
                $image_file = '/images/student/' . $image_name;
            }
            $request['profile_pic'] = $image_file;
            $request['registration_id'] = uniqid();
            $request['created_at'] = Carbon::now();
            $request['updated_at'] = Carbon::now();
            $request['Student_type'] = 2;
            try {
                $student_id = Student::insertGetId($request->except("_token", "image"));
                Session::put("student_id", $student_id);

                Alert::success("Success", "Successfully Created");
                return Redirect::to("/current-student/fee-info");
            } catch (\Exception $exception) {
                Alert::error("Sorry", $exception->getMessage());
                return back();
            }
        }
        return view("frontend.current_student.personal-info");
    }

    public function academicInfo(Request $request)
    {
        if (Session::get("student_id") == null) {
            return Redirect::to("/student/personal-info");
        }
        if ($request->isMethod("POST")) {
            //return $request->all();
            try {
                $image_file = null;
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $image_name = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/marksheet');
                    $image->move($destinationPath, $image_name);
                    $image_file = '/images/marksheet/' . $image_name;
                }

                $array = [
                    'student_id' => $request['student_id'],
                    'program_name' => $request['program_name'],
                    'department' => $request['department'],
                    'passing_year' => $request['passing_year'],
                    'roll_no' => $request['roll_no'],
                    'session' => $request['session'],
                    'reg_no' => $request['reg_no'],
                    'mark_sheet' => $image_file,

                ];
                AcademicQualification::create($array);
                Alert::success("Success", "Successfully Created");
                return Redirect::to("/student/professional-info");

            } catch (\Exception $exception) {
                //return $exception->getMessage();
                Alert::error("Sorry", $exception->getMessage());
                return back();
            }
        }
        $academic = AcademicQualification::where('student_id', (Session::get("student_id")))->first();

        return view("frontend.student.academic-info")
            ->with("student_id", (Session::get("student_id")))
            ->with("academic", $academic);
    }

    public function academicInfoUpdate(Request $request)
    {
        if (Session::get("student_id") == null) {
            return Redirect::to("/student/personal-info");
        }
        if ($request->isMethod("POST")) {
            //return $request->all();
            try {
                $image_file = $request['mark_sheet'];
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $image_name = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/marksheet');
                    $image->move($destinationPath, $image_name);
                    $image_file = '/images/marksheet/' . $image_name;
                }

                $array = [
                    'student_id' => $request['student_id'],
                    'program_name' => $request['program_name'],
                    'department' => $request['department'],
                    'passing_year' => $request['passing_year'],
                    'roll_no' => $request['roll_no'],
                    'session' => $request['session'],
                    'reg_no' => $request['reg_no'],
                    'mark_sheet' => $image_file,

                ];
                AcademicQualification::where('id', $request['id'])->update($array);
                Alert::success("Success", "Successfully Updated");
                return Redirect::to("/student/professional-info");

            } catch (\Exception $exception) {
                //return $exception->getMessage();
                Alert::error("Sorry", $exception->getMessage());
                return back();
            }
        }
        $academic = AcademicQualification::where('student_id', (Session::get("student_id")))->first();

        return view("frontend.student.academic-info")
            ->with("student_id", (Session::get("student_id")))
            ->with("academic", $academic);
    }

    public function professionalInfo(Request $request)
    {
        if (Session::get("student_id") == null) {
            return Redirect::to("/student/personal-info");
        }

        if ($request->isMethod("POST")) {
            try {
                ProfessionalExperinece::create($request->except("_token", "image"));
                Alert::success("Success", "Successfully Created");
                return Redirect::to("/student/guest-info");
            } catch (\Exception $exception) {
                Alert::error("Sorry", $exception->getMessage());
                return back();
            }
        }
        $professional = ProfessionalExperinece::where('student_id', (Session::get("student_id")))->first();

        return view("frontend.student.professional-info")
            ->with("professional", $professional)
            ->with("student_id", (Session::get("student_id")));
    }

    public function professionalInfoUpdate(Request $request)
    {
        if (Session::get("student_id") == null) {
            return Redirect::to("/student/personal-info");
        }

        if ($request->isMethod("POST")) {
            try {
                ProfessionalExperinece::where('id', $request['id'])->update($request->except("_token", "image"));
                Alert::success("Success", "Successfully Updated");
                return Redirect::to("/student/guest-info");
            } catch (\Exception $exception) {
                Alert::error("Sorry", $exception->getMessage());
                return back();
            }
        }
        $professional = ProfessionalExperinece::where('student_id', (Session::get("student_id")))->first();

        return view("frontend.student.professional-info")
            ->with("professional", $professional)
            ->with("student_id", (Session::get("student_id")));
    }

    public function guestInfo(Request $request)
    {
        if (Session::get("student_id") == null) {
            return Redirect::to("/student/personal-info");
        }

        if ($request->isMethod("POST")) {


            //  return $request->all();
            $guest_count = GuestInfo::where('student_id', Session::get("student_id"))->count();
            if ($guest_count > 7) {
                Alert::error("Sorry", "৭ জনের বেশি গেস্ট যুক্ত করতে পারবেন না  ");
                return back();

            }

            try {
                if (implode(null, $request['guest_name']) == null) {

                    return Redirect::to("/student/gift-info");
                }
                // return $request->all();

                GuestInfo::where('student_id', $request['student_id'])->delete();
                $i = 0;
                foreach ($request['guest_name'] as $item) {
                    $guest_count = GuestInfo::where('student_id', Session::get("student_id"))->count();
                    if ($guest_count > 7) {
                        Alert::error("Sorry", "৭ জনের বেশি গেস্ট যুক্ত করতে পারবেন না  ");
                        return back();

                    }

                    $array = [
                        'student_id' => $request['student_id'],
                        'guest_name' => $item,
                        'relation' => $request['relation'][$i],
                        'age' => $request['age'][$i],
                        'gender' => $request['gender'][$i],
                    ];
                    GuestInfo::create($array);
                    $i++;
                }
                Student::where('id', (Session::get("student_id")))->update([
                    'is_guest' => true
                ]);


                Alert::success("Success", "Successfully Created");
                return Redirect::to("/student/gift-info");
            } catch (\Exception $exception) {
                Alert::error("Sorry", $exception->getMessage());
                return back();
            }
        }

        $guest = GuestInfo::where('student_id', (Session::get("student_id")))->get();

        $student = Student::where('id', (Session::get("student_id")))->first();
        return view("frontend.student.guest-info")
            ->with("student", $student)
            ->with("guest_items", $guest)
            ->with("student_id", (Session::get("student_id")));
    }

    public function giftInfo(Request $request)
    {
        if (Session::get("student_id") == null) {
            return Redirect::to("/student/personal-info");
        }

        if ($request->isMethod("POST")) {
            // return $request->all();
            try {
                GiftDelivery::create($request->except("_token", "image"));
                Alert::success("Success", "Successfully Created");
                return Redirect::to("/student/fee-info");
            } catch (\Exception $exception) {
                Alert::error("Sorry", $exception->getMessage());
                return back();
            }
        }
        $gift = GiftDelivery::where('student_id', (Session::get("student_id")))->first();
        return view("frontend.student.gift-info")
            ->with("gift", $gift)
            ->with("student_id", (Session::get("student_id")));
    }

    public function giftInfoUpdate(Request $request)
    {
        if (Session::get("student_id") == null) {
            return Redirect::to("/student/personal-info");
        }

        if ($request->isMethod("POST")) {
            // return $request->all();
            try {
                GiftDelivery::where('id', $request['id'])->update($request->except("_token", "image"));
                Alert::success("Success", "Successfully Created");
                return Redirect::to("/student/fee-info");
            } catch (\Exception $exception) {
                Alert::error("Sorry", $exception->getMessage());
                return back();
            }
        }
        $gift = GiftDelivery::where('student_id', (Session::get("student_id")))->first();
        return view("frontend.student.gift-info")
            ->with("gift", $gift)
            ->with("student_id", (Session::get("student_id")));
    }

    public function feeInfo(Request $request)
    {
        if (Session::get("student_id") == null) {
            return Redirect::to("/student/personal-info");
        }

        /*if ($request->isMethod("POST")) {

            try {
                ::create($request->except("_token", "image"));
                Alert::success("Success", "Successfully Created");
                return Redirect::to("/student/invitation-info");
            } catch (\Exception $exception) {
                Alert::error("Sorry", $exception->getMessage());
                return back();
            }

        }*/

        $guest = GuestInfo::where('student_id', Session::get('student_id'))->count();
        $fee_exist = GiftDelivery::where('student_id', Session::get("student_id"))->first()->delivery_type;
        if ($fee_exist == "বর্তমান ঠিকানা") {
            $delivery_fee = 150;
        } else {
            $delivery_fee = 0;

        }


        $sub_total = $guest * getGuestFee();
        $total = $sub_total + getOldStudentFee() + $delivery_fee;

        return view("frontend.student.fee-info")
            ->with('guest', $guest)
            ->with('sub_total', $sub_total)
            ->with('total', $total)
            ->with('delivery_fee', $delivery_fee)
            ->with("student_id", (Session::get("student_id")));
    }

    public function CurrentFeeInfo(Request $request)
    {
        if (Session::get("student_id") == null) {
            return Redirect::to("/student/personal-info");
        }

        /*if ($request->isMethod("POST")) {

            try {
                ::create($request->except("_token", "image"));
                Alert::success("Success", "Successfully Created");
                return Redirect::to("/student/invitation-info");
            } catch (\Exception $exception) {
                Alert::error("Sorry", $exception->getMessage());
                return back();
            }

        }*/


        return view("frontend.current_student.fee-info")
            ->with("student_id", (Session::get("student_id")));
    }

    public function invitationInfo(Request $request)
    {

        // Restart seasson
        session()->setId($request['value_d']);
        session()->start();

        if (!empty(Session::get("student_id"))) {
            $student_id = Session::get("student_id");
        } else {
            $student_id = $request['value_a'];
        }

        if ($request['value_c'] == "guest") {

            foreach (json_decode($request['value_b']) as $item) {
                try {
                    GuestInfo::where('id', $item)->update([
                        'is_verified' => true
                    ]);
                } catch (\Exception $exception) {
                    return back();
                }
            }
            $array = [
                'status' => "Guest Payment Done",
                'ssl_data' => json_encode($request->all()),
                'type' => "Ticket",
            ];

            try {
                Payment::where('tran_id', $request['tran_id'])->update($array);
            } catch (\Exception $exception) {

                return $exception->getMessage();
            }


            Session::put("data", $request['value_b']);
            return Redirect::to("/guest/ticket-download");
        }

        if (Session::get("student_id") == null) {
            return Redirect::to("/student/personal-info");
        }


        // echo "Transaction is Successful";
        Student::where('id', $student_id)->update([
            'is_payment' => true,
        ]);

        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');
        $student_id = $request->input('value_a');

        $array = [
            'status' => "Payment Done",
            'ssl_data' => json_encode($request->all()),
        ];

        try {
            Payment::where('tran_id', $tran_id)->update($array);
        } catch (\Exception $exception) {

            return $exception->getMessage();
        }

        //$sslc = new SslCommerzNotification();

        #Check order status in order tabel against the transaction id or order id.
        /*     $order_detials = DB::table('orders')
                 ->where('transaction_id', $tran_id)
                 ->select('transaction_id', 'status', 'currency', 'amount')->first();

             if ($order_detials->status == 'Pending') {
                 $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);

                 if ($validation == TRUE) {

                     echo "<br >Transaction is successfully Completed";
                 } else {


                     echo "validation Fail";
                 }
             } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {

                 echo "Transaction is successfully Completed";
             } else {

                 echo "Invalid Transaction";
             }*/


        $student = Student::where('id', $student_id)->first();

        $guest_count = GuestInfo::where('student_id', $student->id)->count();


        if ($request['value_a'] == "current") {
            return view("frontend.current_student.invitation-info")
                ->with("student", $student);
        } else {

            $invoice = $student->registration_id;
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
            $message = "Congrats! Your '75 Years Celebration and Reunion of Chandpur College' registration is Successful! Check Your Email Inbox or Spam Folder for Invitation Letter.";

            try {
                sendSms($student->phone, $message);
            } catch (\Throwable $th) {
                //throw $th;
            }

            /*  $pdf = Pdf::loadView('ticket', $data);
              return $pdf->stream();


              $pdf->setOption(['dpi' => 150, 'defaultFont' => 'Siyamrupali']);


              $path = public_path('pdf/');
              $fileName = $invoice . '.' . 'pdf';
              $pdf->loadView($path . '/' . $fileName);
              $pdf->save($path . '/' . $fileName);*/


            $path = public_path('/pdf/');
            $fileName = $invoice . '.pdf';
            if (!File::exists($path)) {
                File::makeDirectory($path);
            }

            /*$pdf = Pdf::loadView('ticket', $data);
            return $pdf->stream();*/

            Pdf::loadView('ticket', $data)->save($path . '/' . $fileName);

            if (isset($data['email']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL) == true) {
                try {
                    Mail::send('email-template.confirm', $data, function ($message) use ($data, $invoice) {
                        $message->to($data['email'])
                            ->subject($data['subject']);
                        $message->from('asad.livingbrands@gmail.com', $data['subject']);
                        $message->attach(public_path() . "/pdf/$invoice.pdf");
                    });
                } catch (\Exception $exception) {
                    //return $exception->getMessage();
                }
            }
            //  return "ok";
            Session::forget('student_id');

            return view("frontend.student.invitation-info")
                ->with("student", $student);
        }


    }

    public function CurrentInvitationInfo(Request $request)
    {
        if (Session::get("student_id") == null) {
            return Redirect::to("/student/personal-info");
        }

        echo "Transaction is Successful";

        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        $sslc = new SslCommerzNotification();

        #Check order status in order tabel against the transaction id or order id.
        /*     $order_detials = DB::table('orders')
                 ->where('transaction_id', $tran_id)
                 ->select('transaction_id', 'status', 'currency', 'amount')->first();

             if ($order_detials->status == 'Pending') {
                 $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);

                 if ($validation == TRUE) {

                     echo "<br >Transaction is successfully Completed";
                 } else {


                     echo "validation Fail";
                 }
             } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {

                 echo "Transaction is successfully Completed";
             } else {

                 echo "Invalid Transaction";
             }*/


        $student = Student::where('id', Session::get("student_id"))->first();

        return view("frontend.current_student.invitation-info")
            ->with("student", $student);
    }

    public function payment(Request $request, $amount)

    {
        if (Session::get("student_id") == null) {
            return redirect('/');
        }

        $student = Student::where('id', Session::get("student_id"))->first();
        $tran_id = uniqid();

        $post_data = array();
        $post_data['total_amount'] = $amount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $tran_id; // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $student->name;
        $post_data['cus_email'] = 'cgc75re.years@gmail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = $student->phone;
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = Session::get("student_id");
        $post_data['value_b'] = $student->name;
        $post_data['value_c'] = $student->phone;
        $post_data['value_d'] = session()->getId();

        #Before  going to initiate the payment order status need to insert or update as Pending.
        /* $update_product = DB::table('orders')
             ->where('transaction_id', $post_data['tran_id'])
             ->updateOrInsert([
                 'name' => $post_data['cus_name'],
                 'email' => $post_data['cus_email'],
                 'phone' => $post_data['cus_phone'],
                 'amount' => $post_data['total_amount'],
                 'status' => 'Pending',
                 'address' => $post_data['cus_add1'],
                 'transaction_id' => $post_data['tran_id'],
                 'currency' => $post_data['currency']
             ]);*/
        $array = [
            'student_id' => $student->id,
            'tran_id' => $tran_id,
            'amount' => $amount,
            'status' => "payment initiate",

        ];

        try {
            Payment::create($array);
        } catch (\Exception $exception) {

            return $exception->getMessage();
        }

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function CurrentPayment(Request $request, $amount)

    {


        $post_data = array();
        $post_data['total_amount'] = $amount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = 'Customer Name';
        $post_data['cus_email'] = 'customer@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "current";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        #Before  going to initiate the payment order status need to insert or update as Pending.
        /* $update_product = DB::table('orders')
             ->where('transaction_id', $post_data['tran_id'])
             ->updateOrInsert([
                 'name' => $post_data['cus_name'],
                 'email' => $post_data['cus_email'],
                 'phone' => $post_data['cus_phone'],
                 'amount' => $post_data['total_amount'],
                 'status' => 'Pending',
                 'address' => $post_data['cus_add1'],
                 'transaction_id' => $post_data['tran_id'],
                 'currency' => $post_data['currency']
             ]);*/

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function pdf()
    {

        //return view("invoice");
        $data = Student::where('id', Session::get('student_id'))->first();


        $data = [
            'name' => $data->name,
            'nationality' => $data->nationality,
            'gender' => $data->gender,
            'email' => $data->email,
            'phone' => $data->phone,
            'address' => $data->address,
            'birth_date' => $data->birth_date,
            'blood_group' => $data->blood_group,
            'father_name' => $data->father_name,
            'nid_no' => $data->nid_no,
            'registration_id' => $data->registration_id,
            't_shirt_size' => $data->t_shirt_size,
            'education_year' => $data->education_year,
            'profile_pic' => $data->profile_pic,


        ];

        $pdf = Pdf::loadView('ticket', $data);
        $pdf->setOption(['dpi' => 150, 'defaultFont' => 'Siyamrupali']);
        return $pdf->download();
        return $pdf->stream();
        /* $pdf = Pdf::loadView('pdf.invoice', $data);
         return $pdf->download('invoice.pdf');*/


    }

    public function mail()
    {


        /*$data = array(
            'invoice' => uniqid(),
            'full_name' => "Motiur Rahaman",
            'phone_number' => "017178499658",
            'ticket_image' => "/ticket/cooper-jensen.jpeg",
            'date' => Carbon::now(),
            'url' => \url("/"),
        );
        $admin_email = "memotiur@gmail.com";

        try {
            Mail::send('email-template/confirm', $data, function ($message) use ($admin_email) {
                $message->to($admin_email)
                    ->subject('Mail from CEO');
                $message->from('motiur@gmail.com', 'Motiur Rahaman would like to be your friend on e-Verify');
            });
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }*/


        $data = array(
            'invoice' => uniqid(),
            'full_name' => "Motiur Rahaman",
            'phone_number' => "017178499658",

            'date' => Carbon::now(),
            'url' => \url("/"),
        );
        $visitor_email = "saiful013101@gmail.com";

        try {
            Mail::send('email-template/confirm', $data, function ($message) use ($visitor_email) {
                $message->to($visitor_email)
                    ->subject('পাঠক উৎসব টিকেট');
                $message->from('motiur@gmail.com', 'পাঠক উৎসব ');

                // $message->attach(public_path() . "/ticket/6357ffc4a07d8.jpeg");

            });
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }


        return "mail";
    }

    public function test()
    {

        return QrCode::size(140)->generate("123456");

        $payments = Payment::all();
        foreach ($payments as $item) {
            Student::where('id', $item->student_id)->update([
                'is_payment' => true
            ]);
        }
        return "ok";

        return view("test");
    }

    public function downloadTicket()
    {
        return view("ticket-download");
    }

    public function otpVerify($phone)
    {
        $otp = rand(1000, 9999);
        $sms = "Your verification code is " . $otp;

        $is_exist = Student::where('phone', $phone)->where('is_payment', true)->first();
        if (is_null($is_exist)) {
            return 201;
        } else {
            Otp::create([
                'otp' => $otp,
                'phone' => $phone,
            ]);
            sendSms($phone, $sms);

            return 200;
        }

    }

    public function otpCheck($phone, $otp)
    {

        $is_exist = Otp::where('otp', $otp)->where('phone', $phone)->first();
        if (is_null($is_exist)) {
            return 0;
        } else {
            $is_exist = Student::where('phone', $phone)->where('is_payment', true)->first();
            if (is_null($is_exist)) {
                return 0;
            }

            Session::put("student_id", $is_exist->id);
            return $is_exist->registration_id;
        }
    }

    public function guestTicket()
    {
        return view("guest-ticket");
    }

    public function guestPayment(Request $request)
    {
        //return $request->all();

        if (Session::get("student_id") == null) {
            return redirect()->back();
        }
        $i = 0;
        $total = 0;
        $arr = [];
        foreach ($request['guest_name'] as $item) {
            $guest_count = GuestInfo::where('student_id', Session::get("student_id"))->count();
            if ($guest_count > 7) {
                Alert::error("Sorry", "আপনি ৭ জন গেস্ট যুক্ত করে ফেলেছেন,৭ জনের বেশি গেস্ট যুক্ত করতে পারবেন না  ");
                return back();

            }

            $array = [
                'student_id' => Session::get("student_id"),
                'guest_name' => $item,
                'relation' => $request['relation'][$i],
                'age' => $request['age'][$i],
                'gender' => $request['gender'][$i],
                'is_verified' => 0,
                'guest_type' => 1,
            ];
            $id = GuestInfo::insertGetId($array);

            $arr[] = $id;
            $i++;
            $total = $total + getGuestFee();
        }
        $student = Student::where('id', Session::get("student_id"))->first();
        $tran_id = uniqid();
        $post_data = array();
        $post_data['total_amount'] = $total; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $tran_id; // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $student->name;
        $post_data['cus_email'] = 'customer@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = $student->phone;
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = Session::get("student_id");
        $post_data['value_b'] = json_encode($arr);
        $post_data['value_c'] = "guest";
        $post_data['value_d'] = "ref004";
        $array = [
            'student_id' => $student->id,
            'tran_id' => $tran_id,
            'amount' => $total,
            'status' => " guest payment initiate",

        ];

        try {
            Payment::create($array);
        } catch (\Exception $exception) {

            return $exception->getMessage();
        }


        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function guestTicketDownload(Request $request)
    {
        $data = Session::get('data');
        if (Session::get('data') == null) {
            return Redirect::to("/");
        }


        $guest_data = GuestInfo::whereIn('id', json_decode($data, true))->get();

        $student = Student::where('id', Session::get("student_id"))->first();

        $data = [
            'invoice' => $student->registration_id,
            'guest_data' => $guest_data,

            'logo' => "/frontend/img/header-logo.png",
            'sign1' => "/frontend/img/asit-signature.png",
            'sign2' => "/frontend/img/jillur-rahman.png",
            'sign3' => "/frontend/img/ratan-signature.png",
            'subject' => "অংশ হোন ৭৫ বছরের ঐতিহ্যের রেজিস্ট্রেশন ",
        ];

        $fileName = "guest_" . $student->registration_id . ".pdf";


        Pdf::loadView('guest-pdf-ticket', $data)->save("pdf" . '/' . $fileName);


        /* $pdf = Pdf::loadView('guest-pdf-ticket', $data);
         $pdf->setOption(['dpi' => 150, 'defaultFont' => 'Siyamrupali']);
         //return $pdf->download();
         return $pdf->stream();*/


        return view("guest-ticket-download")
            ->with('guest_data', $guest_data)
            ->with('student', $student)
            ->with('fileName', $fileName);
    }

    public function souvenir(Request $request)
    {


        $picture_file = [];

        if ($request->hasFile('picture')) {
            foreach ($request['picture'] as $picture) {
                $picture_name = time() . '.' . $picture->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/picture');
                $picture->move($destinationPath, $picture_name);
                $picture_file[] = '/uploads/picture/' . $picture_name;

            }
        }

        $passport_file = "";
        if ($request->hasFile('passport')) {
            $passport = $request->file('passport');
            $passport_name = time() . '.' . $passport->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/passport');
            $passport->move($destinationPath, $passport_name);
            $passport_file = '/uploads/passport/' . $passport_name;
        }


        try {
            Souvenir::create([
                'name' => $request->name,
                'course' => $request->course,
                'subject' => $request->subject,
                'batch' => $request->batch,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'passport' => $passport_file,
                'writeup' => $request['writeup'],
                'pictures' => json_encode($picture_file),
            ]);

            Alert::success("Success", "Successfully Submitted");

        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return back();

    }
}
