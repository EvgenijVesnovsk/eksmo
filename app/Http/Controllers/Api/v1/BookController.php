<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Book\BookService;
use App\Http\Requests\ListBookRequest;
use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;

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
        $data = $this->service->list($request->only('status_id','order_by'));
        return BookResource::collection($data);
    }

    public function create(CreateBookRequest $request)
    {
        $data = $this->service->create($request->only('name'));
        return new BookResource($data);
    }

    public function get(Book $book)
    {
        return new BookResource($book);
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $data = $this->service->update($request->only('name', 'status_id'), $book);
        return new BookResource($data);
    }

    public function delete(Book $book)
    {
        return response()->json(['data' => (boolean)$this->service->delete($book)]);
    }
}
