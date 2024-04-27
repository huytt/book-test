<?php

namespace App\Service;

use App\Repositories\BookRepository;

class BookService
{
    /** @var BookRepository $bookRepository */
    protected $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    /** @param string $query */
    public function searchBook($query, $limit = 10)
    {
        if($query) {
            return 'data';
        }

        return $this->bookRepository->paginate($limit);
    }
}
