<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'logo' => ['required', 'file', 'mimes:png,jpg,jpeg', 'max:1024'],
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:company_categories,id'],
            'short_description' => ['required', 'string', 'max:2000'],
            'content' => ['required', 'string', 'max:20000'],
            'city' => ['required', 'string', 'max:60'],
            'province' => ['required', 'string', 'max:60'],
            'number' => ['required', 'regex:/^[0-9-+\ ]+$/'],
            'address' => ['required', 'string', 'max:200'],
            'instagram' => ['required', 'regex:/^@?[a-zA-Z0-9._]+$/'],
            'telegram' => ['required', 'regex:/^@?[a-zA-Z0-9._]+$/'],
            'facebook' => ['required', 'regex:/^@?[a-zA-Z0-9._]+$/'],
            'twitter' => ['required', 'regex:/^@?[a-zA-Z0-9._]+$/'],
            'website' => ['required', 'regex:/^(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z0-9][a-z0-9-]{0,61}[a-z0-9]$/'],
            'video' => ['required', 'file', 'mimes:mp4', 'max:30000'],
        ];
    }
}
