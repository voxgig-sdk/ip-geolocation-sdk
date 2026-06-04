# IpGeolocation SDK

Resolve IPv4 and IPv6 addresses to country, region, city, coordinates, and network info

> TypeScript, Python, PHP, Golang, Ruby, Lua SDKs, a CLI, an interactive REPL, and an MCP server for AI agents — all generated from one OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).

## About IP Geolocation API

[IP2Location.io](https://www.ip2location.io) is a geolocation lookup service that maps an IPv4 or IPv6 address to location and network attributes. The public REST endpoint at `https://api.ip2location.io/` can be queried without credentials for light usage, with paid plans unlocking richer fields and higher quotas.

What you get from a lookup:

- Location: country code and name, region, city, ZIP code, latitude/longitude, and time zone.
- Network: ASN, AS name, and (on higher plans) ISP, domain, net speed, and usage type.
- Optional fields on paid plans: mobile carrier (MCC/MNC), proxy/fraud detection, currency, and language.

Operational notes: keyless callers are capped at roughly 500-1,000 queries per day (resetting at 00:00 UTC); authenticated calls accept the key either as a `key` query parameter or as a `Bearer` token in the `Authorization` header. The service returns JSON by default and also supports XML and a `lang` parameter for localized country/region names. CORS is disabled on the public endpoint.

## Try it

**TypeScript**
```bash
npm install ip-geolocation
```

**Python**
```bash
pip install ip-geolocation-sdk
```

**PHP**
```bash
composer require voxgig/ip-geolocation-sdk
```

**Golang**
```bash
go get github.com/voxgig-sdk/ip-geolocation-sdk/go
```

**Ruby**
```bash
gem install ip-geolocation-sdk
```

**Lua**
```bash
luarocks install ip-geolocation-sdk
```

## 30-second quickstart

### TypeScript

```ts
import { IpGeolocationSDK } from 'ip-geolocation'

const client = new IpGeolocationSDK({})

```

See the [TypeScript README](ts/README.md) for the
full guide, or scroll down for the same example in other languages.

## What's in the box

| Surface | Use it for | Path |
| --- | --- | --- |
| **SDK** (TypeScript, Python, PHP, Golang, Ruby, Lua) | App integration | `ts/` `py/` `php/` `go/` `rb/` `lua/` |
| **CLI** | Scripts, CI, ops, one-off API calls | `go-cli/` |
| **MCP server** | AI agents (Claude, Cursor, Cline) | `go-mcp/` |

## Use it from an AI agent (MCP)

The generated MCP server exposes every operation in this SDK as an
[MCP](https://modelcontextprotocol.io) tool that Claude, Cursor or Cline
can call directly. Build and register it:

```bash
cd go-mcp && go build -o ip-geolocation-mcp .
```

Then add it to your agent's MCP config (Claude Desktop, Cursor, etc.):

```json
{
  "mcpServers": {
    "ip-geolocation": {
      "command": "/abs/path/to/ip-geolocation-mcp"
    }
  }
}
```

## Entities

The API exposes one entity:

| Entity | Description | API path |
| --- | --- | --- |
| **GetIpGeolocation** | Looks up the geolocation and network metadata for an IPv4 or IPv6 address via `GET /?ip={ip}` on `api.ip2location.io`, optionally accepting `key`, `format`, and `lang` query parameters. | `/` |

Each entity supports the following operations where available: **load**,
**list**, **create**, **update**, and **remove**.

## Quickstart in other languages

### Python

```python
from ipgeolocation_sdk import IpGeolocationSDK

client = IpGeolocationSDK({})


# Load a specific getipgeolocation
getipgeolocation, err = client.GetIpGeolocation(None).load(
    {"id": "example_id"}, None
)
```

### PHP

```php
<?php
require_once 'ipgeolocation_sdk.php';

$client = new IpGeolocationSDK([]);


// Load a specific getipgeolocation
[$getipgeolocation, $err] = $client->GetIpGeolocation(null)->load(
    ["id" => "example_id"], null
);
```

### Golang

```go
import sdk "github.com/voxgig-sdk/ip-geolocation-sdk/go"

client := sdk.NewIpGeolocationSDK(map[string]any{})

```

### Ruby

```ruby
require_relative "IpGeolocation_sdk"

client = IpGeolocationSDK.new({})


# Load a specific getipgeolocation
getipgeolocation, err = client.GetIpGeolocation(nil).load(
  { "id" => "example_id" }, nil
)
```

### Lua

```lua
local sdk = require("ip-geolocation_sdk")

local client = sdk.new({})


-- Load a specific getipgeolocation
local getipgeolocation, err = client:GetIpGeolocation(nil):load(
  { id = "example_id" }, nil
)
```

## Unit testing in offline mode

Every SDK ships a test mode that swaps the HTTP transport for an
in-memory mock, so unit tests run offline.

### TypeScript

```ts
const client = IpGeolocationSDK.test()
const result = await client.GetIpGeolocation().load({ id: 'test01' })
// result.ok === true, result.data contains mock data
```

### Python

```python
client = IpGeolocationSDK.test(None, None)
result, err = client.GetIpGeolocation(None).load(
    {"id": "test01"}, None
)
```

### PHP

```php
$client = IpGeolocationSDK::test(null, null);
[$result, $err] = $client->GetIpGeolocation(null)->load(
    ["id" => "test01"], null
);
```

### Golang

```go
client := sdk.TestSDK(nil, nil)
result, err := client.GetIpGeolocation(nil).Load(
    map[string]any{"id": "test01"}, nil,
)
```

### Ruby

```ruby
client = IpGeolocationSDK.test(nil, nil)
result, err = client.GetIpGeolocation(nil).load(
  { "id" => "test01" }, nil
)
```

### Lua

```lua
local client = sdk.test(nil, nil)
local result, err = client:GetIpGeolocation(nil):load(
  { id = "test01" }, nil
)
```

## How it works

Every SDK call runs the same five-stage pipeline:

1. **Point** — resolve the API endpoint from the operation definition.
2. **Spec** — build the HTTP specification (URL, method, headers, body).
3. **Request** — send the HTTP request.
4. **Response** — receive and parse the response.
5. **Result** — extract the result data for the caller.

A feature hook fires at each stage (e.g. `PrePoint`, `PreSpec`,
`PreRequest`), so features can inspect or modify the pipeline without
forking the SDK.

### Features

| Feature | Purpose |
| --- | --- |
| **TestFeature** | In-memory mock transport for testing without a live server |

Pass custom features via the `extend` option at construction time.

### Direct and Prepare

For endpoints the entity model doesn't cover, use the low-level methods:

- **`direct(fetchargs)`** — build and send an HTTP request in one step.
- **`prepare(fetchargs)`** — build the request without sending it.

Both accept a map with `path`, `method`, `params`, `query`,
`headers`, and `body`. See the [How-to guides](#how-to-guides) below.

## How-to guides

### Make a direct API call

When the entity interface does not cover an endpoint, use `direct`:

**TypeScript:**
```ts
const result = await client.direct({
  path: '/api/resource/{id}',
  method: 'GET',
  params: { id: 'example' },
})
console.log(result.data)
```

**Python:**
```python
result, err = client.direct({
    "path": "/api/resource/{id}",
    "method": "GET",
    "params": {"id": "example"},
})
```

**PHP:**
```php
[$result, $err] = $client->direct([
    "path" => "/api/resource/{id}",
    "method" => "GET",
    "params" => ["id" => "example"],
]);
```

**Go:**
```go
result, err := client.Direct(map[string]any{
    "path":   "/api/resource/{id}",
    "method": "GET",
    "params": map[string]any{"id": "example"},
})
```

**Ruby:**
```ruby
result, err = client.direct({
  "path" => "/api/resource/{id}",
  "method" => "GET",
  "params" => { "id" => "example" },
})
```

**Lua:**
```lua
local result, err = client:direct({
  path = "/api/resource/{id}",
  method = "GET",
  params = { id = "example" },
})
```

## Per-language documentation

- [TypeScript](ts/README.md)
- [Python](py/README.md)
- [PHP](php/README.md)
- [Golang](go/README.md)
- [Ruby](rb/README.md)
- [Lua](lua/README.md)

## Using the IP Geolocation API

- Upstream: [https://www.ip2location.io](https://www.ip2location.io)
- API docs: [https://www.ip2location.io/ip2location-documentation](https://www.ip2location.io/ip2location-documentation)

- Operated by [IP2Location.io](https://www.ip2location.io) under its [Terms of Service](https://www.ip2location.io/terms-of-service).
- Keyless access is rate-limited; higher tiers require account signup and an API key.
- Check the IP2Location terms before redistributing or caching geolocation results.

---

Generated from the IP Geolocation API OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).
