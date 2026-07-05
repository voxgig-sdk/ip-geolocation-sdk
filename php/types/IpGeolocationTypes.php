<?php
declare(strict_types=1);

// Typed models for the IpGeolocation SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.
//
// These are documentation-grade value objects (PHP 8 typed properties),
// registered on the composer classmap autoload. The SDK boundary exchanges
// assoc-arrays; these classes name the shapes for tooling and typed callers.

/** GetIpGeolocation entity data model. */
class GetIpGeolocation
{
    public ?string $as = null;
    public ?string $asn = null;
    public ?string $city_name = null;
    public ?string $country_code = null;
    public ?string $country_name = null;
    public ?string $ip = null;
    public ?bool $is_proxy = null;
    public ?float $latitude = null;
    public ?float $longitude = null;
    public ?string $region_name = null;
    public ?string $time_zone = null;
    public ?string $zip_code = null;
}

/** Request payload for GetIpGeolocation#load. */
class GetIpGeolocationLoadMatch
{
    public ?string $as = null;
    public ?string $asn = null;
    public ?string $city_name = null;
    public ?string $country_code = null;
    public ?string $country_name = null;
    public ?string $ip = null;
    public ?bool $is_proxy = null;
    public ?float $latitude = null;
    public ?float $longitude = null;
    public ?string $region_name = null;
    public ?string $time_zone = null;
    public ?string $zip_code = null;
}

