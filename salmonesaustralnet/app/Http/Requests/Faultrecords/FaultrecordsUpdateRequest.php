<?php

namespace App\Http\Requests\Faultrecords;

use App\faultrecords;
use Illuminate\Foundation\Http\FormRequest;

class FaultrecordsUpdateRequest extends FormRequest
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
            'faultdate' => 'min:5|max:50|required|string',
            'faulthour' => 'min:5|max:50|required|string',
            'fault' => 'min:5|max:50|required|string',
            'enddate' => 'min:5|max:50|required|string',
            'endhour' => 'min:5|max:50|required|string',
            'solution' => 'min:5|max:50|required|string',
            'user_id' => 'min:1|max:50|required|string',
            ];
    }
}
