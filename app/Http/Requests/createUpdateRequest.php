<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
               'naziv' => 'required|string|max:150',
               'oseba' => 'required|string|max:150',
               'opis' => 'required|string|max:1750',
               'datumZakljucevanja' => 'date',
               'zakljuceno' => 'boolean'
           ];
    }


}
