<?php

namespace App\Http\Requests\Faultrecords;

use Illuminate\Foundation\Http\FormRequest;

class FaultrecordsNewRequest extends FormRequest
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
            'faultdate' => 'required|date',
            'faulthour' => 'required|string',
            'fault'     => 'min:5|max:200|required|string',
            'enddate'   => 'required|date',
            'endhour'   => 'required|string',
            'solution'  => 'min:5|max:200|required|string',
            'user_id'   => 'min:1|max:10|required|string',
            'file1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}