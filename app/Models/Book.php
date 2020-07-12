<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Services\ExampleRemoteService\ExampleRemoteService;

class Book extends Model
{
    protected $fillable = [
        'status_id',
        'name'
    ];

    protected static function booted()
    {
        static::updated(function ($book) {
            $service = app()->make(ExampleRemoteService::class);
            $service->sendDataToService([
                'name' => $book->name,
                'status' => $book->status->name
            ]);
        });
    }

    public function status()
    {
        return $this->belongsTo(BookStatus::class, 'status_id','id');
    }

    /**
     * Filter by status
     *
     * @param $query
     * @param $statusId
     * @return mixed
     */
    public function scopeStatusBy($query, $statusId)
    {
        return $query->where('status_id', $statusId);
    }
}
