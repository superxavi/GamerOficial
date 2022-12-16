<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Equipo;

class Equipos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $ID_EQU, $NOMBRE_EQU, $OBSERVACION_EQU;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.equipos.view', [
            'equipos' => Equipo::latest()
						->orWhere('ID_EQU', 'LIKE', $keyWord)
						->orWhere('NOMBRE_EQU', 'LIKE', $keyWord)
						->orWhere('OBSERVACION_EQU', 'LIKE', $keyWord)
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
		$this->ID_EQU = null;
		$this->NOMBRE_EQU = null;
		$this->OBSERVACION_EQU = null;
    }

    public function store()
    {
        $this->validate([
		'ID_EQU' => 'required',
        ]);

        Equipo::create([ 
			'ID_EQU' => $this-> ID_EQU,
			'NOMBRE_EQU' => $this-> NOMBRE_EQU,
			'OBSERVACION_EQU' => $this-> OBSERVACION_EQU
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Equipo Successfully created.');
    }

    public function edit($id)
    {
        $record = Equipo::findOrFail($id);

        $this->selected_id = $id; 
		$this->ID_EQU = $record-> ID_EQU;
		$this->NOMBRE_EQU = $record-> NOMBRE_EQU;
		$this->OBSERVACION_EQU = $record-> OBSERVACION_EQU;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'ID_EQU' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Equipo::find($this->selected_id);
            $record->update([ 
			'ID_EQU' => $this-> ID_EQU,
			'NOMBRE_EQU' => $this-> NOMBRE_EQU,
			'OBSERVACION_EQU' => $this-> OBSERVACION_EQU
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Equipo Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Equipo::where('id', $id);
            $record->delete();
        }
    }
}
