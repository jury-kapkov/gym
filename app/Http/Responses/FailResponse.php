<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;

class FailResponse extends JsonResponse
{
    public function __construct($data = null, $message = "", $status = 400, $headers = [], $options = 0)
    {
        $data['result'] = 'error';
        $data['message'] = $message;

        parent::__construct($data, $status, $headers, $options);
    }
}
