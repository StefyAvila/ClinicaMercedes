<?php

namespace Database\Factories;

use App\Models\Enfermero;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enfermero>
 */
class EnfermeroFactory extends Factory
{
     /**
     * Define the model's default state.
     * 
     *     @var String
     */
    protected $model = Enfermero::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->name(),
            'apellido'=>$this->faker->lastName(),
            'identidad'=>$this->faker->numerify('####-').$this->faker->numberBetween(1950,2001).
            $this->faker->unique()->numerify('-#####'),
            'ciudad'=>$this->faker->city(),
            'telefono'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->email(),
            'turno'=>$this->faker->randomElement(['a', 'b', 'c'])
        ];
    }
}
