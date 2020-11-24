<?php

namespace App\Http\Requests\Maritimerecords;

use Illuminate\Foundation\Http\FormRequest;

class MaritimerecordsNewRequest extends FormRequest
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
            'turn'          => 'min:5|max:10|required|string',
            'datemarine'    => 'required|date',
            'landfallhour'  => 'required|string',
            'marineevent'   => 'min:5|max:65000|required|string',
            'center_id'     => 'min:1|max:10|required|string',
            'user_id'       => 'min:1|max:10|required|string',
        ];
    }
}