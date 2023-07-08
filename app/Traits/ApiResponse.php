<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

trait ApiResponse
{

    protected function prepareResponse($status = true, $message = null, $statusCode = Response::HTTP_OK): array
    {
        if (empty($message)) {
            $message = Response::$statusTexts[$statusCode];
        }

        return [
            'status' => $status,
            'message' => $message,
            'status_code' => $statusCode,
        ];
    }

    public function success($data = null, $message = null, $statusCode = Response::HTTP_OK): JsonResponse
    {
        $response = $this->prepareResponse(true, $message, $statusCode);
        $response['results'] = $data;

        return response()->json($response);
    }

    public function error($data = null, $message = null, $statusCode = Response::HTTP_INTERNAL_SERVER_ERROR): JsonResponse
    {
        $response = $this->prepareResponse('error', $message, $statusCode);
        $response['results'] = $data;

        return response()->json($response);
    }

    public function created($data = null, $message = null, $statusCode = Response::HTTP_CREATED): JsonResponse
    {
        return $this->success($data, $message, $statusCode);
    }
}
