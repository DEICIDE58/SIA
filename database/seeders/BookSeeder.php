<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Books; 

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['name' => 'Harry Potter', 'summary' => 'A boy with sunglasses.'],

        ];

        foreach ($books as $book) {
            Books::create($book);
        }
    }
}