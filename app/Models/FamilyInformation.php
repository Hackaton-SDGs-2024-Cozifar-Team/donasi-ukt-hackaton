<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyInformation extends Model
{
    use HasFactory;
    protected $guarded = ['id_family_information'];
    protected $primaryKey = 'id_family_information';
    protected $table = 'family_information';
}