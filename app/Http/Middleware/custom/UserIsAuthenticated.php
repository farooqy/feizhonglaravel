<?php

namespace App\Http\Middleware\custom;

use App\customClass\Error;
use App\models\apiKeyModel;
use Closure;
use Throwable;

class UserIsAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $statusHandler = new Error();
        $apiModel = new apiKeyModel();
        $isAuthenticated = $apiModel->isAuthenticated(
            $request->api_key,
            $request->host_id,
            $request->host_token,
            $request->host_type,
        );
        if ($isAuthenticated) {
            return $next($request);
        }

        $statusHandler->setError(["Authentication error: You are not logged in"]);
        return $statusHandler->getError();
    }
}
