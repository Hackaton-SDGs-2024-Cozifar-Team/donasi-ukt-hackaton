<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailDonation extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_detail_donation';

    public function donation() : BelongsTo
    {
        return $this->belongsTo(Donation::class, 'id_donation', 'id_donation');
    }

    public function periode() : BelongsTo
    {
        return $this->belongsTo(Periode::class, 'id_periode', 'id_periode');
    }
}
