<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EquipoFactory extends Factory
{
    protected $model = Equipo::class;

    public function definition()
    {
        return [
			'ID_EQU' => $this->faker->name,
			'NOMBRE_EQU' => $this->faker->name,
			'OBSERVACION_EQU' => $this->faker->name,
        ];
    }
}
