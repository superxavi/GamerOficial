<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Jugadore;

class Jugadores extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $ID_JUG, $ID_EQU, $NOMBRE_JUG, $CEDULA_JUG, $TELEFONO_JUG, $CORREO_JUG, $OBSERVACION_JUG;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.jugadores.view', [
            'jugadores' => Jugadore::latest()
						->orWhere('ID_JUG', 'LIKE', $keyWord)
						->orWhere('ID_EQU', 'LIKE', $keyWord)
						->orWhere('NOMBRE_JUG', 'LIKE', $keyWord)
						->orWhere('CEDULA_JUG', 'LIKE', $keyWord)
						->orWhere('TELEFONO_JUG', 'LIKE', $keyWord)
						->orWhere('CORREO_JUG', 'LIKE', $keyWord)
						->orWhere('OBSERVACION_JUG', 'LIKE', $keyWord)
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
		$this->ID_JUG = null;
		$this->ID_EQU = null;
		$this->NOMBRE_JUG = null;
		$this->CEDULA_JUG = null;
		$this->TELEFONO_JUG = null;
		$this->CORREO_JUG = null;
		$this->OBSERVACION_JUG = null;
    }

    public function store()
    {
        $this->validate([
		'ID_JUG' => 'required',
        ]);

        Jugadore::create([ 
			'ID_JUG' => $this-> ID_JUG,
			'ID_EQU' => $this-> ID_EQU,
			'NOMBRE_JUG' => $this-> NOMBRE_JUG,
			'CEDULA_JUG' => $this-> CEDULA_JUG,
			'TELEFONO_JUG' => $this-> TELEFONO_JUG,
			'CORREO_JUG' => $this-> CORREO_JUG,
			'OBSERVACION_JUG' => $this-> OBSERVACION_JUG
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Jugadore Successfully created.');
    }

    public function edit($id)
    {
        $record = Jugadore::findOrFail($id);

        $this->selected_id = $id; 
		$this->ID_JUG = $record-> ID_JUG;
		$this->ID_EQU = $record-> ID_EQU;
		$this->NOMBRE_JUG = $record-> NOMBRE_JUG;
		$this->CEDULA_JUG = $record-> CEDULA_JUG;
		$this->TELEFONO_JUG = $record-> TELEFONO_JUG;
		$this->CORREO_JUG = $record-> CORREO_JUG;
		$this->OBSERVACION_JUG = $record-> OBSERVACION_JUG;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'ID_JUG' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Jugadore::find($this->selected_id);
            $record->update([ 
			'ID_JUG' => $this-> ID_JUG,
			'ID_EQU' => $this-> ID_EQU,
			'NOMBRE_JUG' => $this-> NOMBRE_JUG,
			'CEDULA_JUG' => $this-> CEDULA_JUG,
			'TELEFONO_JUG' => $this-> TELEFONO_JUG,
			'CORREO_JUG' => $this-> CORREO_JUG,
			'OBSERVACION_JUG' => $this-> OBSERVACION_JUG
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Jugadore Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Jugadore::where('id', $id);
            $record->delete();
        }
    }
}
