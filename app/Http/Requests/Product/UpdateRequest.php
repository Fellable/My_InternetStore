<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required | string',
            'description' => 'required | string  ',
            'content' => 'required | string  ',
            'preview_image' => 'required ',
            'price' => 'required | integer ',
            'old_price' => 'required | integer ',
            'count' => 'required | integer ',
            'is_published' => 'nullable | boolean  ',
            'category_id' => 'nullable ',
            'group_id' => 'nullable ',
            'tags' => 'nullable | array ',
            'colors' => 'nullable | array ',
        ];
    }
}
