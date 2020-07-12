<?php

namespace App\Services\ExampleRemoteService;

use Illuminate\Support\Facades\Http;

class ExampleRemoteService
{
    public const BASE_URL = 'http://test.com/data';

    public function sendDataToService($data)
    {
        Http::post(self::BASE_URL, $data);
    }
}
