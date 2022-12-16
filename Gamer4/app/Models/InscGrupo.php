<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscGrupo extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'inscGrupos';

    protected $fillable = ['ID_ING','ID_EQU','ID_VDJ','OBSERVACION_ING'];
	
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
