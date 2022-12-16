<?php

namespace Database\Factories;

use App\Models\CategoriaJuego;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoriaJuegoFactory extends Factory
{
    protected $model = CategoriaJuego::class;

    public function definition()
    {
        return [
			'ID_CAT' => $this->faker->name,
			'TIPO_CAT' => $this->faker->name,
			'COMPETENCIA_CAT' => $this->faker->name,
			'DESCRIPCION_CAT' => $this->faker->name,
        ];
    }
}
