<?php

namespace App\Http\Controllers;


use App\Models\Payment;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

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
        $query = Student::with("academicQualification", "profession", "guests", "gift", 'payment')->orderBy('created_at', "DESC");
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
        $query = Student::with("academicQualification", "profession", "guests", "gift", 'payment')->orderBy('created_at', "DESC")->where('is_payment', true);
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

    public function nonpaymentStudent(Request $request)
    {
        $query = Student::with("academicQualification", "profession", "guests", "gift", 'payment')->orderBy('created_at', "DESC")->where('is_payment', false);
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
}
