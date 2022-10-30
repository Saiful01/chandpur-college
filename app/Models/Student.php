<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded=[];
    public $timestamps=true;

    public function academicQualification()
    {
        return $this->hasOne(AcademicQualification::class);
    }

    public function profession()
    {
        return $this->hasOne(ProfessionalExperinece::class);
    }
    public function guest()
    {
        return $this->hasMany(GuestInfo::class);
    }
    public function gift()
    {
        return $this->hasOne(GiftDelivery::class);
    }

}
