<?php

namespace App\Exports;

use App\Models\Student;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private int $user;


    public function collection()
    {
        return $query = Student::with("academicQualification", "profession", "guests", "gift", 'payments')

            ->orderBy('created_at', "DESC")->where('is_payment', true)->get();
    }

}
