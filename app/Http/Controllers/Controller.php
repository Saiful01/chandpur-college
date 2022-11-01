<?php

namespace App\Http\Controllers;

use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\AcademicQualification;
use App\Models\GiftDelivery;
use App\Models\GuestInfo;
use App\Models\Payment;
use App\Models\Post;
use App\Models\ProfessionalExperinece;
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

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
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
                Alert::error("Success", $exception->getMessage());
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
                Alert::error("Success", $exception->getMessage());
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
                Alert::error("Success", $exception->getMessage());
                return back();
            }
        }

        return view("frontend.student.academic-info")->with("student_id", (Session::get("student_id")));
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
                Alert::error("Success", $exception->getMessage());
                return back();
            }
        }

        return view("frontend.student.professional-info")->with("student_id", (Session::get("student_id")));
    }

    public function guestInfo(Request $request)
    {
        if (Session::get("student_id") == null) {
            return Redirect::to("/student/personal-info");
        }

        if ($request->isMethod("POST")) {


            //return $request->all();

            try {
                if (implode(null, $request['guest_name']) == null) {
                    return Redirect::to("/student/gift-info");
                }
                // return $request->all();


                $i = 0;

                foreach ($request['guest_name'] as $item) {

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

                Alert::success("Success", "Successfully Created");
                return Redirect::to("/student/gift-info");
            } catch (\Exception $exception) {
                Alert::error("Success", $exception->getMessage());
                return back();
            }
        }

        return view("frontend.student.guest-info")->with("student_id", (Session::get("student_id")));
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
                Alert::error("Success", $exception->getMessage());
                return back();
            }
        }
        return view("frontend.student.gift-info")
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
                Alert::error("Success", $exception->getMessage());
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
                Alert::error("Success", $exception->getMessage());
                return back();
            }

        }*/


        return view("frontend.current_student.fee-info")
            ->with("student_id", (Session::get("student_id")));
    }

    public function invitationInfo(Request $request)
    {
        //return $request->all();
        if (Session::get("student_id") == null) {
            return Redirect::to("/student/personal-info");
        }


        // echo "Transaction is Successful";
        Student::where('id',Session::get("student_id")  )->update([
            'is_payment'=> true,
        ]);

        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');
        $student_id = $request->input('value_a');

        $array = [
            'student_id' => $student_id,
            'tran_id' => $tran_id,
            'amount' => $amount,
            'ssl_data' => json_encode($request->all()),
        ];

        try {
            Payment::create($array);
        } catch (\Exception $exception) {

            return $exception->getMessage();
        }

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


        if ($request['value_a'] == "current") {
            return view("frontend.current_student.invitation-info")
                ->with("student", $student);
        } else {

            $invoice = uniqid();
            $data = [
                'invoice' => $invoice,
                'name' => $student->name,
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
                'logo' => "/frontend/img/header-logo.png",
                'sign1' => "/frontend/img/asit-signature.png",
                'sign2' => "/frontend/img/jillur-rahman.png",
                'sign3' => "/frontend/img/ratan-signature.png",
                'subject' => "অংশ হোন ৭৫ বছরের ঐতিহ্যের রেজিস্ট্রেশন ",
            ];
            $message = "Congrats! Your '75 Years Celebration and Reunion of Chandpur College' registration is Successful! Check Your Email Inbox or Spam Folder for Invitation Letter.";

            sendSms($student->phone, $message);

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
            Pdf::loadView('ticket', $data)->save($path . '/' . $fileName);

            Mail::send('email-template.confirm', $data, function ($message) use ($data, $invoice) {
                $message->to($data['email'])
                    ->subject($data['subject']);
                $message->from('asad.livingbrands@gmail.com', $data['subject']);
                $message->attach(public_path() . "/pdf/$invoice.pdf");
            });

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
        $post_data['value_a'] = Session::get("student_id");
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

        $payments= Payment::all();
        foreach ($payments as $item){
            Student::where('id', $item->student_id)->update([
                'is_payment'=> true
            ]);
        }
   return "ok";

        return view("test");
    }
}
