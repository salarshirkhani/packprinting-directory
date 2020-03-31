<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'photo' => ['required', 'file', 'mimes:png,jpg,jpeg', 'max:1024'],
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:product_categories,id'],
            'short_description' => ['required', 'string', 'max:2000'],
            'content' => ['required', 'string', 'max:20000'],
            'keyword' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer', 'min:0'],
        ];
    }
}
