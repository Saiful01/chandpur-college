<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestInfo extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps=true;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
