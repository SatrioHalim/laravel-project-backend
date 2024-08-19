<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title'=> "judul baru",
            'author'=>  "penagrang baru",
            'price'=> 1200,
            'release'=> "2024-08-01",
            'category_id' => "1",
        ]);

        Book::create([
            'title'=> "judul baru ke 2",
            'author'=>  "penagrang baru",
            'price'=> 1200,
            'release'=> "2024-08-01",
            'category_id' => "2",
        ]);

        Book::create([
            'title'=> "judul baru ke 3",
            'author'=>  "penagrang baru",
            'price'=> 1200,
            'release'=> "2024-08-01",
            'category_id' => "3",
        ]);
    }
}
