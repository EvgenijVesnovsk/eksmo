<?php

namespace App\Services\BookStatusTransition\Repositories;

interface BookStatusTransitionRepositoryInterface
{
    public function getByFromTo(int $from, int $to);
}
