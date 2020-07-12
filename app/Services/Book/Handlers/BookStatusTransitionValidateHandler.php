<?php

namespace App\Services\Book\Handlers;

use App\Services\BookStatusTransition\Repositories\BookStatusTransitionRepositoryInterface;
use Illuminate\Http\Exceptions\HttpResponseException;

class BookStatusTransitionValidateHandler
{
    private $repository;

    public function __construct
    (
        BookStatusTransitionRepositoryInterface $repository
    )
    {
        $this->repository = $repository;
    }

    public function handler($data, $book)
    {
        if (isset($data['status_id']) && $book->status_id !== $data['status_id']) {
            $transition = $this->repository->getByFromTo($book->status_id, $data['status_id']);

            if(empty($transition)){
                throw new HttpResponseException(response()->json(['status_id' => [trans('book.status_transition')]], 422));
            }
        }
    }
}
