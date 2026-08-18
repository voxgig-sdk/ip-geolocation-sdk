
import { BaseFeature } from './feature/base/BaseFeature'
import { TestFeature } from './feature/test/TestFeature'



const FEATURE_CLASS: Record<string, typeof BaseFeature> = {
   test: TestFeature,

}


class Config {

  makeFeature(this: any, fn: string) {
    const fc = FEATURE_CLASS[fn]
    const fi = new fc()
    // TODO: errors etc
    return fi
  }


  main = {
    name: 'IpGeolocation',
  }


  feature = {
     test:     {
      "options": {
        "active": false
      }
    },

  }


  options = {
    base: "https://api.ip2location.io",

    auth: {
      prefix: '',
    },

    headers: {
      "content-type": "application/json"
    },

    entity: {
      
      get_ip_geolocation: {
      },

    }
  }


  entity = {
    "get_ip_geolocation": {
      "fields": [
        {
          "name": "as",
          "type": "`$STRING`"
        },
        {
          "name": "asn",
          "type": "`$STRING`"
        },
        {
          "name": "city_name",
          "type": "`$STRING`"
        },
        {
          "name": "country_code",
          "type": "`$STRING`"
        },
        {
          "name": "country_name",
          "type": "`$STRING`"
        },
        {
          "name": "ip",
          "type": "`$STRING`"
        },
        {
          "name": "is_proxy",
          "type": "`$BOOLEAN`"
        },
        {
          "name": "latitude",
          "type": "`$NUMBER`"
        },
        {
          "name": "longitude",
          "type": "`$NUMBER`"
        },
        {
          "name": "region_name",
          "type": "`$STRING`"
        },
        {
          "name": "time_zone",
          "type": "`$STRING`"
        },
        {
          "name": "zip_code",
          "type": "`$STRING`"
        }
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
                    "type": "`$STRING`"
                  },
                  {
                    "example": "8.8.8.8",
                    "kind": "query",
                    "name": "ip",
                    "orig": "ip",
                    "type": "`$STRING`"
                  },
                  {
                    "kind": "query",
                    "name": "key",
                    "orig": "key",
                    "type": "`$STRING`"
                  },
                  {
                    "kind": "query",
                    "name": "lang",
                    "orig": "lang",
                    "type": "`$STRING`"
                  }
                ]
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
                  "lang"
                ]
              },
              "transform": {
                "req": "`reqdata`",
                "res": "`body`"
              }
            }
          ]
        }
      },
      "relations": {
        "ancestors": []
      }
    }
  }
}


const config = new Config()

export {
  config
}

