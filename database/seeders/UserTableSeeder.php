<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'HOUNTONDJI Fabrice',
                'phone' =>'96100999',
                'birthday' => '1999/11/05',
                'sex' => 'Masculin',
                'address' => 'Sos Calavi',
                'avatar' => 'storage/assets/img/img3.jpg',
                'email' => 'fab@gmail.com',
                'password' => bcrypt('admin'),
                'role_id' => '1'
            ],

            [
                'name' => 'HOUNSOU Robert',
                'phone' =>'11587726',
                'birthday' => '1987/06/08',
                'sex' => 'Masculin',
                'address' => 'Godomey',
                'avatar' => 'storage/assets/img/img3.jpg',
                'email' => 'rob@gmail.com',
                'password' => bcrypt('moni1'),
                'role_id' => '2'
            ],


            [
                'name' => 'DOSSOU Paul',
                'phone' =>'58920035',
                'birthday' => '1990/02/01',
                'sex' => 'Masculin',
                'address' => 'IITA',
                'avatar' => 'storage/assets/img/img4.jpg',
                'email' => 'paul@gmail.com',
                'password' => bcrypt('ekjkjj78re'),
                'role_id' => '2'
            ],

            [
                'name' => 'ABALLO Dereck',
                'phone' =>'02657810',
                'birthday' => '2002/09/15',
                'sex' => 'Masculin',
                'address' => 'Arconville',
                'avatar' => 'storage/assets/img/img5.jpg',
                'email' => 'dereck@gmail.com',
                'password' => bcrypt('candidat1'),
                'role_id' => '3'
            ],

            [
                'name' => 'BOKO François',
                'phone' =>'84516728',
                'birthday' => '1992/12/28',
                'sex' => 'Masculin',
                'address' => 'Akpakpa',
                'avatar' => 'storage/assets/img/img6.jpg',
                'email' => 'fran@gmail.com',
                'password' => bcrypt('candidat2'),
                'role_id' => '3'
            ],

            [
                'name' => 'ADOUKONOU Lina',
                'phone' =>'59842416',
                'birthday' => '2001/07/24',
                'sex' => 'Feminin',
                'address' => 'PK3',
                'avatar' => 'storage/assets/img/img7.jpg',
                'email' => 'lin@gmail.com',
                'password' => bcrypt('jhgdrt4578'),
                'role_id' => '3'
            ],
        ]);
    }
}
