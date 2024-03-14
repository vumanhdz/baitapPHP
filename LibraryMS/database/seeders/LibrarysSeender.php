<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Book;
use App\Models\Borrowing;

class LibrarysSeender extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Tạo dữ liệu giả cho bảng "flowers" và "regions"
        for ($i = 0; $i < 10; $i++) {
            $flower = Book::create([
                'Title' => $faker->sentence,
                'Author' => $faker->name,
                'ISBN' => $faker->isbn13,
                'PublishedYear' => $faker->numberBetween(1900, 2022),
                'Genre' => $faker->word
            ]);

            Borrowing::create([
                'BookID' => $faker->numberBetween(1, 10), // Assuming there are 10 books in the "books" table
                'MemberID' => $faker->numberBetween(1, 100), // Assuming there are 100 members in the "members" table
                'BorrowDate' => $faker->date,
                'DueDate' => $faker->date,
                'ReturnedDate' => $faker->date
            ]);
        }
    }
}
