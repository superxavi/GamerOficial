<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\InscIndividual;

class InscIndividuals extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $ID_INI, $ID_VDJ, $ID_JUG, $OBSERVACION_INI;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.inscIndividuals.view', [
            'inscIndividuals' => InscIndividual::latest()
						->orWhere('ID_INI', 'LIKE', $keyWord)
						->orWhere('ID_VDJ', 'LIKE', $keyWord)
						->orWhere('ID_JUG', 'LIKE', $keyWord)
						->orWhere('OBSERVACION_INI', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->ID_INI = null;
		$this->ID_VDJ = null;
		$this->ID_JUG = null;
		$this->OBSERVACION_INI = null;
    }

    public function store()
    {
        $this->validate([
		'ID_INI' => 'required',
        ]);

        InscIndividual::create([ 
			'ID_INI' => $this-> ID_INI,
			'ID_VDJ' => $this-> ID_VDJ,
			'ID_JUG' => $this-> ID_JUG,
			'OBSERVACION_INI' => $this-> OBSERVACION_INI
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'InscIndividual Successfully created.');
    }

    public function edit($id)
    {
        $record = InscIndividual::findOrFail($id);

        $this->selected_id = $id; 
		$this->ID_INI = $record-> ID_INI;
		$this->ID_VDJ = $record-> ID_VDJ;
		$this->ID_JUG = $record-> ID_JUG;
		$this->OBSERVACION_INI = $record-> OBSERVACION_INI;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'ID_INI' => 'required',
        ]);

        if ($this->selected_id) {
			$record = InscIndividual::find($this->selected_id);
            $record->update([ 
			'ID_INI' => $this-> ID_INI,
			'ID_VDJ' => $this-> ID_VDJ,
			'ID_JUG' => $this-> ID_JUG,
			'OBSERVACION_INI' => $this-> OBSERVACION_INI
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'InscIndividual Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = InscIndividual::where('id', $id);
            $record->delete();
        }
    }
}
