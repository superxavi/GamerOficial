<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'aulas';

    protected $fillable = ['ID_AUL','NOMBRE_AUL','EDIFICIO_AUL','DIRECCION_AUL','OBSERVACION_AUL'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario', 'ID_AUL', 'ID_AUL');
    }
    
}
