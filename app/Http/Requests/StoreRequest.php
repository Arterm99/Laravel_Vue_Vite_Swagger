<?php

namespace App\Http\Requests;

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

            'name' => 'required|string',
            'firstname' => 'required|string',
            'patronymic' => 'required|string',
            'company' => 'string',
            'mobile' => 'required|string',
            'email' => 'required|string|email',
            'data' => 'string',
            'url_image' => 'file',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'firstname.required' => 'Это поле необходимо для заполнения',
            'patronymic.required' => 'Это поле необходимо для заполнения',
            'mobile.required' => 'Это поле необходимо для заполнения',
            'email.required' => 'Это поле необходимо для заполнения',

            'name.string' => 'Это поле необходимо для заполнения',
            'firstname.string' => 'Это поле необходимо для заполнения',
            'patronymic.string' => 'Это поле необходимо для заполнения',
            'company.string' => 'Это поле необходимо для заполнения',
            'mobile.string' => 'Это поле необходимо для заполнения',
            'email.string' => 'Это поле необходимо для заполнения',
            'data.string' => 'Это поле необходимо для заполнения',

            'email.email' => 'Ваша почта должна соотвтетствувать формату mail@some.domain',


            'url_image.file' => 'Необходимов выбрать файл',
        ];
    }

}
