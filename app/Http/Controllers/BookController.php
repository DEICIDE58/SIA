<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Get all book
    public function getAll()
    {
        return response()->json(books::all());
    }

    // Get random book
    public function getRandom()
    {
        return response()->json(Books::inRandomOrder()->first());
    }

    // Get book by ID
    public function getById($id)
    {
        $book = Books::find($id);

        if (!$book) {
            return response()->json(["message" => "No book found for id: $id"], 404);
        }

        return response()->json($book);
    }
}