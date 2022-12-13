<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proposal;

class AdminProposalController extends Component
{
    public $proposals;

    public function mount()
    {
        $this->proposals = Proposal::all();

    }
    public function index()
    {
        return view('admin.proposals_list');
    }

    public function render()
    {
        return view('livewire.admin-proposal-controller');
    }
}
