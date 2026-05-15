# IpGeolocation SDK utility: make_context
require_relative '../core/context'
module IpGeolocationUtilities
  MakeContext = ->(ctxmap, basectx) {
    IpGeolocationContext.new(ctxmap, basectx)
  }
end
