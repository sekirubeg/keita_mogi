<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'price',
        'condition',
        'image'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
    public function listings()
    {
        return $this->hasMany(Listing::class);
    }
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class,'products_category','product_id','category_id')->withTimestamps();
    }
}
