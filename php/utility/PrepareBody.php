<?php
declare(strict_types=1);

// IpGeolocation SDK utility: prepare_body

class IpGeolocationPrepareBody
{
    public static function call(IpGeolocationContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
