<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'videojuegos';

    protected $fillable = ['ID_VDJ','ID_CAT','NOMBRE_VDJ','COMPANIA_VDJ','PRECIO_VDJ','DESCRIPCION_VDJ','NUMJUGADORES_VDJ'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoriaJuego()
    {
        return $this->hasOne('App\Models\CategoriaJuego', 'ID_CAT', 'ID_CAT');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario', 'ID_VDJ', 'ID_VDJ');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscGrupos()
    {
        return $this->hasMany('App\Models\InscGrupo', 'ID_VDJ', 'ID_VDJ');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscIndividuals()
    {
        return $this->hasMany('App\Models\InscIndividual', 'ID_VDJ', 'ID_VDJ');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidaGrupals()
    {
        return $this->hasMany('App\Models\PartidaGrupal', 'ID_VDJ', 'ID_VDJ');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidaIndivs()
    {
        return $this->hasMany('App\Models\PartidaIndiv', 'ID_VDJ', 'ID_VDJ');
    }
    
}
