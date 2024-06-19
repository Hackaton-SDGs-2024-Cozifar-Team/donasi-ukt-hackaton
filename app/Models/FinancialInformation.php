<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialInformation extends Model
{
    use HasFactory;
    protected $guarded = ['id_financial_information'];
    protected $primaryKey = 'id_financial_information';
    protected $table = 'financial_information';
}