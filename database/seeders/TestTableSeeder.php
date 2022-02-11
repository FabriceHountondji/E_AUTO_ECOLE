<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            ['label' => 'TEST 1', 'duration' =>'300','user_id' =>'1','categoryTest_id' => '1', 'typePermis_id' => '1'],
            ['label' => 'TEST 2', 'duration' =>'300','user_id' =>'1','categoryTest_id' => '2', 'typePermis_id' => '1'],
            ['label' => 'TEST 3', 'duration' =>'300','user_id' =>'1','categoryTest_id' => '3', 'typePermis_id' => '2'],
            ['label' => 'TEST 4', 'duration' =>'300','user_id' =>'1','categoryTest_id' => '4', 'typePermis_id' => '2'],
            ['label' => 'TEST 5', 'duration' =>'300','user_id' =>'1','categoryTest_id' => '5', 'typePermis_id' => '3'],
            ['label' => 'TEST 6', 'duration' =>'300','user_id' =>'1','categoryTest_id' => '5', 'typePermis_id' => '3'],
            ['label' => 'TEST 7', 'duration' =>'300','user_id' =>'1','categoryTest_id' => '4', 'typePermis_id' => '4'],
            ['label' => 'TEST 8', 'duration' =>'300','user_id' =>'1','categoryTest_id' => '3', 'typePermis_id' => '4'],
            ['label' => 'TEST 9', 'duration' =>'300','user_id' =>'1','categoryTest_id' => '2', 'typePermis_id' => '5'],
            ['label' => 'TEST 10', 'duration' =>'300','user_id' =>'1','categoryTest_id' => '1', 'typePermis_id' => '5'],
            ['label' => 'TEST 11', 'duration' =>'300','user_id' =>'1','categoryTest_id' => '3', 'typePermis_id' => '6'],
            ['label' => 'TEST 12', 'duration' =>'300','user_id' =>'1','categoryTest_id' => '4', 'typePermis_id' => '6'],

        ]);
    }
}
