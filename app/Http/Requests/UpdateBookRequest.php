<?php

namespace App\Http\Requests;

class UpdateBookRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|max:255',
            'status_id' => 'integer|exists:book_statuses,id',
        ];
    }
}
