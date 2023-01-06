<?php

namespace Database\Factories;

use App\Models\Aula;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AulaFactory extends Factory
{
    protected $model = Aula::class;

    public function definition()
    {
        return [
			'ID_AUL' => $this->faker->name,
			'NOMBRE_AUL' => $this->faker->name,
			'EDIFICIO_AUL' => $this->faker->name,
			'DIRECCION_AUL' => $this->faker->name,
			'OBSERVACION_AUL' => $this->faker->name,
        ];
    }
}
