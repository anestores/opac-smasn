<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
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
            'name' => 'required|unique:books|max:180',
            'author' => 'required | max:180',
            'accession_number' => 'required | max:80',
            'subject_id' => 'required',
            'copyright' => 'required | max:50',
            'shelflocation' => 'required | max:50'
        ];
    }
}
