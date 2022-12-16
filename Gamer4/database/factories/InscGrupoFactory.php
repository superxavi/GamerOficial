<?php

namespace Database\Factories;

use App\Models\InscGrupo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InscGrupoFactory extends Factory
{
    protected $model = InscGrupo::class;

    public function definition()
    {
        return [
			'ID_ING' => $this->faker->name,
			'ID_EQU' => $this->faker->name,
			'ID_VDJ' => $this->faker->name,
			'OBSERVACION_ING' => $this->faker->name,
        ];
    }
}
