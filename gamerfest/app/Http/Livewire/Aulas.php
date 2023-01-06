<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Aula;

class Aulas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $ID_AUL, $NOMBRE_AUL, $EDIFICIO_AUL, $DIRECCION_AUL, $OBSERVACION_AUL;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.aulas.view', [
            'aulas' => Aula::latest()
						->orWhere('ID_AUL', 'LIKE', $keyWord)
						->orWhere('NOMBRE_AUL', 'LIKE', $keyWord)
						->orWhere('EDIFICIO_AUL', 'LIKE', $keyWord)
						->orWhere('DIRECCION_AUL', 'LIKE', $keyWord)
						->orWhere('OBSERVACION_AUL', 'LIKE', $keyWord)
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
		$this->ID_AUL = null;
		$this->NOMBRE_AUL = null;
		$this->EDIFICIO_AUL = null;
		$this->DIRECCION_AUL = null;
		$this->OBSERVACION_AUL = null;
    }

    public function store()
    {
        $this->validate([
		'ID_AUL' => 'required',
        ]);

        Aula::create([ 
			'ID_AUL' => $this-> ID_AUL,
			'NOMBRE_AUL' => $this-> NOMBRE_AUL,
			'EDIFICIO_AUL' => $this-> EDIFICIO_AUL,
			'DIRECCION_AUL' => $this-> DIRECCION_AUL,
			'OBSERVACION_AUL' => $this-> OBSERVACION_AUL
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Aula Successfully created.');
    }

    public function edit($id)
    {
        $record = Aula::findOrFail($id);

        $this->selected_id = $id; 
		$this->ID_AUL = $record-> ID_AUL;
		$this->NOMBRE_AUL = $record-> NOMBRE_AUL;
		$this->EDIFICIO_AUL = $record-> EDIFICIO_AUL;
		$this->DIRECCION_AUL = $record-> DIRECCION_AUL;
		$this->OBSERVACION_AUL = $record-> OBSERVACION_AUL;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'ID_AUL' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Aula::find($this->selected_id);
            $record->update([ 
			'ID_AUL' => $this-> ID_AUL,
			'NOMBRE_AUL' => $this-> NOMBRE_AUL,
			'EDIFICIO_AUL' => $this-> EDIFICIO_AUL,
			'DIRECCION_AUL' => $this-> DIRECCION_AUL,
			'OBSERVACION_AUL' => $this-> OBSERVACION_AUL
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Aula Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Aula::where('id', $id);
            $record->delete();
        }
    }
}
