<?php

namespace App\Http\Requests\Plantrecords;

use App\plantrecords;
use Illuminate\Foundation\Http\FormRequest;

class PlantrecordsUpdateRequest extends FormRequest
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
            'titlerecord'   => 'min:5|max:250|required|string',
            'dateplant'     => 'required|date',
            'planthour'     => 'required|string',
            'plantevente'   => 'min:5|max:65000|required|string',
            'actionsevent'  => 'min:5|max:65000|required|string',
            'plant_id'      => 'min:1|max:10|required|string',
            'user_id'       => 'min:1|max:10|required|string',
        ];
    }
}
