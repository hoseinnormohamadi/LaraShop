<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof ModelNotFoundException || $exception instanceof NotFoundExeptionMessage){
            return $this->NotFoundExeptionMessage($request, $exception);
        }
        return parent::render($request, $exception);
    }

    /**
     * @param $request
     * @param Exception $exception
     * @return JsonResponse
     */
    public function NotFoundExeptionMessage($request, Exception $exception): JsonResponse
    {
        return $request->expectsJson()
            ? new JsonResponse([
                'data' => 'Not Found',
                'Status' => 'Error'
            ], 404)
            :        parent::render($request, $exception);

    }

    /**
     * Convert an authentication exception into a response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return $request->expectsJson()
            ? response()->json([
                'Data' =>[
                    'Message' => 'Access Denied'
                ],
                'Status' => 'Error'
            ], 401)
            : redirect()->guest($exception->redirectTo() ?? route('login'));
    }

}
