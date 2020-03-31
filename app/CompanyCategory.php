<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyCategory extends Model
{
    protected $table = 'company_categories';

    public function companies() {
        return $this->hasMany('App\Company', 'category_id');
    }
}
