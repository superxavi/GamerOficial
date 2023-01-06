<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Videojuego;

class Videojuegos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $ID_VDJ, $ID_CAT, $NOMBRE_VDJ, $COMPANIA_VDJ, $PRECIO_VDJ, $DESCRIPCION_VDJ, $NUMJUGADORES_VDJ;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.videojuegos.view', [
            'videojuegos' => Videojuego::latest()
						->orWhere('ID_VDJ', 'LIKE', $keyWord)
						->orWhere('ID_CAT', 'LIKE', $keyWord)
						->orWhere('NOMBRE_VDJ', 'LIKE', $keyWord)
						->orWhere('COMPANIA_VDJ', 'LIKE', $keyWord)
						->orWhere('PRECIO_VDJ', 'LIKE', $keyWord)
						->orWhere('DESCRIPCION_VDJ', 'LIKE', $keyWord)
						->orWhere('NUMJUGADORES_VDJ', 'LIKE', $keyWord)
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
		$this->ID_VDJ = null;
		$this->ID_CAT = null;
		$this->NOMBRE_VDJ = null;
		$this->COMPANIA_VDJ = null;
		$this->PRECIO_VDJ = null;
		$this->DESCRIPCION_VDJ = null;
		$this->NUMJUGADORES_VDJ = null;
    }

    public function store()
    {
        $this->validate([
		'ID_VDJ' => 'required',
        ]);

        Videojuego::create([ 
			'ID_VDJ' => $this-> ID_VDJ,
			'ID_CAT' => $this-> ID_CAT,
			'NOMBRE_VDJ' => $this-> NOMBRE_VDJ,
			'COMPANIA_VDJ' => $this-> COMPANIA_VDJ,
			'PRECIO_VDJ' => $this-> PRECIO_VDJ,
			'DESCRIPCION_VDJ' => $this-> DESCRIPCION_VDJ,
			'NUMJUGADORES_VDJ' => $this-> NUMJUGADORES_VDJ
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Videojuego Successfully created.');
    }

    public function edit($id)
    {
        $record = Videojuego::findOrFail($id);

        $this->selected_id = $id; 
		$this->ID_VDJ = $record-> ID_VDJ;
		$this->ID_CAT = $record-> ID_CAT;
		$this->NOMBRE_VDJ = $record-> NOMBRE_VDJ;
		$this->COMPANIA_VDJ = $record-> COMPANIA_VDJ;
		$this->PRECIO_VDJ = $record-> PRECIO_VDJ;
		$this->DESCRIPCION_VDJ = $record-> DESCRIPCION_VDJ;
		$this->NUMJUGADORES_VDJ = $record-> NUMJUGADORES_VDJ;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'ID_VDJ' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Videojuego::find($this->selected_id);
            $record->update([ 
			'ID_VDJ' => $this-> ID_VDJ,
			'ID_CAT' => $this-> ID_CAT,
			'NOMBRE_VDJ' => $this-> NOMBRE_VDJ,
			'COMPANIA_VDJ' => $this-> COMPANIA_VDJ,
			'PRECIO_VDJ' => $this-> PRECIO_VDJ,
			'DESCRIPCION_VDJ' => $this-> DESCRIPCION_VDJ,
			'NUMJUGADORES_VDJ' => $this-> NUMJUGADORES_VDJ
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Videojuego Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Videojuego::where('id', $id);
            $record->delete();
        }
    }
}
