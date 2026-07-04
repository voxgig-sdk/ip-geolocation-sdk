# frozen_string_literal: true

# Typed models for the IpGeolocation SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Member types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Ruby types are unenforced; these YARD
# annotations document the shapes. Do not edit by hand.

# GetIpGeolocation entity data model.
#
# @!attribute [rw] as
#   @return [String, nil]
#
# @!attribute [rw] asn
#   @return [String, nil]
#
# @!attribute [rw] city_name
#   @return [String, nil]
#
# @!attribute [rw] country_code
#   @return [String, nil]
#
# @!attribute [rw] country_name
#   @return [String, nil]
#
# @!attribute [rw] ip
#   @return [String, nil]
#
# @!attribute [rw] is_proxy
#   @return [Boolean, nil]
#
# @!attribute [rw] latitude
#   @return [Float, nil]
#
# @!attribute [rw] longitude
#   @return [Float, nil]
#
# @!attribute [rw] region_name
#   @return [String, nil]
#
# @!attribute [rw] time_zone
#   @return [String, nil]
#
# @!attribute [rw] zip_code
#   @return [String, nil]
GetIpGeolocation = Struct.new(
  :as,
  :asn,
  :city_name,
  :country_code,
  :country_name,
  :ip,
  :is_proxy,
  :latitude,
  :longitude,
  :region_name,
  :time_zone,
  :zip_code,
  keyword_init: true
)

# Match filter for GetIpGeolocation#load (any subset of GetIpGeolocation fields).
#
# @!attribute [rw] as
#   @return [String, nil]
#
# @!attribute [rw] asn
#   @return [String, nil]
#
# @!attribute [rw] city_name
#   @return [String, nil]
#
# @!attribute [rw] country_code
#   @return [String, nil]
#
# @!attribute [rw] country_name
#   @return [String, nil]
#
# @!attribute [rw] ip
#   @return [String, nil]
#
# @!attribute [rw] is_proxy
#   @return [Boolean, nil]
#
# @!attribute [rw] latitude
#   @return [Float, nil]
#
# @!attribute [rw] longitude
#   @return [Float, nil]
#
# @!attribute [rw] region_name
#   @return [String, nil]
#
# @!attribute [rw] time_zone
#   @return [String, nil]
#
# @!attribute [rw] zip_code
#   @return [String, nil]
GetIpGeolocationLoadMatch = Struct.new(
  :as,
  :asn,
  :city_name,
  :country_code,
  :country_name,
  :ip,
  :is_proxy,
  :latitude,
  :longitude,
  :region_name,
  :time_zone,
  :zip_code,
  keyword_init: true
)

