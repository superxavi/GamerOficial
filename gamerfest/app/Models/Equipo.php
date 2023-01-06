<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'equipos';

    protected $fillable = ['ID_EQU','NOMBRE_EQU','OBSERVACION_EQU'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscGrupos()
    {
        return $this->hasMany('App\Models\InscGrupo', 'ID_EQU', 'ID_EQU');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jugadores()
    {
        return $this->hasMany('App\Models\Jugadore', 'ID_EQU', 'ID_EQU');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidaGrupals()
    {
        return $this->hasMany('App\Models\PartidaGrupal', 'ID_EQU', 'ID_EQU');
    }
    
}
