<?php

namespace Database\Factories;

use App\Models\Pacient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pacient>
 */
class PacientFactory extends Factory
{
     /**
     * Define the model's default state.
     * 
     *     @var String
     */
    protected $model = Pacient::class;

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
            'Ciudad'=>$this->faker->city(),
            'Telefono'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->address(),
            'sintomas'=>$this->faker->paragraph()
        ];
    }
}
