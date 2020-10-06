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
            'titlerecord' => 'min:5|max:50|required|string',
            'dateplant' => 'min:5|max:50|required|string',
            'planthour' => 'min:5|max:50|required|string',
            'plantevent' => 'min:5|max:50|required|string',
            'actionsevent' => 'min:5|max:50|required|string',
            'plan_id' => 'min:5|max:50|required|string',
            'user_id' => 'min:5|max:50|required|string',
            ];
    }
}
