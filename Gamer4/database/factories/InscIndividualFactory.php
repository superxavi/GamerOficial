<?php

namespace Database\Factories;

use App\Models\InscIndividual;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InscIndividualFactory extends Factory
{
    protected $model = InscIndividual::class;

    public function definition()
    {
        return [
			'ID_INI' => $this->faker->name,
			'ID_VDJ' => $this->faker->name,
			'ID_JUG' => $this->faker->name,
			'OBSERVACION_INI' => $this->faker->name,
        ];
    }
}
