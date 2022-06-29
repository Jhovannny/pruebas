<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CursosModel;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        \App\Models\CursosModel::factory()->create();
        /*
        $Cursos =new CursosModel();

        $Cursos->name='Jhovanny';
        $Cursos->descrition='programador';
        $Cursos->categoria="desarrolladores";

        $Cursos->save();
        */
      //  $this->call(CursoSeeder::class);
      
    }
}
