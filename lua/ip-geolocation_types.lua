-- Typed models for the IpGeolocation SDK (LuaLS annotations).
--
-- GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
-- params (op.<name>.points[].args.params[]). Field/param types come from the
-- canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
-- @voxgig/apidef VALID_CANON). Annotations only — no runtime effect. Do not
-- edit by hand.

---@class GetIpGeolocation
---@field as? string
---@field asn? string
---@field city_name? string
---@field country_code? string
---@field country_name? string
---@field ip? string
---@field is_proxy? boolean
---@field latitude? number
---@field longitude? number
---@field region_name? string
---@field time_zone? string
---@field zip_code? string

---@class GetIpGeolocationLoadMatch
---@field format? string
---@field ip? string
---@field key? string
---@field lang? string

local M = {}

return M
