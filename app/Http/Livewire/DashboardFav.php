<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DashboardFav extends Component
{
    public function render()
    {
        $favs = auth()->user()->fav;

        return view('livewire.dashboard-fav', ['favs' => $favs]);
    }
}
