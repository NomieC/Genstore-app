<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run()
    {
        DB::table('menus')->insert([
            'nama' => 'Bengali Chicken Curry',
            'harga' => '125000',
            'kategori' => 'Food',
            'deskripsi' => 'Tender chicken simmered in a fragrant blend of exotic spices and herbs.',
            'gambar' => 'Bengali Chicken Curry.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Braised Chickpeas with Chard',
            'harga' => '80000',
            'kategori' => 'Food',
            'deskripsi' => 'Braised chickpeas and chard served with a drizzle of truffle oil.',
            'gambar' => 'Braised Chickpeas with Chard.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Coconut Curry Meatball',
            'harga' => '135000',
            'kategori' => 'Food',
            'deskripsi' => 'Juicy grilled chicken meatball garnished with fresh herbs and aromatics.',
            'gambar' => 'Coconut Curry Meatball.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Continental Bruschetta',
            'harga' => '265000',
            'kategori' => 'Food',
            'deskripsi' => 'Classic bruschetta featuring vine-ripened tomatoes, fresh basil, and aged balsamic glaze.',
            'gambar' => 'Continental Bruschetta.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Crispy Persian Rice',
            'harga' => '95000',
            'kategori' => 'Food',
            'deskripsi' => 'Golden crispy Persian rice served with pomegranate-infused yogurt and saffron threads.',
            'gambar' => 'Crispy Persian Rice.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Earl Grey Creme Brulee Tart',
            'harga' => '85000',
            'kategori' => 'Dessert',
            'deskripsi' => 'Velvety Earl Grey-infused custard nestled in a delicate pastry shell, caramelized to perfection.',
            'gambar' => 'Earl Grey Creme Brulee Tart.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Glass Lemon Pie',
            'harga' => '75000',
            'kategori' => 'Dessert',
            'deskripsi' => 'A refreshing transparent lemon tart topped with foamed mascarpone.',
            'gambar' => 'Glass Lemon Pie.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Glazed Chocolate Cake',
            'harga' => '85000',
            'kategori' => 'Dessert',
            'deskripsi' => 'Decadent chocolate cake glazed with rich ganache, adorned with white sugarflakes.',
            'gambar' => 'Glazed Chocolate Cake.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Lancashire Pie',
            'harga' => '95000',
            'kategori' => 'Food',
            'deskripsi' => 'A sumptuous Lancashire pie filled with succulent beef, truffle mushrooms, and red wine reduction.',
            'gambar' => 'Lancashire Pie.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Mushroom & Pepper Strudel',
            'harga' => '145000',
            'kategori' => 'Food',
            'deskripsi' => 'Savory strudel pastry filled with wild mushrooms, roasted peppers, and herbed cream sauce.',
            'gambar' => 'Mushroom & Pepper Strudel.jpg',
        ]);

        DB::table('menus')->insert([
            "nama" => "S'mores Ice Cream Cake",
            "harga" => "85000",
            "kategori" => "Dessert",
            "deskripsi" => "Indulgent S'mores-inspired ice cream cake layered with graham cracker crust and marshmallow swirls.",
            "gambar" => "S'mores Ice Cream Cake.jpg",
        ]);

        DB::table('menus')->insert([
            'nama' => 'Spinach-Artichoke Chicken Stew',
            'harga' => '65000',
            'kategori' => 'Food',
            'deskripsi' => 'Hearty chicken stew infused with creamy spinach, artichokes, and aromatic spices.',
            'gambar' => 'Spinach-Artichoke Chicken Stew.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Sun-Dried Tomato and Spinach Risotto',
            'harga' => '115000',
            'kategori' => 'Food',
            'deskripsi' => 'Creamy risotto delicately cooked with sun-dried tomatoes, baby spinach, and Parmesan cheese.',
            'gambar' => 'Sun-Dried Tomato and Spinach Risotto.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Sweet Potato Pastilla',
            'harga' => '145000',
            'kategori' => 'Food',
            'deskripsi' => 'Elegant pastilla pastry filled with spiced sweet potatoes, almonds, and a hint of cinnamon.',
            'gambar' => 'Sweet Potato Pastilla.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Vegan Caramel Apple Cake',
            'harga' => '95000',
            'kategori' => 'Dessert',
            'deskripsi' => 'Decadent caramel apple cake made with organic vegan ingredients, topped with caramel drizzle.',
            'gambar' => 'Vegan Caramel Apple Cake.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Whipped Cookie Dough Tart',
            'harga' => '75000',
            'kategori' => 'Dessert',
            'deskripsi' => 'Delicate tart filled with velvety whipped cookie dough, garnished with chocolate shavings.',
            'gambar' => 'Whipped Cookie Dough Tart.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Adams Family Cocktail',
            'harga' => '135000',
            'kategori' => 'Beverage',
            'deskripsi' => 'Sinfully delicious cocktail with black vodka, cranberry, and a hint of mysterious herbs.',
            'gambar' => 'Adams Family Cocktail.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Lavender Lemonade',
            'harga' => '85000',
            'kategori' => 'Beverage',
            'deskripsi' => 'Refreshing lemonade infused with fragrant lavender blossoms and served over crushed ice.',
            'gambar' => 'Lavender Lemonade.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Red Moon over Manhattan Cocktail',
            'harga' => '155000',
            'kategori' => 'Beverage',
            'deskripsi' => 'Seductive cocktail featuring premium bourbon, cherry liqueur, and a blood-orange twist.',
            'gambar' => 'Red Moon over Manhattan Cocktail.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Spooky Halloween Cocktail',
            'harga' => '125000',
            'kategori' => 'Beverage',
            'deskripsi' => 'Mysterious cocktail with dark rum, blackberry puree, and a touch of haunting spices.',
            'gambar' => 'Spooky Halloween Cocktail.jpg',
        ]);

        DB::table('menus')->insert([
            'nama' => 'Sugarcane Lemon',
            'harga' => '55000',
            'kategori' => 'Beverage',
            'deskripsi' => 'A refreshing concoction of pure sugarcane juice and zesty lemon essence.',
            'gambar' => 'Sugarcane Lemon.jpg',
        ]);
    }
}
