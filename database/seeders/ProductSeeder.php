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
            'name'          => 'Domba Premium',
            'price'         => '50000',
            'description'   => 'mantapp tenannnnn',
            'image'         => '/storage/product/domba1.jpg',
            'country'       => 'Brunei Darussalam',
        ]);

        Product::create([
            'name'          => 'Domba Superior',
            'price'         => '150000',
            'description'   => 'oke',
            'image'         => '/storage/product/domba5.jfif',
            'country'       => 'Brunei Darussalam',
        ]);

        Product::create([
            'name'          => 'Domba Premium',
            'price'         => '500',
            'description'   => 'mantapp tenannnnn',
            'image'         => '/storage/product/domba1.jpg',
            'country'       => 'Indonesia',
        ]);

        Product::create([
            'name'          => 'Domba Superior',
            'price'         => '1000',
            'description'   => 'oke',
            'image'         => '/storage/product/domba5.jfif',
            'country'       => 'Indonesia',
        ]);
    }
}
