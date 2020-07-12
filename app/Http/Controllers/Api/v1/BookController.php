<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Book\BookService;
use App\Http\Requests\ListBookRequest;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    private $service;

    public function __construct
    (
        BookService $service
    )
    {
        $this->service = $service;
    }

    public function list(ListBookRequest $request)
    {
        $books = $this->service->list($request->only('status_id','order_by'));
        return BookResource::collection($books);
    }

    public function create(Request $request)
    {
        //
    }

    public function get($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function delete($id)
    {
        //
    }
}
