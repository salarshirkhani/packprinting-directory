<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'short_description', 'content', 'photo', 'keyword', 'price'
    ];

    public function category() {
        return $this->belongsTo('App\ProductCategory', 'category_id');
    }

    public function company() {
        return $this->belongsTo('App\Company', 'company_id');
    }
}
