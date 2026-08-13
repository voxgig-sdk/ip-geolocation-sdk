# IpGeolocation SDK feature factory

from ipgeolocation_sdk.feature.base_feature import IpGeolocationBaseFeature
from ipgeolocation_sdk.feature.test_feature import IpGeolocationTestFeature


def _make_feature(name):
    features = {
        "base": lambda: IpGeolocationBaseFeature(),
        "test": lambda: IpGeolocationTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
