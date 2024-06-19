<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicInformation extends Model
{
    use HasFactory;
    protected $guarded = ['id_academic_information'];
    protected $primaryKey = 'id_academic_information';
    protected $table = 'academic_information';
}