<?php
declare(strict_types=1);

// IpGeolocation SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class IpGeolocationMakeContext
{
    public static function call(array $ctxmap, ?IpGeolocationContext $basectx): IpGeolocationContext
    {
        return new IpGeolocationContext($ctxmap, $basectx);
    }
}
