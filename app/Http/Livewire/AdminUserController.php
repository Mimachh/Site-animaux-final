<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminUserController extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }

    public function adminDeleteUser($user)
    {
        User::destroy($user);
    }

    public function index()
    {

        return view('admin.users_list');
    }

   

    public function render()
    {
        return view('livewire.admin-user-controller');
    }
}
