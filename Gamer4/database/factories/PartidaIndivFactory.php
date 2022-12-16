<?php

namespace Database\Factories;

use App\Models\PartidaIndiv;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PartidaIndivFactory extends Factory
{
    protected $model = PartidaIndiv::class;

    public function definition()
    {
        return [
			'ID_PAI' => $this->faker->name,
			'ID_VDJ' => $this->faker->name,
			'ID_JUG' => $this->faker->name,
			'HORA_INICIO_PAI' => $this->faker->name,
			'FECHA_PAI' => $this->faker->name,
			'OBSERVACION_PAI' => $this->faker->name,
        ];
    }
}
