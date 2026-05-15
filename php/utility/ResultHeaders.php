<?php
declare(strict_types=1);

// IpGeolocation SDK utility: result_headers

class IpGeolocationResultHeaders
{
    public static function call(IpGeolocationContext $ctx): ?IpGeolocationResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
