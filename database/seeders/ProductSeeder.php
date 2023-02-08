<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'          => 'product indonesia',
            'price'         => '99999999',
            'description'   => 'oke',
            'image'         => null,
            'country'       => 'Indonesia',
        ]);

        Product::create([
            'name'          => 'product brunei',
            'price'         => '99999999',
            'description'   => 'oke',
            'image'         => null,
            'country'       => 'Brunei Darussalam',
        ]);
    }
}
