<?php
declare(strict_types=1);

// IpGeolocation SDK utility: result_body

class IpGeolocationResultBody
{
    public static function call(IpGeolocationContext $ctx): ?IpGeolocationResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
