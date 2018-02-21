<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class EditMotorcyclesRequest extends FormRequest
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
            'name'      => 'required',
            'model'     => 'required|digits:4',
            'cc'        => 'required|digits:4',
            'color'     => 'required|integer',
            'weight'    => 'required|max:7',
            'price'     => 'required|integer',
            'state_img' => 'required|in:0,1',
            'image'     => 'required_if:state_img,==,1|image'
        ];
    }
}
