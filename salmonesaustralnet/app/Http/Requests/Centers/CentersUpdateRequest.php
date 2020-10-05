<?php

namespace App\Http\Requests\Centers;

use App\centers;
use Illuminate\Foundation\Http\FormRequest;

class CentersUpdateRequest extends FormRequest
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
        return[
          'namecenter' => 'min:5|max:50|required|string',
            ];
    }
}
