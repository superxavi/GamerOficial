<?php

namespace Database\Factories;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventoFactory extends Factory
{
    protected $model = Evento::class;

    public function definition()
    {
        return [
			'ID_EVE' => $this->faker->name,
			'NOMBRE_EVE' => $this->faker->name,
			'FECHA_EVE' => $this->faker->name,
			'LUGAR_EVE' => $this->faker->name,
			'DESCRIPCCION_EVE' => $this->faker->name,
        ];
    }
}
