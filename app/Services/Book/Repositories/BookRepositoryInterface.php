<?php

namespace App\Services\Book\Repositories;

interface BookRepositoryInterface
{
    public function list($query);

    public function get();

    public function create();

    public function update();

    public function delete();
}
