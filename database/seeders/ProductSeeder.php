<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        $data = [
            [
                'title' => 'Betadine',
                'description' => '250ml rasa jeruk',
                'price' => 24.5,
                'picture_thumb' => null,
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Rubbing Alcohol',
                'description' => '70%',
                'price' => 14.5,
                'picture_thumb' => null,
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Ranitidine',
                'description' => '2mg',
                'price' => 4.5,
                'picture_thumb' => null,
                'created_at' => Carbon::now()
            ],
        ];

        DB::table('products')->insert($data);
    }
}
