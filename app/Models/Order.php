<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Order extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'order_number',
        'user_id',
        'shipping_id',
        'payment_id',
        'total'
    ];

    public function shipping_information()
    {
      return $this->belongsTo(ShippingInformation::class, 'shipping_id');
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function payment_information()
    {
      return $this->belongsTo(Payment::class);
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
