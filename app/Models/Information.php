<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Information extends Model
{
  use HasFactory;
  use HasUuids;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

  protected $fillable = [
    'user_id',
    'shipping_id',
    'payment_id'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function shipping_information()
  {
    return $this->belongsTo(ShippingInformation::class, 'shipping_id');
  }

  public function payment_information()
  {
    return $this->belongsTo(Payment::class);
  }

}
