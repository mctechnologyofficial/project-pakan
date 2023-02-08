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
            'name'          => 'Brunei 1',
            'price'         => '50000',
            'description'   => 'mantapp tenannnnn',
            'image'         => '/storage/product/me.jpeg',
            'country'       => 'Brunei Darussalam',
        ]);

        Product::create([
            'name'          => 'Brunei 2',
            'price'         => '150000',
            'description'   => 'oke',
            'image'         => '/storage/product/q.jpg',
            'country'       => 'Brunei Darussalam',
        ]);

        Product::create([
            'name'          => 'Indonesia 1',
            'price'         => '50000',
            'description'   => 'mantapp tenannnnn',
            'image'         => '/storage/product/me.jpeg',
            'country'       => 'Indonesia',
        ]);

        Product::create([
            'name'          => 'Indonesia 2',
            'price'         => '150000',
            'description'   => 'oke',
            'image'         => '/storage/product/q.jpg',
            'country'       => 'Indonesia',
        ]);
    }
}
