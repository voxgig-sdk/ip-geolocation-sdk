# IpGeolocation SDK utility: feature_add
module IpGeolocationUtilities
  FeatureAdd = ->(ctx, f) {
    ctx.client.features << f
  }
end
