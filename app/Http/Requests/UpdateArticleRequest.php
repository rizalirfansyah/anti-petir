<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateArticleRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category' => 'required|string|max:255',
            'file' => 'required|file|mimes:png,jpg,jpeg',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            redirect()->back()->withInput()->withErrors($validator->errors())->with('error', 'Gagal menyimpan data.')
        );
    }
}
