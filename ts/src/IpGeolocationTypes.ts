// Typed models for the IpGeolocation SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.

export interface GetIpGeolocation {
  as?: string
  asn?: string
  city_name?: string
  country_code?: string
  country_name?: string
  ip?: string
  is_proxy?: boolean
  latitude?: number
  longitude?: number
  region_name?: string
  time_zone?: string
  zip_code?: string
}

export type GetIpGeolocationLoadMatch = Partial<GetIpGeolocation>

