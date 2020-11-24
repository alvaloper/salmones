<?php

namespace App\Http\Requests\Epagerecords;

use App\epagerecords;
use Illuminate\Foundation\Http\FormRequest;

class EpagerecordsUpdateRequest extends FormRequest
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
            'epagetitle'       => 'min:5|max:200|required|string',
            'epagedate'        => 'required|date',
            'epagehour'        => 'required|string',
            'eventepage'       => 'min:5|max:200|required|string',
            'actionseventepage'=> 'min:5|max:200|required|string',
            'user_id'          => 'min:1|max:10|required|string',
            'file1'           => 'image|mimes:jpeg,png,jpg,gif,svg|max:7168',
            'file2'           => 'image|mimes:jpeg,png,jpg,gif,svg|max:7168',
            'file3'           => 'image|mimes:jpeg,png,jpg,gif,svg|max:7168',
            'file4'           => 'image|mimes:jpeg,png,jpg,gif,svg|max:7168',
        ];
    }
}
