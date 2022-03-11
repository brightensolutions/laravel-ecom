<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name'=>'saree',
            'price'=>"2000",
            'description'=>"beautiful saree with different designs and colors",
            'category'=>"saree",
            'gallery'=>"https://www.aaritrafashion.com/ecom_images/products/product-530-6245.jpg"
            ],
            [
            'name'=>'banarasi saree',
            'price'=>"3000",
            'description'=>"beautiful saree with different designs and colors",
            'category'=>"saree",
            'gallery'=>"https://www.aaritrafashion.com/ecom_images/products/product-746-7029.jpg"      
            ],
            [
                'name'=>'banarasi saree',
                'price'=>"1000",
                'description'=>"beautiful saree with different designs and colors",
                'category'=>"saree",
                'gallery'=>"https://www.aaritrafashion.com/ecom_images/products/product-548-6382.jpg"      
                ],
             [
                'name'=>'banarasi saree',
                'price'=>"1500",
                'description'=>"beautiful saree with different designs and colors",
                'category'=>"saree",
                'gallery'=>"https://www.aaritrafashion.com/ecom_images/products/product-777-1160.jpg"  
             ],
             [
                'name'=>'banarasi saree',
                'price'=>"4000",
                'description'=>"beautiful saree with different designs and colors",
                'category'=>"saree",
                'gallery'=>"https://www.aaritrafashion.com/ecom_images/products/product-777-1160.jpg"  
             ],
             [
                'name'=>'banarasi saree',
                'price'=>"5000",
                'description'=>"beautiful saree with different designs and colors",
                'category'=>"saree",
                'gallery'=>"https://www.aaritrafashion.com/ecom_images/products/product-777-1160.jpg"  
             ]  
        ]);
        //
    }
}
