<?php

namespace App\Services\Server;

use App\Http\Controllers\Controller;
use App\Http\Helpers\JsonRpcResponse;
use Illuminate\Http\Request;

class JsonRpcServer
{
    public function handle(Request $request, Controller $controller)
    {
        try {
            $content = json_decode($request->getContent(), true);

            if (empty($content)) {
                throw new \Exception('Parse error: Content not found');
            }

            $result = $controller->{$content['method']}(...[$content['params']]);

            return JsonRpcResponse::success($result, $content['id']);
        } catch (\Exception $e) {
            return JsonRpcResponse::error($e->getMessage());
        }
    }
}
