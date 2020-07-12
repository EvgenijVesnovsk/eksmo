<?php

namespace App\Services\Book;

use App\Services\Book\Repositories\BookRepositoryInterface;
use App\Models\Book;
use App\Enums\BookEnum;

class BookService
{
    private $repository;

    public function __construct
    (
        BookRepositoryInterface $repository
    )
    {
        $this->repository = $repository;
    }

    public function list($filters){

        $books = Book::query();

        if(isset($filters['status_id'])){
            $books->statusBy($filters['status_id']);
        }

        if(isset($filters['order_by'])){
            $books->orderBy($filters['order_by']);
        }

        return $this->repository->list($books)->appends(request()->except('page'));
    }

    public function get(){
        //
    }

    public function create($data){
        $data['status_id'] = BookEnum::DRAFT;
        return $this->repository->create($data);
    }

    public function update($data, $book){
        $this->repository->update($data, $book);
        return $book;
    }

    public function delete($book){
        return $this->repository->delete($book);
    }
}
