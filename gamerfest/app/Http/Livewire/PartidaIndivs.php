<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PartidaIndiv;

class PartidaIndivs extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $ID_PAI, $ID_VDJ, $ID_JUG, $HORA_INICIO_PAI, $FECHA_PAI, $OBSERVACION_PAI;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.partidaIndivs.view', [
            'partidaIndivs' => PartidaIndiv::latest()
						->orWhere('ID_PAI', 'LIKE', $keyWord)
						->orWhere('ID_VDJ', 'LIKE', $keyWord)
						->orWhere('ID_JUG', 'LIKE', $keyWord)
						->orWhere('HORA_INICIO_PAI', 'LIKE', $keyWord)
						->orWhere('FECHA_PAI', 'LIKE', $keyWord)
						->orWhere('OBSERVACION_PAI', 'LIKE', $keyWord)
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
		$this->ID_PAI = null;
		$this->ID_VDJ = null;
		$this->ID_JUG = null;
		$this->HORA_INICIO_PAI = null;
		$this->FECHA_PAI = null;
		$this->OBSERVACION_PAI = null;
    }

    public function store()
    {
        $this->validate([
		'ID_PAI' => 'required',
        ]);

        PartidaIndiv::create([ 
			'ID_PAI' => $this-> ID_PAI,
			'ID_VDJ' => $this-> ID_VDJ,
			'ID_JUG' => $this-> ID_JUG,
			'HORA_INICIO_PAI' => $this-> HORA_INICIO_PAI,
			'FECHA_PAI' => $this-> FECHA_PAI,
			'OBSERVACION_PAI' => $this-> OBSERVACION_PAI
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'PartidaIndiv Successfully created.');
    }

    public function edit($id)
    {
        $record = PartidaIndiv::findOrFail($id);

        $this->selected_id = $id; 
		$this->ID_PAI = $record-> ID_PAI;
		$this->ID_VDJ = $record-> ID_VDJ;
		$this->ID_JUG = $record-> ID_JUG;
		$this->HORA_INICIO_PAI = $record-> HORA_INICIO_PAI;
		$this->FECHA_PAI = $record-> FECHA_PAI;
		$this->OBSERVACION_PAI = $record-> OBSERVACION_PAI;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'ID_PAI' => 'required',
        ]);

        if ($this->selected_id) {
			$record = PartidaIndiv::find($this->selected_id);
            $record->update([ 
			'ID_PAI' => $this-> ID_PAI,
			'ID_VDJ' => $this-> ID_VDJ,
			'ID_JUG' => $this-> ID_JUG,
			'HORA_INICIO_PAI' => $this-> HORA_INICIO_PAI,
			'FECHA_PAI' => $this-> FECHA_PAI,
			'OBSERVACION_PAI' => $this-> OBSERVACION_PAI
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'PartidaIndiv Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = PartidaIndiv::where('id', $id);
            $record->delete();
        }
    }
}
