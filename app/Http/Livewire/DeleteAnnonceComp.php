<?php

namespace App\Http\Livewire;

use App\Models\Annonce;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\View\Components\Flash;


class DeleteAnnonceComp extends Component
{
    public $annonce;
    use AuthorizesRequests;
    use Flash;

/* La modal Sweet Alert 2 */

    public $delete_id;

    protected $listeners = ['deleteConfirmed' => 'deleteAnnonce', 
      'deleteAnimalConfirmed' => 'deleteAnimal'
    ];

    public function deleteConfirmation($id)
      {
        $this->authorize('delete', $this->annonce);

        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');

      }
    public function deleteAnnonce()
      {
        
        
        $annonce = Annonce::where('id', $this->delete_id)->first();
       
          $annonce->delete();
       
          self::message('danger', 'Votre annonce a bien été supprimée ! :(');

          return redirect()->route('annonces.index');    
        
      }
  /* Fin la modal Sweet Alert 2 */
  
    public function render()
    {
        return view('livewire.delete-annonce-comp');
    }
}
