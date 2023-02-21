<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required | string',
            'email' => 'required | string | unique: users,email',
            'password' => 'required | string | confirmed',
            'surname' => 'nullable | string',
            'patronymic' => 'nullable | string',
            'age' => 'nullable | integer',
            'address' => 'nullable | string',
            'gender' => 'nullable | integer',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Это после необходимо для заполнения.',
            'name.string' => 'Это должна быть строка.',
            'email.required' => 'Это после необходимо для заполнения.',
            'email.string' => 'Это должна быть строка.',
            'password.required' => 'Это после необходимо для заполнения.',
            'password.string' => 'Это должна быть строка.',
            'password.confirmed' => 'Пароль и его подтверждение не совпадают.',
            'surname.string' => 'Это должна быть строка.',
            'patronymic.string' => 'Это должна быть строка.',
            'age.string' => 'Это должно быть число.',
            'address.string' => 'Это должна быть строка.',
            'gender.integer' => 'Вам нужно выбрать.',
        ];
    }
}
