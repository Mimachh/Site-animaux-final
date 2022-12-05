<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proposal;

class ButtonProposalDeclined extends Component
{
    public $proposal;

    public function declined(Proposal $proposal)
    {
        $id = $this->proposal->id;
        
        $proposal = Proposal::find($id)->update([
            'validated' => 0,
        ]);

        return redirect()->route('proposals.show', $id);
    }

    public function render()
    {
        return view('livewire.button-proposal-declined');
    }
}
