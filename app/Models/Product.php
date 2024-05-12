<?php

namespace App\Models;

use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use Carbon\Carbon;

class Product extends Model implements Buyable
{
    use HasFactory;
    use HasUuids;
    use Searchable;
    use SoftDeletes;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id', 'name', 'description', 'technical_details', 'category', 'price', 'slug'];

    public function getBuyableIdentifier($options = null) {
        return $this->id;
    }

    public function getBuyableDescription($options = null) {
        return $this->name;
    }

    public function getBuyableCategory($options = null) {
        return $this->category;
    }

    public function getBuyablePrice($options = null) {
        return $this->price;
    }

    public function getBuyableWeight($options = null) {
        return 0;
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }

    public function isNewArrival() {
        $created = $this->created_at;
        return $created && $created->diffInDays(Carbon::now()) <= 3;
    }

    public function images(){
        return $this->hasMany('App\Models\Image');
    }

    public function indexImage()
    {
        return $this->hasOne('App\Models\Image')->where('type', 'index');
    }

    public function mainImage()
    {
        return $this->hasOne('App\Models\Image')->where('type', 'main');
    }

    public function secondaryImages()
    {
        return $this->hasMany('App\Models\Image')->where('type', 'secondary');
    }

    public function sizeGuideImage()
    {
        return $this->hasOne('App\Models\Image')->where('type', 'size_guide');
    }

    public function sizes() {
        return $this->hasMany('App\Models\Size');
    }

    public function materials(){
        return $this->belongsToMany('App\Models\Material', 'product_materials', 'product_id', 'material_id');
    }

    public function colors(){
        return $this->belongsToMany('App\Models\Color', 'product_colors', 'product_id', 'color_id');
    }

    public function toSearchableArray()
    {
        return array_merge($this->toArray(),[
            'id' => (string) $this->id,
            'name' => (string) $this->name,
            'created_at' => $this->created_at->timestamp,
        ]);
    }
}
