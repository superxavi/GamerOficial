<?php

namespace Database\Factories;

use App\Models\Videojuego;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VideojuegoFactory extends Factory
{
    protected $model = Videojuego::class;

    public function definition()
    {
        return [
			'ID_VDJ' => $this->faker->name,
			'ID_CAT' => $this->faker->name,
			'NOMBRE_VDJ' => $this->faker->name,
			'COMPANIA_VDJ' => $this->faker->name,
			'PRECIO_VDJ' => $this->faker->name,
			'DESCRIPCION_VDJ' => $this->faker->name,
			'NUMJUGADORES_VDJ' => $this->faker->name,
        ];
    }
}
