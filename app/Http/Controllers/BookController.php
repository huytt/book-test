<?php

namespace App\Http\Controllers;

use App\Service\BookService;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /** @var BookService $bookService */
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function searchBook(Request $request)
    {
        $q = $request->get('q', null);
        return $this->bookService->searchBook($q);
    }
}
