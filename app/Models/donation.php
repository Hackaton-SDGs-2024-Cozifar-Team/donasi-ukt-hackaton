<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Donation extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_donation';
    public $incrementing = false;
    protected $fillable = ['id_donation','id_user','status'];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function detail_donation() : HasMany
    {
        return $this->hasMany(DetailDonation::class,'id_donation','id_donation');
    }
}
