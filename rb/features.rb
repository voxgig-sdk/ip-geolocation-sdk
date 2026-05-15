# IpGeolocation SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module IpGeolocationFeatures
  def self.make_feature(name)
    case name
    when "base"
      IpGeolocationBaseFeature.new
    when "test"
      IpGeolocationTestFeature.new
    else
      IpGeolocationBaseFeature.new
    end
  end
end
