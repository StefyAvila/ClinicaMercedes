<?php

namespace Database\Factories;

use App\Models\Doctore;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctore>
 */
class DoctoreFactory extends Factory
{
     /**
     * Define the model's default state.
     * 
     *     @var String
     */
    protected $model = Doctore::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre'=>$this->faker->firstName(),
            'apellido'=>$this->faker->lastName(),
            'identidad'=>$this->faker->numerify('####-').$this->faker->numberBetween(1950, 2005).
            $this->faker->unique()->numerify('-#####'),
            'ciudad'=>$this->faker->city(),
            'direccion'=>$this->faker->address(),
            'email'=>$this->faker->email(),
            'interno'=>$this->faker->randomElement(['Si', 'No'])
        ];
    }
}
