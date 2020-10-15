<?php

namespace App\Http\Requests\Centers;

use Illuminate\Foundation\Http\FormRequest;

class CentersNewRequest extends FormRequest
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
            'namecenter'       => 'min:5|max:70|required|string',
            'emergencyphone'   => 'min:5|max:20|required|string',
            'boss'             => 'min:5|max:50|required|string',
            'assistant'        => 'min:5|max:70|required|string',
        ];
    }
}