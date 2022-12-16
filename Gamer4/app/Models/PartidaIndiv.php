<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartidaIndiv extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'partidaIndivs';

    protected $fillable = ['ID_PAI','ID_VDJ','ID_JUG','HORA_INICIO_PAI','FECHA_PAI','OBSERVACION_PAI'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function jugadore()
    {
        return $this->hasOne('App\Models\Jugadore', 'ID_JUG', 'ID_JUG');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function videojuego()
    {
        return $this->hasOne('App\Models\Videojuego', 'ID_VDJ', 'ID_VDJ');
    }
    
}
