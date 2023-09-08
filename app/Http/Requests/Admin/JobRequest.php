<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'title'=>'required|alpha|max:100',
            'location'=>'required',
            'type'=>'required|max:9',
            'gender'=>'required|alpha|max:10',
            'salary'=>'required|alpha_num|max:15',
            'category'=>'required|alpha|min:2|max:15',
            'qualification'=>'required',
            'no_of_vacancy'=>'required|alpha_num',
            'responsibility'=>'required'
        ];
    }
}
