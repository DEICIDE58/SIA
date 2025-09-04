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
    // Store new book
    public function store(Request $request)
    {
        $book = Books::create($request->only(['name', 'summary']));
        return response()->json($book, 201);
    }

    // Update book by ID (PUT)
    public function update(Request $request, $id)
    {
        $book = Books::find($id);

        if (!$book) {
            return response()->json(["message" => "No book found for id: $id"], 404);
        }

        $book->update($request->only(['name', 'summary']));

        return response()->json($book);
    }


    // Delete book by ID (DELETE)
    public function destroy($id)
    {
        $book = Books::find($id);

        if (!$book) {
            return response()->json(["message" => "No hack found for id: $id"], 404);
        }

        $book->delete();

        return response()->json(["message" => "Hack with id $id deleted successfully"]);
    }
}
