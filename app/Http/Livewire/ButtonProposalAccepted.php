<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proposal;


class ButtonProposalAccepted extends Component
{
    public $proposal;
   

    public function accepted(Proposal $proposal)
    {
        $id = $this->proposal->id;
        
       /* $proposal = Proposal::findOrFail($id)->update([
            'validated' => 1,
        ]); */

        $proposal = Proposal::findOrFail($id);

        $proposal->fill(['validated' => 1]);

        if($proposal->isDirty()) {
            $proposal->save();
        }

        return redirect()->route('proposals.show', $id);

      
    }


    public function render()
    {
        return view('livewire.button-proposal-accepted');
    }
}
