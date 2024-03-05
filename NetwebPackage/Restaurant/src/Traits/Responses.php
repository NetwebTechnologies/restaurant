<?php

namespace Netweb\Restaurant\Traits;

use Netweb\Restaurant\Helpers\Response;

trait Responses
{

    /**
     * @createResponse is the custom method for sending the success response.
     * It accept 3 paramaters i.e. $responseData, $responseType and $statusCode
     *
     * $responseData: this will be the data which we want to send
     * $responseType: JSON | HTML | XML | plain | binary (response()->file('path/to/image.jpg')).
     * $statusCode: the response code / status code. Default 200
     */
    public function createResponse(mixed $responseData, int $statusCode = 200, string $responseType = 'json')
    {
        if ($responseType == 'json') {
            return response()->json($responseData, $statusCode);
        }
        return response($responseData, $statusCode);
    }

    /**
     * @createErrorResponse is the custom method for sending the success response.
     * It accept 2 paramaters i.e. $exception, $responseType
     *
     * $exception: this will be the exception
     * $responseType: JSON | HTML | XML | plain | binary (response()->file('path/to/image.jpg')).
     *
     */
    public function createErrorResponse( \Exception $exception, string $responseType = 'json')
    {
        $statusCode = Response::$HTTP_INTERNAL_SERVER_ERROR;
        $errorMessage = ($exception->getMessage() !== null) ? $exception->getMessage() : 'Something went wrong';
        if ($responseType == 'json') {
            return response()->json($errorMessage, $statusCode);
        }
        return response($errorMessage, $statusCode);
    }
}
