<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'short_description',
        'content',
        'city',
        'province',
        'number',
        'address',
        'instagram',
        'telegram',
        'facebook',
        'twitter',
        'website',
    ];

    public function creator() {
        return $this->belongsTo('App\User', 'creator_id');
    }

    public function category() {
        return $this->belongsTo('App\CompanyCategory', 'category_id');
    }
}
