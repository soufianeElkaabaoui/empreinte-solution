<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mr. Ahmed',
            'email' => 'ahmed@imancom.com',
            'password' => Hash::make('Fanida@222'),
        ]);
        DB::table('statistics')->insert(
            [
                [
                    'name' => 'clients',
                    'numbers' => '0',
                ],
                [
                    'name' => 'years experience',
                    'numbers' => '0',
                ],
                [
                    'name' => 'projects finished',
                    'numbers' => '0',
                ],
            ]
        );
    }
}
