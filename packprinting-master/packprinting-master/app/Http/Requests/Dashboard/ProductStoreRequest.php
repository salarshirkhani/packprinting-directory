<?php

namespace App\Http\Requests\Dashboard;

class ProductStoreRequest extends ProductBaseRequest
{
    public function rules()
    {
        return array_merge(parent::rules(), [
            'photo' => ['required', 'file', 'mimes:png,jpg,jpeg', 'max:1024'],
        ]);
    }
}
