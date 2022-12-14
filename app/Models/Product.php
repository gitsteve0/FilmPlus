<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function values()
    {
        return $this->belongsToMany(AttributeValue::class, 'product_attribute_value');
    }

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
}
