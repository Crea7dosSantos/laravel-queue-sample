<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class Store extends FormRequest
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
        Log::debug(__CLASS__ . '::' . __FUNCTION__ . ' called:(' . __LINE__ . ')');

        return [
            'email' => 'required|max:50|email',
            'title' => 'required|min:1|max:30',
            'content' => 'required|min:1|max:16777215'
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'email is required',
            'email.max' => 'email is less twenty characters',
            'title.required' => 'title is required',
            'title.min' => 'title is more one characters',
            'title.max' => 'title is less thirty characters',
            'content.required' => 'content is required',
            'content.min' => 'content is more one characters',
            'content.max' => 'title is less 16777215 characters',
        ];
    }
}
