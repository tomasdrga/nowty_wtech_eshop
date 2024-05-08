<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class ShippingInformation extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table = 'shipping_information';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [
      'first_name',
      'last_name',
      'telephone',
      'address',
      'city',
      'postal_code',
      'country'
    ];

    public function information()
    {
      return $this->belongsTo(Information::class);
    }
}
