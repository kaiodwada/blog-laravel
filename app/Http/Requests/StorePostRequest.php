<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'author' => 'nullable',
            'title' => 'required',
            'media' => 'nullable',
            'content' => 'required',
            'category_id' => 'required|integer',
            'status' => 'required|boolean',
            'version' => 'required',
        ];
    }
}
