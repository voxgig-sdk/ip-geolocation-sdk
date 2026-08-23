<?php
declare(strict_types=1);

// IpGeolocation SDK configuration

class IpGeolocationConfig
{
    /** @var array<string,mixed>|null */
    private static ?array $shared_config = null;

    /**
     * Return the process-wide config, built once on first use. The SDK reads
     * the config on every request and never writes to it, so one instance is
     * shared by every client rather than rebuilt per client.
     *
     * PHP arrays are copy-on-write, so callers that do mutate the result get
     * their own copy and cannot disturb the shared one.
     */
    public static function shared_config(): array
    {
        if (self::$shared_config === null) {
            self::$shared_config = self::make_config();
        }
        return self::$shared_config;
    }

    /**
     * Build a fresh, fully materialised config array. Every call rebuilds the
     * whole structure, so prefer shared_config unless you need a private copy.
     */
    public static function make_config(): array
    {
        return [
            "main" => [
                "name" => "IpGeolocation",
                "slug" => "ip-geolocation",
                "version" => "0.0.1",
                "target" => "php",
            ],
            "feature" => [
                "test" => [
          'options' => [
            'active' => false,
          ],
        ],
            ],
            "options" => [
                "base" => "https://api.ip2location.io",
                "auth" => [
                    "prefix" => "",
                ],
                "headers" => [
          'content-type' => 'application/json',
        ],
                "entity" => [
                    "get_ip_geolocation" => [],
                ],
            ],
            "entity" => [
        'get_ip_geolocation' => [
          'fields' => [
            [
              'name' => 'as',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'asn',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'city_name',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'country_code',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'country_name',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'ip',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'is_proxy',
              'type' => '`$BOOLEAN`',
            ],
            [
              'name' => 'latitude',
              'type' => '`$NUMBER`',
            ],
            [
              'name' => 'longitude',
              'type' => '`$NUMBER`',
            ],
            [
              'name' => 'region_name',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'time_zone',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'zip_code',
              'type' => '`$STRING`',
            ],
          ],
          'name' => 'get_ip_geolocation',
          'op' => [
            'load' => [
              'input' => 'data',
              'name' => 'load',
              'points' => [
                [
                  'args' => [
                    'query' => [
                      [
                        'example' => 'json',
                        'kind' => 'query',
                        'name' => 'format',
                        'orig' => 'format',
                        'type' => '`$STRING`',
                      ],
                      [
                        'example' => '8.8.8.8',
                        'kind' => 'query',
                        'name' => 'ip',
                        'orig' => 'ip',
                        'type' => '`$STRING`',
                      ],
                      [
                        'kind' => 'query',
                        'name' => 'key',
                        'orig' => 'key',
                        'type' => '`$STRING`',
                      ],
                      [
                        'kind' => 'query',
                        'name' => 'lang',
                        'orig' => 'lang',
                        'type' => '`$STRING`',
                      ],
                    ],
                  ],
                  'kind' => 'http',
                  'method' => 'GET',
                  'orig' => '/',
                  'parts' => [],
                  'select' => [
                    'exist' => [
                      'format',
                      'ip',
                      'key',
                      'lang',
                    ],
                  ],
                  'transform' => [
                    'req' => '`reqdata`',
                    'res' => '`body`',
                  ],
                ],
              ],
            ],
          ],
          'relations' => [
            'ancestors' => [],
          ],
        ],
      ],
        ];
    }


    public static function make_feature(string $name)
    {
        require_once __DIR__ . '/features.php';
        return IpGeolocationFeatures::make_feature($name);
    }
}
