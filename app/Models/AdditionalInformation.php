<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalInformation extends Model
{
    use HasFactory;
    protected $guarded = ['id_additional_information'];
    protected $primaryKey = 'id_additional_information';
    protected $table = 'additional_information';
}