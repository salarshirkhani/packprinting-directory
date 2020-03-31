<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

abstract class CompanyBaseRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:company_categories,id'],
            'short_description' => ['required', 'string', 'max:2000'],
            'content' => ['required', 'string', 'max:20000'],
            'city' => ['required', 'string', 'max:60'],
            'province' => ['required', 'string', 'max:60'],
            'number' => ['required', 'regex:/^[0-9-+\ ]+$/'],
            'address' => ['required', 'string', 'max:200'],
            'instagram' => ['nullable', 'regex:/^@?[a-zA-Z0-9._]*$/'],
            'telegram' => ['nullable', 'regex:/^@?[a-zA-Z0-9._]*$/'],
            'facebook' => ['nullable', 'regex:/^@?[a-zA-Z0-9._]*$/'],
            'twitter' => ['nullable', 'regex:/^@?[a-zA-Z0-9._]*$/'],
            'website' => ['nullable', 'regex:/^$|^(?:[a-z0-9](?:[a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z0-9][a-z0-9-]{0,61}[a-z0-9]$/'],
            'video' => ['nullable', 'file', 'mimes:mp4', 'max:30000'],
        ];
    }
}
