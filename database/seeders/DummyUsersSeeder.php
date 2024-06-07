<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataUsers = [
            [
                'name' => 'Ananda Maulana Wahyudi',
                'email' => 'ananda@gmail.com',
                'username' => 'anandamw',
                'nomer_whatsapp' => '0812345444',
                'password' => bcrypt(123456),
                'role' => 'admin'
            ],[
                'name' => 'Jono Loreansyah',
                'email' => 'jono@gmail.com',
                'username' => 'jonoo',
                'nomer_whatsapp' => '08123452333',
                'password' => bcrypt(123456),
                'role' => 'karyawan'
            ]
        ];

        foreach( $dataUsers as $user){
            User::create($user);
        }
    }
}
