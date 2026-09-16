# IpGeolocation SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/ratelimit_feature'
require_relative 'feature/retry_feature'
require_relative 'feature/test_feature'
require_relative 'feature/timeout_feature'


module IpGeolocationFeatures
  def self.make_feature(name)
    case name
    when "base"
      IpGeolocationBaseFeature.new
    when "ratelimit"
      IpGeolocationRatelimitFeature.new
    when "retry"
      IpGeolocationRetryFeature.new
    when "test"
      IpGeolocationTestFeature.new
    when "timeout"
      IpGeolocationTimeoutFeature.new
    else
      IpGeolocationBaseFeature.new
    end
  end
end
