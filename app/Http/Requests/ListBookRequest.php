<?php

namespace App\Http\Requests;

use App\Rules\OrderByFieldExist;

class ListBookRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'status_id' => 'nullable|integer|exists:book_statuses,id',
            'order_by' => ['nullable', 'string', new OrderByFieldExist(['name', 'status_id'])]
        ];
    }
}
