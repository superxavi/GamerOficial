<?php

namespace Database\Factories;

use App\Models\Jugadore;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JugadoreFactory extends Factory
{
    protected $model = Jugadore::class;

    public function definition()
    {
        return [
			'ID_JUG' => $this->faker->name,
			'ID_EQU' => $this->faker->name,
			'NOMBRE_JUG' => $this->faker->name,
			'CEDULA_JUG' => $this->faker->name,
			'TELEFONO_JUG' => $this->faker->name,
			'CORREO_JUG' => $this->faker->name,
			'OBSERVACION_JUG' => $this->faker->name,
        ];
    }
}
