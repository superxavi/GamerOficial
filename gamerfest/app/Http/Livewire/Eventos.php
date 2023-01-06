<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Evento;

class Eventos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $ID_EVE, $NOMBRE_EVE, $FECHA_EVE, $LUGAR_EVE, $DESCRIPCCION_EVE;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.eventos.view', [
            'eventos' => Evento::latest()
						->orWhere('ID_EVE', 'LIKE', $keyWord)
						->orWhere('NOMBRE_EVE', 'LIKE', $keyWord)
						->orWhere('FECHA_EVE', 'LIKE', $keyWord)
						->orWhere('LUGAR_EVE', 'LIKE', $keyWord)
						->orWhere('DESCRIPCCION_EVE', 'LIKE', $keyWord)
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
		$this->ID_EVE = null;
		$this->NOMBRE_EVE = null;
		$this->FECHA_EVE = null;
		$this->LUGAR_EVE = null;
		$this->DESCRIPCCION_EVE = null;
    }

    public function store()
    {
        $this->validate([
		'ID_EVE' => 'required',
        ]);

        Evento::create([ 
			'ID_EVE' => $this-> ID_EVE,
			'NOMBRE_EVE' => $this-> NOMBRE_EVE,
			'FECHA_EVE' => $this-> FECHA_EVE,
			'LUGAR_EVE' => $this-> LUGAR_EVE,
			'DESCRIPCCION_EVE' => $this-> DESCRIPCCION_EVE
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Evento Successfully created.');
    }

    public function edit($id)
    {
        $record = Evento::findOrFail($id);

        $this->selected_id = $id; 
		$this->ID_EVE = $record-> ID_EVE;
		$this->NOMBRE_EVE = $record-> NOMBRE_EVE;
		$this->FECHA_EVE = $record-> FECHA_EVE;
		$this->LUGAR_EVE = $record-> LUGAR_EVE;
		$this->DESCRIPCCION_EVE = $record-> DESCRIPCCION_EVE;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'ID_EVE' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Evento::find($this->selected_id);
            $record->update([ 
			'ID_EVE' => $this-> ID_EVE,
			'NOMBRE_EVE' => $this-> NOMBRE_EVE,
			'FECHA_EVE' => $this-> FECHA_EVE,
			'LUGAR_EVE' => $this-> LUGAR_EVE,
			'DESCRIPCCION_EVE' => $this-> DESCRIPCCION_EVE
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Evento Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Evento::where('id', $id);
            $record->delete();
        }
    }
}
