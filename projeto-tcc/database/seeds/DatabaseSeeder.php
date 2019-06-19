<?php

use Illuminate\Database\Seeder;
use App\Entities\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf'           => '17123373723',
            'name'          => 'Thiago',
            'phone'         => '34434343434',
            'birth'         => '1980-10-01',
            'gender'        => 'M',
            'rua'           => 'Avenida Duque de Caxias',
            'email'         => 'thiago@sistema.com',
            'password'      => env("PASSWORD_HASH") ? bcrypt('123456'): 123456,
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
