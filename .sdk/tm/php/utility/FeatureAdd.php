<?php
declare(strict_types=1);

// IpGeolocation SDK utility: feature_add

class IpGeolocationFeatureAdd
{
    public static function call(IpGeolocationContext $ctx, mixed $f): void
    {
        $ctx->client->features[] = $f;
    }
}
