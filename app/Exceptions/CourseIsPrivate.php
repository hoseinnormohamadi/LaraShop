<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CourseIsPrivate extends Exception
{
    /**
     * Render the exception as an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function render($request)
    {
        return $request->expectsJson()
            ? new JsonResponse([
                'data' => 'Course Is Private',
                'Status' => 'Error'
            ], Response::HTTP_UNAUTHORIZED)
            : view('Errors.CourseIsPrivate');
    }
}
