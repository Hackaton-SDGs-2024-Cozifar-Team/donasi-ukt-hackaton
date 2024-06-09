<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationRegistration extends Model
{
    use HasFactory;

    protected $table = 'donation_registrations';
    protected $fillable = [
        'student_id', 'status', 'id_periode',
    ];
}
