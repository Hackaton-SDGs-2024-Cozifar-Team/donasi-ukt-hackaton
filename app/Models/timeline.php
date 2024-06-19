<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timeline extends Model
{
    use HasFactory;
    protected $guarded = ['id_timeline'];
    protected $primaryKey = 'id_timeline';
}
