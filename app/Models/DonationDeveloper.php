<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationDeveloper extends Model
{
    use HasFactory;
    protected $guarded = ['id_donation_developer'];
    protected $primaryKey = 'id_donation_developer';
    protected $table = 'donation_developers';
}