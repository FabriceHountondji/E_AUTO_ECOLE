<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypePermisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_permis')->insert([
            ['label' => 'Permis A', 'description' =>'Permis de type A'],
            ['label' => 'Permis B', 'description' =>'Permis de type B'],
            ['label' => 'Permis C', 'description' =>'Permis de type C'],
            ['label' => 'Permis D', 'description' =>'Permis de type D'],
            ['label' => 'Permis E', 'description' =>'Permis de type E'],
            ['label' => 'Permis F', 'description' =>'Permis de type F'],
        ]);
    }
}
