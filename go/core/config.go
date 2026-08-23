package core

import (
	"sync"
)

// MakeConfig builds a fresh, fully materialised config map. Every call
// rebuilds the whole structure, so prefer SharedConfig unless you need a
// private copy you intend to mutate.
func MakeConfig() map[string]any {
	return map[string]any{
		"main": map[string]any{
			"name": "IpGeolocation",
			"slug": "ip-geolocation",
			"version": "0.0.1",
			"target": "go",
		},
		"feature": map[string]any{
			"test": map[string]any{
				"options": map[string]any{
					"active": false,
				},
			},
		},
		"options": map[string]any{
			"base": "https://api.ip2location.io",
			"auth": map[string]any{
				"prefix": "",
			},
			"headers": map[string]any{
				"content-type": "application/json",
			},
			"entity": map[string]any{
				"get_ip_geolocation": map[string]any{},
			},
		},
		"entity": map[string]any{
			"get_ip_geolocation": map[string]any{
				"fields": []any{
					map[string]any{
						"name": "as",
						"type": "`$STRING`",
					},
					map[string]any{
						"name": "asn",
						"type": "`$STRING`",
					},
					map[string]any{
						"name": "city_name",
						"type": "`$STRING`",
					},
					map[string]any{
						"name": "country_code",
						"type": "`$STRING`",
					},
					map[string]any{
						"name": "country_name",
						"type": "`$STRING`",
					},
					map[string]any{
						"name": "ip",
						"type": "`$STRING`",
					},
					map[string]any{
						"name": "is_proxy",
						"type": "`$BOOLEAN`",
					},
					map[string]any{
						"name": "latitude",
						"type": "`$NUMBER`",
					},
					map[string]any{
						"name": "longitude",
						"type": "`$NUMBER`",
					},
					map[string]any{
						"name": "region_name",
						"type": "`$STRING`",
					},
					map[string]any{
						"name": "time_zone",
						"type": "`$STRING`",
					},
					map[string]any{
						"name": "zip_code",
						"type": "`$STRING`",
					},
				},
				"name": "get_ip_geolocation",
				"op": map[string]any{
					"load": map[string]any{
						"input": "data",
						"name": "load",
						"points": []any{
							map[string]any{
								"args": map[string]any{
									"query": []any{
										map[string]any{
											"example": "json",
											"kind": "query",
											"name": "format",
											"orig": "format",
											"type": "`$STRING`",
										},
										map[string]any{
											"example": "8.8.8.8",
											"kind": "query",
											"name": "ip",
											"orig": "ip",
											"type": "`$STRING`",
										},
										map[string]any{
											"kind": "query",
											"name": "key",
											"orig": "key",
											"type": "`$STRING`",
										},
										map[string]any{
											"kind": "query",
											"name": "lang",
											"orig": "lang",
											"type": "`$STRING`",
										},
									},
								},
								"kind": "http",
								"method": "GET",
								"orig": "/",
								"parts": []any{},
								"select": map[string]any{
									"exist": []any{
										"format",
										"ip",
										"key",
										"lang",
									},
								},
								"transform": map[string]any{
									"req": "`reqdata`",
									"res": "`body`",
								},
							},
						},
					},
				},
				"relations": map[string]any{
					"ancestors": []any{},
				},
			},
		},
	}
}

var (
	sharedConfigOnce sync.Once
	sharedConfigVal  map[string]any
)

// SharedConfig returns the process-wide config, built once on first use.
// The SDK reads the config on every request and never writes to it, so one
// instance is shared by every client rather than rebuilt per client.
//
// The returned map is shared: treat it as read-only. Callers that need to
// mutate should use MakeConfig, which always returns a fresh copy.
func SharedConfig() map[string]any {
	sharedConfigOnce.Do(func() {
		sharedConfigVal = MakeConfig()
	})
	return sharedConfigVal
}

func makeFeature(name string) Feature {
	switch name {
	case "test":
		if NewTestFeatureFunc != nil {
			return NewTestFeatureFunc()
		}
	default:
		if NewBaseFeatureFunc != nil {
			return NewBaseFeatureFunc()
		}
	}
	return nil
}
