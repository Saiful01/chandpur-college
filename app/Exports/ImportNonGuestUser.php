<?php

namespace App\Exports;

use App\Models\GuestInfo;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ImportNonGuestUser implements FromCollection, withHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $studentIdsWithPayment = GuestInfo::join('students', 'students.id', '=', 'guest_infos.student_id')
            ->where('students.is_payment', true)->pluck('guest_infos.student_id');

        $studentsWithoutPayment = Student::where('is_payment', true)
            ->select('registration_id',
                'name',
                'nationality',
                'email',
                'phone',
                'address',
                'zila',
                'father_name',
                'mother_name',
                'nid_no',
                't_shirt_size')
            ->whereNotIn('id', $studentIdsWithPayment)
            ->get();

        return $studentsWithoutPayment;
    }
    public function headings(): array
    {
        return ["Registration id", "Students name", "Nationality", "Email", "Phone",
            "Address", "zila", "Father name", "Mother name", "Nid no", "t-shirt size"];
    }
}
