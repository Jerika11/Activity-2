<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'fname' => 'Donna',
                'lname' => 'Moral',
                'email' => 'Moral@gmail.com',
                'phone_number' => '656565',
            ],
            [
                'fname' => 'James',
                'lname' => 'Paneza',
                'email' => 'Paneza@gmail.com',
                'phone_number' => '234569874',
            ],
            [
                'fname' => 'Jerika',
                'lname' => 'Soriano',
                'email' => 'Soriano@gmail.com',
                'phone_number' => '897458685',
            ]
            ]);
    }
}
