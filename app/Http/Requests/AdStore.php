<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdStore extends FormRequest
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
           

            'visit' => ['boolean','required'],
            'home' => 'required',
            'watch_cat' => 'required',
            'watch_dog' => 'required',
            'watch_rabbit' => 'required',
            'watch_bird' => 'required',
            'watch_reptile' => 'required',
            'watch_farm_animal' => 'required',
            'watch_other_animal' => 'required',
           
            
            /* Partie test avec checkbox
            'garde_type' => 'array',
            'animaux_gardes' => 'array',
            */

            'description' => 'required',
            'price' => ['numeric', 'required'],

        ];
    }
}
