<?php

namespace App\Exceptions;

use Laravel\Passport\Exceptions\MissingScopeException as BaseMissingScopeException;

class MissingScopeException extends BaseMissingScopeException
{

    public function __construct($scopes = [], $message = 'Invalid scope(s) provided. codedwebforum')
    {
        parent::__construct($message);

        $this->scopes = Arr::wrap($scopes);
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return response()->json(['error' => 'You do not have the required scope(s). pprvivilage'], 403);
    }
}
