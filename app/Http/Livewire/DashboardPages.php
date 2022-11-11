<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DashboardPages extends Component
{

    /* Séparation des pages */

    public $currentPage = 1;
    public $pages = [1=>1,
                    2=>2,
                    3=>3,
                    4=>4];

    public function goToPageFav()
    {
     $this->currentPage = 1;
    }
   public function goToPageAds()
   {
    $this->currentPage = 2;
   }
   public function goToPageMess()
   {
    $this->currentPage = 3;
   }
   public function goToPageGardes()
   {
    $this->currentPage = 4;
   }

    public function render()
    {
        return view('livewire.dashboard-pages');
    }
}
