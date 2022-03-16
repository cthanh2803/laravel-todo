<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTask extends FormRequest
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
            //
            return [
                'title' => 'required|max:100',
                'due_date' => 'required|date|after_or_equal:today',
            ];
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Title',
            'due_date' => 'Expire'
        ];
    }

    public function messages()
    {
        return [
            'due_date.after_or_equal' => ':attribute Please input the date after today.'
        ]
    }
}
