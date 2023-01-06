<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscIndividual extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'inscIndividuals';

    protected $fillable = ['ID_INI','ID_VDJ','ID_JUG','OBSERVACION_INI'];
	
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
