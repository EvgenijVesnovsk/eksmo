<?php

namespace App\Services\Book\Repositories;

use App\Models\Book;

class BookRepository implements BookRepositoryInterface
{
    public function list($query){
        return $query->paginate();
    }

    public function get(){
        //
    }

    public function create(array $data){
        return Book::create($data);
    }

    public function update(array $data, Book $book){
        return $book->update($data);
    }

    public function delete(Book $book){
        return $book->delete();
    }
}
