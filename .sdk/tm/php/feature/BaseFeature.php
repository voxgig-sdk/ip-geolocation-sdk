<?php
declare(strict_types=1);

// IpGeolocation SDK base feature

class IpGeolocationBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(IpGeolocationContext $ctx, array $options): void {}
    public function PostConstruct(IpGeolocationContext $ctx): void {}
    public function PostConstructEntity(IpGeolocationContext $ctx): void {}
    public function SetData(IpGeolocationContext $ctx): void {}
    public function GetData(IpGeolocationContext $ctx): void {}
    public function GetMatch(IpGeolocationContext $ctx): void {}
    public function SetMatch(IpGeolocationContext $ctx): void {}
    public function PrePoint(IpGeolocationContext $ctx): void {}
    public function PreSpec(IpGeolocationContext $ctx): void {}
    public function PreRequest(IpGeolocationContext $ctx): void {}
    public function PreResponse(IpGeolocationContext $ctx): void {}
    public function PreResult(IpGeolocationContext $ctx): void {}
    public function PreDone(IpGeolocationContext $ctx): void {}
    public function PreUnexpected(IpGeolocationContext $ctx): void {}
}
