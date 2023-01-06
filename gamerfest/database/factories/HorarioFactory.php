<?php

namespace Database\Factories;

use App\Models\Horario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class HorarioFactory extends Factory
{
    protected $model = Horario::class;

    public function definition()
    {
        return [
			'ID_HOR' => $this->faker->name,
			'ID_VDJ' => $this->faker->name,
			'ID_AUL' => $this->faker->name,
			'TIEMPO_INICIO_HOR' => $this->faker->name,
			'TIEMPO_FIN_HOR' => $this->faker->name,
			'FECHA_HOR' => $this->faker->name,
			'OBSERVACION_HOR' => $this->faker->name,
        ];
    }
}
