<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class student extends Model
{
    use HasFactory;
    protected $guarded = ['id_student'];
    protected $primaryKey = 'id_student';
    protected $table = 'students';

    public function users() : HasOne
    {
        return $this->hasOne(User::class, "id", "id_user");
    }
    public function additional_information() : HasOne
    {
        return $this->hasOne(AdditionalInformation::class,"id_additional_information","id_additional_information");
    }

    public function academic_information() : HasOne
    {
        return $this->hasOne(AcademicInformation::class,"id_academic_information","id_academic_information");
    }

    public function family_information() : HasOne
    {
        return $this->hasOne(FamilyInformation::class,"id_family_information","id_family_information");
    }

    public function financial_information() : HasOne
    {
        return $this->hasOne(FinancialInformation::class,"id_financial_information","id_financial_information");
    }

    public function donation_registration() : BelongsTo
    {
        return $this->belongsTo(DonationRegistration::class,"id_student","student_id");
    }
}