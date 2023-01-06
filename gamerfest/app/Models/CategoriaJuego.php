<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaJuego extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'categoriaJuegos';

    protected $fillable = ['ID_CAT','TIPO_CAT','COMPETENCIA_CAT','DESCRIPCION_CAT'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function videojuegos()
    {
        return $this->hasMany('App\Models\Videojuego', 'ID_CAT', 'ID_CAT');
    }
    
}
