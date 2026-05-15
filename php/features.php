<?php
declare(strict_types=1);

// IpGeolocation SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class IpGeolocationFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new IpGeolocationBaseFeature();
            case "test":
                return new IpGeolocationTestFeature();
            default:
                return new IpGeolocationBaseFeature();
        }
    }
}
