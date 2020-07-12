<?php

namespace App\Services\Book\Repositories;

use App\Models\Book;

interface BookRepositoryInterface
{
    public function list($query);

    public function create(array $data);

    public function update(array $data, Book $book);

    public function delete(Book $book);
}
