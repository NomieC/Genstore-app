<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run()
    {
        // Insert sample data into the 'menus' table
        DB::table('menus')->insert([
            'nama' => 'King Style Burger',
            'harga' => '80000',
            'kategori' => 'Makanan',
            'deskripsi' => 'Classic Hamburger served with a choice of sides',
            'gambar' => 'sample_value_1',
        ]);

        // Insert more sample data
        DB::table('menus')->insert([
            'nama' => 'Vegetarian Pasta',
            'harga' => '75000',
            'kategori' => 'Makanan',
            'deskripsi' => 'Delicious pasta made with fresh vegetables',
            'gambar' => 'sample_value_2',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Iced Coffee',
            'harga' => '25000',
            'kategori' => 'Minuman',
            'deskripsi' => 'Refreshing iced coffee to start your day',
            'gambar' => 'sample_value_3',
        ]);
        DB::table('menus')->insert([
            'nama' => 'Cheese Pizza',
            'harga' => '70000',
            'kategori' => 'Makanan',
            'deskripsi' => 'Classic cheese pizza with tomato sauce and mozzarella cheese',
            'gambar' => 'sample_value_4',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Fruit Smoothie',
            'harga' => '35000',
            'kategori' => 'Minuman',
            'deskripsi' => 'Healthy fruit smoothie made with fresh fruits and yogurt',
            'gambar' => 'sample_value_5',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Grilled Chicken Salad',
            'harga' => '65000',
            'kategori' => 'Makanan',
            'deskripsi' => 'Grilled chicken breast served on a bed of fresh salad greens',
            'gambar' => 'sample_value_6',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Iced Tea',
            'harga' => '15000',
            'kategori' => 'Minuman',
            'deskripsi' => 'Refreshing iced tea with a slice of lemon',
            'gambar' => 'sample_value_7',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Chocolate Brownie Sundae',
            'harga' => '45000',
            'kategori' => 'Dessert',
            'deskripsi' => 'Decadent chocolate brownie topped with vanilla ice cream and chocolate sauce',
            'gambar' => 'sample_value_8',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Margherita Pizza',
            'harga' => '65000',
            'kategori' => 'Makanan',
            'deskripsi' => 'Classic Margherita pizza with tomato sauce, fresh mozzarella, and basil',
            'gambar' => 'sample_value_9',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Hot Latte',
            'harga' => '28000',
            'kategori' => 'Minuman',
            'deskripsi' => 'Steaming hot latte with a shot of espresso and steamed milk',
            'gambar' => 'sample_value_10',
        ]);
        // Add more records as needed
    }
}