<?php

namespace App\Http\Requests\Dashboard;

class CompanyStoreRequest extends CompanyBaseRequest
{
    public function rules()
    {
        return array_merge(parent::rules(), [
            'logo' => ['required', 'file', 'mimes:png,jpg,jpeg', 'max:1024'],
        ]);
    }
}
