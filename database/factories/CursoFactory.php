<?php

namespace Database\Factories;
use App\Models\CursosModel;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CursosModel>
 */
class CursoFactory extends Factory
{

    protected $model=CursosModel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
                
                'name'=>$this->faker->name(),
                'descrition'=>$this->faker->paragraph(),
                'categoria'=>$this->faker->randomElement(['Desarrollo web','Desarrollo app']),
                  
                  //
              
        ];
    }
}
