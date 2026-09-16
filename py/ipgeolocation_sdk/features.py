# IpGeolocation SDK feature factory

from ipgeolocation_sdk.feature.base_feature import IpGeolocationBaseFeature
from ipgeolocation_sdk.feature.ratelimit_feature import IpGeolocationRatelimitFeature
from ipgeolocation_sdk.feature.retry_feature import IpGeolocationRetryFeature
from ipgeolocation_sdk.feature.test_feature import IpGeolocationTestFeature
from ipgeolocation_sdk.feature.timeout_feature import IpGeolocationTimeoutFeature


_FEATURES = {
    "base": lambda: IpGeolocationBaseFeature(),
    "ratelimit": lambda: IpGeolocationRatelimitFeature(),
    "retry": lambda: IpGeolocationRetryFeature(),
    "test": lambda: IpGeolocationTestFeature(),
    "timeout": lambda: IpGeolocationTimeoutFeature(),
}


def _make_feature(name):
    factory = _FEATURES.get(name)
    if factory is not None:
        return factory()
    return _FEATURES["base"]()


# True when this SDK was generated with the named feature class - the
# constructor's tolerance for extend-carried features reads this (an
# active name with no generated class must not become a BaseFeature
# stray when an extend instance carries it).
def _has_feature(name):
    return name in _FEATURES
