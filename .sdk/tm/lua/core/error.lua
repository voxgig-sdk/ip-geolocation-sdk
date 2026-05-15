-- IpGeolocation SDK error

local IpGeolocationError = {}
IpGeolocationError.__index = IpGeolocationError


function IpGeolocationError.new(code, msg, ctx)
  local self = setmetatable({}, IpGeolocationError)
  self.is_sdk_error = true
  self.sdk = "IpGeolocation"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function IpGeolocationError:error()
  return self.msg
end


function IpGeolocationError:__tostring()
  return self.msg
end


return IpGeolocationError
