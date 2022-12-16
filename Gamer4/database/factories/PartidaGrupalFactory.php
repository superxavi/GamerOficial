<?php

namespace Database\Factories;

use App\Models\PartidaGrupal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PartidaGrupalFactory extends Factory
{
    protected $model = PartidaGrupal::class;

    public function definition()
    {
        return [
			'ID_PAG' => $this->faker->name,
			'ID_VDJ' => $this->faker->name,
			'ID_EQU' => $this->faker->name,
			'HORA_INICIO_PAG' => $this->faker->name,
			'FECHA_PAG' => $this->faker->name,
			'INTEGRANTES_PAG' => $this->faker->name,
			'ASISTENCIA_PAG' => $this->faker->name,
			'OBSERVACION_PAG' => $this->faker->name,
        ];
    }
}
