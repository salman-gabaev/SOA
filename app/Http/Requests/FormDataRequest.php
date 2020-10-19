<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormDataRequest extends FormRequest
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
            'page_uid' => ['required', 'min:5', 'max:64', 'string', 'unique:data'],
            'fields.name' => ['required', 'min:3', 'max:16', 'string'],
            'fields.email' => ['required', 'min:5', 'max:16', 'string'],
            'fields.phone' => ['required', 'min:5', 'numeric'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'fields.name' => 'Name',
            'fields.email' => 'Email',
            'fields.phone' => 'Phone',
        ];
    }
}
