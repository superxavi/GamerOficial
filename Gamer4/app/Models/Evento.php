<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'eventos';

    protected $fillable = ['ID_EVE','NOMBRE_EVE','FECHA_EVE','LUGAR_EVE','DESCRIPCCION_EVE'];
	
}
