# ProjectName SDK exists test

import pytest
from ipgeolocation_sdk import IpGeolocationSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = IpGeolocationSDK.test(None, None)
        assert testsdk is not None
