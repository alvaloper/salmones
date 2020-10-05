<?php

namespace App\Http\Requests\Plants;

use App\plants;
use Illuminate\Foundation\Http\FormRequest;

class PlantsUpdateRequest extends FormRequest
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
          'nameplant' => 'min:5|max:50|required|string',
            ];
    }
}
