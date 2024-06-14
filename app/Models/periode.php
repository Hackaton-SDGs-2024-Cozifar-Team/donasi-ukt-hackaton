<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;

    // protected $guarted = [];
    protected $primaryKey = 'id_periode';
    protected $fillable = ['school_year', 'status_period'];
}
