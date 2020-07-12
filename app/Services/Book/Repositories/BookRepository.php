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

    public function create(){
        //
    }

    public function update(){
        //
    }

    public function delete(){
        //
    }
}
