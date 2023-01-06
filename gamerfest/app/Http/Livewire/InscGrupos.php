<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\InscGrupo;

class InscGrupos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $ID_ING, $ID_EQU, $ID_VDJ, $OBSERVACION_ING;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.inscGrupos.view', [
            'inscGrupos' => InscGrupo::latest()
						->orWhere('ID_ING', 'LIKE', $keyWord)
						->orWhere('ID_EQU', 'LIKE', $keyWord)
						->orWhere('ID_VDJ', 'LIKE', $keyWord)
						->orWhere('OBSERVACION_ING', 'LIKE', $keyWord)
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
		$this->ID_ING = null;
		$this->ID_EQU = null;
		$this->ID_VDJ = null;
		$this->OBSERVACION_ING = null;
    }

    public function store()
    {
        $this->validate([
		'ID_ING' => 'required',
        ]);

        InscGrupo::create([ 
			'ID_ING' => $this-> ID_ING,
			'ID_EQU' => $this-> ID_EQU,
			'ID_VDJ' => $this-> ID_VDJ,
			'OBSERVACION_ING' => $this-> OBSERVACION_ING
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'InscGrupo Successfully created.');
    }

    public function edit($id)
    {
        $record = InscGrupo::findOrFail($id);

        $this->selected_id = $id; 
		$this->ID_ING = $record-> ID_ING;
		$this->ID_EQU = $record-> ID_EQU;
		$this->ID_VDJ = $record-> ID_VDJ;
		$this->OBSERVACION_ING = $record-> OBSERVACION_ING;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'ID_ING' => 'required',
        ]);

        if ($this->selected_id) {
			$record = InscGrupo::find($this->selected_id);
            $record->update([ 
			'ID_ING' => $this-> ID_ING,
			'ID_EQU' => $this-> ID_EQU,
			'ID_VDJ' => $this-> ID_VDJ,
			'OBSERVACION_ING' => $this-> OBSERVACION_ING
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'InscGrupo Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = InscGrupo::where('id', $id);
            $record->delete();
        }
    }
}
