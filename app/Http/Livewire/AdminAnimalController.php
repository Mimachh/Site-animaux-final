<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use Livewire\Component;
use App\View\Components\Flash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminAnimalController extends Component
{
    public $animals;

    public function mount()
    {
        $this->animals = Animal::all();
    }
    public function index()
    {
        return view('admin.animals_list');
    }

     
    public function render()
    {
        return view('livewire.admin-animal-controller');
    }
}
