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
           
            
            'visit' => 'required',
            'home' => 'required',
            'watch_cat' => 'required',
            'watch_dog' => 'required',
            'watch_rabbit' => 'required',
            'watch_bird' => 'required',
            'watch_reptile' => 'required',
            'watch_farm_animal' => 'required',
            'watch_other_animal' => 'required',
           
            'start_watch' => 'required',
            'end_watch' => 'required',
           
            /*
            'garde_type' => 'required',
            'animaux_gardes' => 'required',
            */

            'description' => 'required',
            'price' => ['numeric', 'required'],

        ];
    
    }
    
}
