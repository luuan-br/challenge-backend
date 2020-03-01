<?php


namespace App\Utils;

class ApiError {
    public static function errorMessage($message, $code) {
        return [
            'data' => [
                'message' => $message,
                'code' => $code
            ]
        ];
    }
}
