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
}