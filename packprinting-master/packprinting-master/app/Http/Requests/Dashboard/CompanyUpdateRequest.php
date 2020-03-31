<?php

namespace App\Http\Requests\Dashboard;

class CompanyUpdateRequest extends CompanyBaseRequest
{
    public function rules()
    {
        return array_merge(parent::rules(), [
            'logo' => ['nullable', 'file', 'mimes:png,jpg,jpeg', 'max:1024'],
        ]);
    }
}
