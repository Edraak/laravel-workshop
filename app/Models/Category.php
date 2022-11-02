<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = ['id', 'name', 'description', 'created_at', 'updated_at'];

    // one category has many product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
