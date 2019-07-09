<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputeRequest extends FormRequest {



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'value' => 'required|integer|max:65000',
            'emojis' => 'required',
            'value2' => 'required|integer|max:65000'
        ];
    }
}