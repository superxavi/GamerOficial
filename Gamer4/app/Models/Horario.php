<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'horarios';

    protected $fillable = ['ID_HOR','ID_VDJ','ID_AUL','TIEMPO_INICIO_HOR','TIEMPO_FIN_HOR','FECHA_HOR','OBSERVACION_HOR'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function aula()
    {
        return $this->hasOne('App\Models\Aula', 'ID_AUL', 'ID_AUL');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function videojuego()
    {
        return $this->hasOne('App\Models\Videojuego', 'ID_VDJ', 'ID_VDJ');
    }
    
}
