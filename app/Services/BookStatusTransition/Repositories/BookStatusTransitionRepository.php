<?php

namespace App\Services\BookStatusTransition\Repositories;

use App\Models\BookStatusTransition;

class BookStatusTransitionRepository implements BookStatusTransitionRepositoryInterface
{
    public function getByFromTo(int $from, int $to)
    {
        return BookStatusTransition::where('from_id', $from)->where('to_id', $to)->first();
    }
}
