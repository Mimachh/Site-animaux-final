<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $nom;
    public $prenom;
    public $sujet;
    public $message;
    public $email;

    protected $rules = [
            'nom' => 'required|min:4',
            'email' => 'required|email',
            'sujet' => 'required',
            'message' => 'required',
            'prenom' => 'required',
        ];
    

    public function store()
    {
        $this->validate();

        Contact::create([
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'sujet' => $this->sujet,
            'message' => $this->message,
            'email' => $this->email,
        ]);

    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
