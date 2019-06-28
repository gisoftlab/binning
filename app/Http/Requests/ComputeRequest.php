<?php


namespace App\Http\Requests;

class ComputeRequest extends Request {
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'value' => 'required|max:65000',
            'emojis' => 'required|email',
            'value2' => 'required|max:65000'
        ];
    }
}