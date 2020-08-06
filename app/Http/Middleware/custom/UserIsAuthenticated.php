<?php

namespace App\Http\Middleware\custom;

use App\customClass\Error;
use App\models\apiKeyModel;
use Closure;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

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
        $rules = [
            "host_id" => 'required|integer',
            "host_token" => "required|string|max:255",
            "host_type" => "required|string|in:normal,guest,comp",
            "api_key" => "required|string",
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $response = Response::json([
                "errorMessage" => ["missing the required credentials for authentication"],
                "isSuccess" => false,
                "data" => [],
            ]);

            return $response;
        }
        $isAuthenticated = $apiModel->isAuthenticated(
            $request->api_key,
            $request->host_id,
            $request->host_token,
            $request->host_type,
        );
        if (!$isAuthenticated) {
            $response = Response::json([
                "errorMessage" => ["Authentication error: You are not authenticated for this action"],
                "isSuccess" => false,
                "data" => [],
            ]);

            return $response;
        }

        return $next($request);
    }
}
