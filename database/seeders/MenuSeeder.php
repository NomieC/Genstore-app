<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SampleDataSeeder extends Seeder
{
    public function run()
    {
        // Insert sample data into the 'your_table_name' table
        DB::table('menus')->insert([
            'nama' => 'King Style Burger',
            'harga' => '80000',
            'kategori' => 'sample_value_2',
            'deskripsi' => 'sample_value_2',
            'gambar' => 'sample_value_2',
            // Add more columns and values as needed
        ]);
    }
}

