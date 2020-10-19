<?php

namespace App\Http\Requests\Plantrecords;

use Illuminate\Foundation\Http\FormRequest;

class PlantrecordsNewRequest extends FormRequest
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
            'titlerecord'   => 'min:5|max:200|required|string',
            'dateplant'     => 'required|date',
            'planthour'     => 'required|string',
            'plantevente'   => 'min:5|max:200|required|string',
            'actionsevent'  => 'min:5|max:200|required|string',
            'plant_id'      => 'min:1|max:10|required|string',
            'user_id'       => 'min:1|max:10|required|string',
        ];
    }
}