<?php

namespace App\Http\Responses;

class ApiResponse
{
    public static function sendResponse($message = null, $data = null, $code = 200)
    {
        $response = [
            'success' => true,
            'message' => $message,
            'data' => $data,
        ];

        return response()->json($response, $code);
    }
}
