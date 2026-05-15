<?php
declare(strict_types=1);

// IpGeolocation SDK exists test

require_once __DIR__ . '/../ipgeolocation_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = IpGeolocationSDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}
