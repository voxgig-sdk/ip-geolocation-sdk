
import { Context } from './Context'


class IpGeolocationError extends Error {

  isIpGeolocationError = true

  sdk = 'IpGeolocation'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  IpGeolocationError
}

