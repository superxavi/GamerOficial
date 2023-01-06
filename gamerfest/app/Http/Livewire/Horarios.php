<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Horario;

class Horarios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $ID_HOR, $ID_VDJ, $ID_AUL, $TIEMPO_INICIO_HOR, $TIEMPO_FIN_HOR, $FECHA_HOR, $OBSERVACION_HOR;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.horarios.view', [
            'horarios' => Horario::latest()
						->orWhere('ID_HOR', 'LIKE', $keyWord)
						->orWhere('ID_VDJ', 'LIKE', $keyWord)
						->orWhere('ID_AUL', 'LIKE', $keyWord)
						->orWhere('TIEMPO_INICIO_HOR', 'LIKE', $keyWord)
						->orWhere('TIEMPO_FIN_HOR', 'LIKE', $keyWord)
						->orWhere('FECHA_HOR', 'LIKE', $keyWord)
						->orWhere('OBSERVACION_HOR', 'LIKE', $keyWord)
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
		$this->ID_HOR = null;
		$this->ID_VDJ = null;
		$this->ID_AUL = null;
		$this->TIEMPO_INICIO_HOR = null;
		$this->TIEMPO_FIN_HOR = null;
		$this->FECHA_HOR = null;
		$this->OBSERVACION_HOR = null;
    }

    public function store()
    {
        $this->validate([
		'ID_HOR' => 'required',
        ]);

        Horario::create([ 
			'ID_HOR' => $this-> ID_HOR,
			'ID_VDJ' => $this-> ID_VDJ,
			'ID_AUL' => $this-> ID_AUL,
			'TIEMPO_INICIO_HOR' => $this-> TIEMPO_INICIO_HOR,
			'TIEMPO_FIN_HOR' => $this-> TIEMPO_FIN_HOR,
			'FECHA_HOR' => $this-> FECHA_HOR,
			'OBSERVACION_HOR' => $this-> OBSERVACION_HOR
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Horario Successfully created.');
    }

    public function edit($id)
    {
        $record = Horario::findOrFail($id);

        $this->selected_id = $id; 
		$this->ID_HOR = $record-> ID_HOR;
		$this->ID_VDJ = $record-> ID_VDJ;
		$this->ID_AUL = $record-> ID_AUL;
		$this->TIEMPO_INICIO_HOR = $record-> TIEMPO_INICIO_HOR;
		$this->TIEMPO_FIN_HOR = $record-> TIEMPO_FIN_HOR;
		$this->FECHA_HOR = $record-> FECHA_HOR;
		$this->OBSERVACION_HOR = $record-> OBSERVACION_HOR;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'ID_HOR' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Horario::find($this->selected_id);
            $record->update([ 
			'ID_HOR' => $this-> ID_HOR,
			'ID_VDJ' => $this-> ID_VDJ,
			'ID_AUL' => $this-> ID_AUL,
			'TIEMPO_INICIO_HOR' => $this-> TIEMPO_INICIO_HOR,
			'TIEMPO_FIN_HOR' => $this-> TIEMPO_FIN_HOR,
			'FECHA_HOR' => $this-> FECHA_HOR,
			'OBSERVACION_HOR' => $this-> OBSERVACION_HOR
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Horario Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Horario::where('id', $id);
            $record->delete();
        }
    }
}
