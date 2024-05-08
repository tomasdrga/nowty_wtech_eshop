<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class PaymentInformation extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table = 'payment_information';

    protected $fillable = [
      'first_name',
      'last_name',
      'card_number',
      'expiration_date',
      'security_code'
    ];

}
