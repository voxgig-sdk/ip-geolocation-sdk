
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { IpGeolocationSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await IpGeolocationSDK.test()
    equal(null !== testsdk, true)
  })

})
