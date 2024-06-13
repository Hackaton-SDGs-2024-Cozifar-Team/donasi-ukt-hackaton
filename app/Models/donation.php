<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donation extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_donation';

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
