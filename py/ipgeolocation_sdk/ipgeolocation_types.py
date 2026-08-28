# Typed models for the IpGeolocation SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Field/param types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Do not edit by hand.
#
# These are TypedDicts, not dataclasses: the SDK ops return/accept plain dicts
# at runtime, and a TypedDict IS a dict shape, so the types match the runtime.
# Optional (req:false) keys are modelled as TypedDict key-optionality
# (total=False), split into a required base + total=False subclass when a type
# has both required and optional keys.

from __future__ import annotations

from typing import TypedDict, Any


class GetIpGeolocation(TypedDict, total=False):
    asn: str
    city_name: str
    country_code: str
    country_name: str
    ip: str
    is_proxy: bool
    latitude: float
    longitude: float
    region_name: str
    time_zone: str
    zip_code: str


class GetIpGeolocationLoadMatch(TypedDict, total=False):
    format: str
    ip: str
    key: str
    lang: str
