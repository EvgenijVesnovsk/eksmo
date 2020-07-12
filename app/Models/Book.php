<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'status_id',
        'name'
    ];

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
