<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'superAdmin', 'role' => 'Super Admin'],
            ['name' => 'instructor', 'role' => 'Moniteur'],
            ['name' => 'candidate', 'role' => 'Candidat'],
        ]);
    }
}
