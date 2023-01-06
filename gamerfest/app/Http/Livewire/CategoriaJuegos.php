<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CategoriaJuego;

class CategoriaJuegos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $ID_CAT, $TIPO_CAT, $COMPETENCIA_CAT, $DESCRIPCION_CAT;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.categoriaJuegos.view', [
            'categoriaJuegos' => CategoriaJuego::latest()
						->orWhere('ID_CAT', 'LIKE', $keyWord)
						->orWhere('TIPO_CAT', 'LIKE', $keyWord)
						->orWhere('COMPETENCIA_CAT', 'LIKE', $keyWord)
						->orWhere('DESCRIPCION_CAT', 'LIKE', $keyWord)
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
		$this->ID_CAT = null;
		$this->TIPO_CAT = null;
		$this->COMPETENCIA_CAT = null;
		$this->DESCRIPCION_CAT = null;
    }

    public function store()
    {
        $this->validate([
		'ID_CAT' => 'required',
        ]);

        CategoriaJuego::create([ 
			'ID_CAT' => $this-> ID_CAT,
			'TIPO_CAT' => $this-> TIPO_CAT,
			'COMPETENCIA_CAT' => $this-> COMPETENCIA_CAT,
			'DESCRIPCION_CAT' => $this-> DESCRIPCION_CAT
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'CategoriaJuego Successfully created.');
    }

    public function edit($id)
    {
        $record = CategoriaJuego::findOrFail($id);

        $this->selected_id = $id; 
		$this->ID_CAT = $record-> ID_CAT;
		$this->TIPO_CAT = $record-> TIPO_CAT;
		$this->COMPETENCIA_CAT = $record-> COMPETENCIA_CAT;
		$this->DESCRIPCION_CAT = $record-> DESCRIPCION_CAT;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'ID_CAT' => 'required',
        ]);

        if ($this->selected_id) {
			$record = CategoriaJuego::find($this->selected_id);
            $record->update([ 
			'ID_CAT' => $this-> ID_CAT,
			'TIPO_CAT' => $this-> TIPO_CAT,
			'COMPETENCIA_CAT' => $this-> COMPETENCIA_CAT,
			'DESCRIPCION_CAT' => $this-> DESCRIPCION_CAT
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'CategoriaJuego Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = CategoriaJuego::where('id', $id);
            $record->delete();
        }
    }
}
