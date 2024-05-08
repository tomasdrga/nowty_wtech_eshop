<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id', 'name', 'description', 'technical_details', 'category', 'price', 'slug'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }

    public function isNewArrival() {
        $created = $this->created_at;
        return $created && $created->diffInDays(Carbon::now()) <= 7;
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

    public function sizes() {
        return $this->hasMany('App\Models\Size');
    }

    public function materials(){
        return $this->belongsToMany('App\Models\Material', 'product_materials', 'product_id', 'material_id');
    }

    public function colors(){
        return $this->belongsToMany('App\Models\Color', 'product_colors', 'product_id', 'color_id');
    }
}
