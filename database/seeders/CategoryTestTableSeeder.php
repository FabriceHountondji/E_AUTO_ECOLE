<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_tests')->insert([
            ['label' => 'Les signalisations routières'],
            ['label' => 'Les règles de priorités'],
            ['label' => 'Dépassement'],
            ['label' => 'Croisement'],
            ['label' => 'Secourisme']
        ]);
    }
}
