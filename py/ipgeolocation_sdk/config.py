# IpGeolocation SDK configuration


_shared_config = None


def shared_config():
    """Return the process-wide config, built once on first use.

    The SDK reads the config on every request and never writes to it, so one
    instance is shared by every client rather than rebuilt per client.

    The returned dict is shared: treat it as read-only. Callers that need to
    mutate should use make_config, which always returns a fresh copy.
    """
    global _shared_config
    if _shared_config is None:
        _shared_config = make_config()
    return _shared_config


def make_config():
    """Build a fresh, fully materialised config dict.

    Every call rebuilds the whole structure, so prefer shared_config unless
    you need a private copy you intend to mutate.
    """
    return {
        "main": {
            "name": "IpGeolocation",
            "slug": "ip-geolocation",
            "version": "0.0.1",
            "target": "py",
        },
        "feature": {
            "test": {
        "options": {
          "active": False,
        },
      },
        },
        "options": {
            "base": "https://api.ip2location.io",
            "auth": {
                "prefix": "",
            },
            "headers": {
        "content-type": "application/json",
      },
            "entity": {
                "get_ip_geolocation": {},
            },
        },
        "entity": {
      "get_ip_geolocation": {
        "fields": [
          {
            "name": "as",
            "type": "`$STRING`",
          },
          {
            "name": "asn",
            "type": "`$STRING`",
          },
          {
            "name": "city_name",
            "type": "`$STRING`",
          },
          {
            "name": "country_code",
            "type": "`$STRING`",
          },
          {
            "name": "country_name",
            "type": "`$STRING`",
          },
          {
            "name": "ip",
            "type": "`$STRING`",
          },
          {
            "name": "is_proxy",
            "type": "`$BOOLEAN`",
          },
          {
            "name": "latitude",
            "type": "`$NUMBER`",
          },
          {
            "name": "longitude",
            "type": "`$NUMBER`",
          },
          {
            "name": "region_name",
            "type": "`$STRING`",
          },
          {
            "name": "time_zone",
            "type": "`$STRING`",
          },
          {
            "name": "zip_code",
            "type": "`$STRING`",
          },
        ],
        "name": "get_ip_geolocation",
        "op": {
          "load": {
            "input": "data",
            "name": "load",
            "points": [
              {
                "args": {
                  "query": [
                    {
                      "example": "json",
                      "kind": "query",
                      "name": "format",
                      "orig": "format",
                      "type": "`$STRING`",
                    },
                    {
                      "example": "8.8.8.8",
                      "kind": "query",
                      "name": "ip",
                      "orig": "ip",
                      "type": "`$STRING`",
                    },
                    {
                      "kind": "query",
                      "name": "key",
                      "orig": "key",
                      "type": "`$STRING`",
                    },
                    {
                      "kind": "query",
                      "name": "lang",
                      "orig": "lang",
                      "type": "`$STRING`",
                    },
                  ],
                },
                "kind": "http",
                "method": "GET",
                "orig": "/",
                "parts": [],
                "select": {
                  "exist": [
                    "format",
                    "ip",
                    "key",
                    "lang",
                  ],
                },
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
              },
            ],
          },
        },
        "relations": {
          "ancestors": [],
        },
      },
    },
    }
