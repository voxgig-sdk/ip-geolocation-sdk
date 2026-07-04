# Typed models for the IpGeolocation SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Field/param types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Do not edit by hand.

from __future__ import annotations

from dataclasses import dataclass
from typing import Optional, Any


@dataclass
class GetIpGeolocation:
    asn: Optional[str] = None
    city_name: Optional[str] = None
    country_code: Optional[str] = None
    country_name: Optional[str] = None
    ip: Optional[str] = None
    is_proxy: Optional[bool] = None
    latitude: Optional[float] = None
    longitude: Optional[float] = None
    region_name: Optional[str] = None
    time_zone: Optional[str] = None
    zip_code: Optional[str] = None


@dataclass
class GetIpGeolocationLoadMatch:
    asn: Optional[str] = None
    city_name: Optional[str] = None
    country_code: Optional[str] = None
    country_name: Optional[str] = None
    ip: Optional[str] = None
    is_proxy: Optional[bool] = None
    latitude: Optional[float] = None
    longitude: Optional[float] = None
    region_name: Optional[str] = None
    time_zone: Optional[str] = None
    zip_code: Optional[str] = None

