<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DonationRegistration extends Model
{
    use HasFactory;
    protected $guarded = ['id_donation_registration'];
    protected $primaryKey = 'id_donation_registration';
    protected $table = 'donation_registrations';

    public function student() :BelongsTo
    {
        return $this->belongsTo(student::class, 'student_id','id_student');
    }

    public function periode() : BelongsTo {
        return $this->belongsTo(periode::class,'id_periode','id_periode');
    }
}