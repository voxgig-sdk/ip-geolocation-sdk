# IpGeolocation SDK exists test

require "minitest/autorun"
require_relative "../IpGeolocation_sdk"

class ExistsTest < Minitest::Test
  def test_create_test_sdk
    testsdk = IpGeolocationSDK.test(nil, nil)
    assert !testsdk.nil?
  end
end
