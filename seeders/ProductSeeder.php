<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Strawberry Ice Cream',
                'description' => 'A flavor of ice cream made with strawberry or strawberry flavoring',
                'price' => '25.00',
            ],               
            [
                'name' => 'Chocolate Ice Cream',
                'description' => 'Is made by blending in cocoa powder in along with cream, vanilla
                and sugar used to make ice cream. The cocoa powder gives the ice cream a brown colour.',
                'price' => '35.00',
            ],
            [
                'name' => 'Vanilla Ice Cream',
                'description' => 'A sweet frozen dessert made from milk, cream, sugar, 
                and vanilla flavoring from vanilla seeds, pure vanilla extract, vanilla seed paste, or a combination.',
                'price' => '45.00',
            ]
            ]);
    }
}
