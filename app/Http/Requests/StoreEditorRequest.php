<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEditorRequest extends FormRequest
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
    /**'name' =>  'required|string',
        'age' =>  'required|date',
        'email' =>  'required|email',
        'password' =>  'required|min:8',
        'gender' =>  'required|string',
        'level' => 'required|integer',
        'status' => 'required|boolean', */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'name' =>  'required|string',
            'age' =>  'required|date',
            'email' =>  'required|email',
            'password' =>  'required|min:8',
            'gender' =>  'required|string',
            'role' => 'required|string',
            'status' => 'required|boolean',
            'image' =>  'file|nullable'
        ];
    }
}
