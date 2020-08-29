<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        /**
         * Checks if user is not authenticated
         * by other guard.
         *
         */
        if(Auth::guard('alloom_customer_user')->check()) {
            return redirect()->route('alloom_customer.home');
        } else if(Auth::guard('alloom_user')->check()) {
            return redirect()->route('alloom_user.home');
        }

        if ($request->is('cliente/*')) {
            return redirect()->guest('/cliente/login');
        }
        if ($request->is('alloom/*')) {
            return redirect()->guest('/alloom/login');
        }

        return abort(500, "Something went wrong");
    }

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
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }
}
