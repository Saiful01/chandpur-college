<?php

namespace App\Exports;

use App\Models\Student;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    private int $user;


    public function collection()
    {
        $query = Student::where('students.is_payment', true)
            ->leftJoin('academic_qualifications', 'academic_qualifications.student_id', '=', 'students.id')
            ->leftJoin('professional_experineces', 'professional_experineces.student_id', '=', 'students.id')
            /*   ->join('guest_infos', 'guest_infos.student_id', '=', 'students.id')*/
            ->leftJoin('gift_deliveries', 'gift_deliveries.student_id', '=', 'students.id')
           /* ->leftJoin('payments', 'payments.student_id', '=', 'students.id')*/
           ->distinct('students.registration_id')
            ->select(
                'students.registration_id',
                'students.name',
                'students.nationality',
                'students.email',
                'students.phone',
                'students.address',
                'students.zila',
                'students.father_name',
                'students.mother_name',
                'students.nid_no',
                'students.t_shirt_size',
                'academic_qualifications.program_name',
                'academic_qualifications.department',
                'academic_qualifications.session',
                'academic_qualifications.reg_no',
                'academic_qualifications.roll_no',
                'academic_qualifications.passing_year',
                'professional_experineces.profession',
                'professional_experineces.designation',
                'professional_experineces.institute_name',
                'professional_experineces.office_phone',
                'professional_experineces.office_email',
                /*   'guest_infos.guest_name',
                   'guest_infos.relation',
                   'guest_infos.age',
                   'guest_infos.gender',
                   'guest_infos.tshirt_size',
                   'gift_deliveries.delivery_type',*/
                'gift_deliveries.delivery_type',
           /*     'payments.tran_id',
                'payments.amount',*/


            );

        return $query->get();



        /*$users = Student::select('registration_id', 'name', 'nationality', 'email', 'phone', 'address',
            'zila', 'father_name', 'mother_name', 'nid_no', 't_shirt_size')
            ->with(['academicQualification' => function ($query) {
                $query->select('program_name', 'department', 'session', 'reg_no', 'roll_no', 'passing_year');
            }, 'profession' => function ($query) {
                $query->select('profession', 'designation', 'office_phone', 'office_email');
            }, 'gift' => function ($query) {
                $query->select('delivery_type');
            }])->where('is_payment', true)->get();*/
    }

    public function headings(): array
    {
        return ["Registration id", "Students name", "Nationality", "Email", "Phone",
            "Address", "zila", "Father name", "Mother name", "Nid no", "t-shirt size", "Qualification",
            "Department", "Session", "Reg no", "Roll no", "Passing year", "Profession",
            "Designation", "Institute name", "Office phone", "Office_email", "Delivery address"/*, "Transaction id", "Amount"*/];
    }

}
