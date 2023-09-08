<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'comment' => 'required|min:10'
        ];
    }

    public function messages() {
        return [
            'comment.required' => 'The :attribute field is requiredfffff.',
            'comment.min' => 'The :attribute field should be atleast 10 characters.'
        ];
    }
}
