<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailDonation extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_detail_donation';

    public function donation() : HasOne
    {
        return $this->HasOne(Donation::class, 'id_donation','id_donation');
    }

    public function users() : HasOne
    {
        return $this->hasOne(User::class, "id", "id_user");
    }
}
