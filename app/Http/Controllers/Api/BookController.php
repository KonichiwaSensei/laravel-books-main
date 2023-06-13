<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    public function latest()
    {
        return Book::orderBy('publication_date', 'DESC')->with('authors')->limit(5)->get();
    }
}
