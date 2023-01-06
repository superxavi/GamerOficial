<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PartidaGrupal;

class PartidaGrupals extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $ID_PAG, $ID_VDJ, $ID_EQU, $HORA_INICIO_PAG, $FECHA_PAG, $INTEGRANTES_PAG, $ASISTENCIA_PAG, $OBSERVACION_PAG;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.partidaGrupals.view', [
            'partidaGrupals' => PartidaGrupal::latest()
						->orWhere('ID_PAG', 'LIKE', $keyWord)
						->orWhere('ID_VDJ', 'LIKE', $keyWord)
						->orWhere('ID_EQU', 'LIKE', $keyWord)
						->orWhere('HORA_INICIO_PAG', 'LIKE', $keyWord)
						->orWhere('FECHA_PAG', 'LIKE', $keyWord)
						->orWhere('INTEGRANTES_PAG', 'LIKE', $keyWord)
						->orWhere('ASISTENCIA_PAG', 'LIKE', $keyWord)
						->orWhere('OBSERVACION_PAG', 'LIKE', $keyWord)
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
		$this->ID_PAG = null;
		$this->ID_VDJ = null;
		$this->ID_EQU = null;
		$this->HORA_INICIO_PAG = null;
		$this->FECHA_PAG = null;
		$this->INTEGRANTES_PAG = null;
		$this->ASISTENCIA_PAG = null;
		$this->OBSERVACION_PAG = null;
    }

    public function store()
    {
        $this->validate([
		'ID_PAG' => 'required',
        ]);

        PartidaGrupal::create([ 
			'ID_PAG' => $this-> ID_PAG,
			'ID_VDJ' => $this-> ID_VDJ,
			'ID_EQU' => $this-> ID_EQU,
			'HORA_INICIO_PAG' => $this-> HORA_INICIO_PAG,
			'FECHA_PAG' => $this-> FECHA_PAG,
			'INTEGRANTES_PAG' => $this-> INTEGRANTES_PAG,
			'ASISTENCIA_PAG' => $this-> ASISTENCIA_PAG,
			'OBSERVACION_PAG' => $this-> OBSERVACION_PAG
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'PartidaGrupal Successfully created.');
    }

    public function edit($id)
    {
        $record = PartidaGrupal::findOrFail($id);

        $this->selected_id = $id; 
		$this->ID_PAG = $record-> ID_PAG;
		$this->ID_VDJ = $record-> ID_VDJ;
		$this->ID_EQU = $record-> ID_EQU;
		$this->HORA_INICIO_PAG = $record-> HORA_INICIO_PAG;
		$this->FECHA_PAG = $record-> FECHA_PAG;
		$this->INTEGRANTES_PAG = $record-> INTEGRANTES_PAG;
		$this->ASISTENCIA_PAG = $record-> ASISTENCIA_PAG;
		$this->OBSERVACION_PAG = $record-> OBSERVACION_PAG;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'ID_PAG' => 'required',
        ]);

        if ($this->selected_id) {
			$record = PartidaGrupal::find($this->selected_id);
            $record->update([ 
			'ID_PAG' => $this-> ID_PAG,
			'ID_VDJ' => $this-> ID_VDJ,
			'ID_EQU' => $this-> ID_EQU,
			'HORA_INICIO_PAG' => $this-> HORA_INICIO_PAG,
			'FECHA_PAG' => $this-> FECHA_PAG,
			'INTEGRANTES_PAG' => $this-> INTEGRANTES_PAG,
			'ASISTENCIA_PAG' => $this-> ASISTENCIA_PAG,
			'OBSERVACION_PAG' => $this-> OBSERVACION_PAG
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'PartidaGrupal Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = PartidaGrupal::where('id', $id);
            $record->delete();
        }
    }
}
