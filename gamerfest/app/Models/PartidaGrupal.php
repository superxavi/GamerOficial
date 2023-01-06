<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartidaGrupal extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'partidaGrupals';

    protected $fillable = ['ID_PAG','ID_VDJ','ID_EQU','HORA_INICIO_PAG','FECHA_PAG','INTEGRANTES_PAG','ASISTENCIA_PAG','OBSERVACION_PAG'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'ID_EQU', 'ID_EQU');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function videojuego()
    {
        return $this->hasOne('App\Models\Videojuego', 'ID_VDJ', 'ID_VDJ');
    }
    
}
