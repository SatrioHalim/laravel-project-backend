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
            'title'=> "Sherlock Holmes",
            'image'=> "image",
            'author'=>  "Sir Arthur conan doyle",
            'price'=> 50000,
            'release'=> "2024-08-01",
            'category_id' => "3",
        ]);

        Book::create([
            'title'=> "Conan",
            'image'=> "image",
            'author'=>  "Aoyama Gosho",
            'price'=> 30000,
            'release'=> "2024-08-01",
            'category_id' => "2",
        ]);

        Book::create([
            'title'=> "Becoming 1%",
            'image'=> "image",
            'author'=>  "S. Halim",
            'price'=> 50000,
            'release'=> "2024-08-01",
            'category_id' => "4",
        ]);
    }
}
