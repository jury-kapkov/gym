<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;

class SuccessResponse extends JsonResponse
{
    public function __construct($data = null, $message = "", $status = 200, $headers = [], $options = 0)
    {
        $data['result'] = 'success';
        $data['message'] = $message;

        parent::__construct($data, $status, $headers, $options);
    }
}
