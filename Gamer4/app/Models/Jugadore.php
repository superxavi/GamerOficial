<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugadore extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'jugadores';

    protected $fillable = ['ID_JUG','ID_EQU','NOMBRE_JUG','CEDULA_JUG','TELEFONO_JUG','CORREO_JUG','OBSERVACION_JUG'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'ID_EQU', 'ID_EQU');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscIndividuals()
    {
        return $this->hasMany('App\Models\InscIndividual', 'ID_JUG', 'ID_JUG');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidaIndivs()
    {
        return $this->hasMany('App\Models\PartidaIndiv', 'ID_JUG', 'ID_JUG');
    }
    
}
