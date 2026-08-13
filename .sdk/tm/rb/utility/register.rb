# IpGeolocation SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'graphql'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

IpGeolocationUtility.registrar = ->(u) {
  u.clean = IpGeolocationUtilities::Clean
  u.done = IpGeolocationUtilities::Done
  u.make_error = IpGeolocationUtilities::MakeError
  u.feature_add = IpGeolocationUtilities::FeatureAdd
  u.feature_hook = IpGeolocationUtilities::FeatureHook
  u.feature_init = IpGeolocationUtilities::FeatureInit
  u.fetcher = IpGeolocationUtilities::Fetcher
  u.make_fetch_def = IpGeolocationUtilities::MakeFetchDef
  u.make_context = IpGeolocationUtilities::MakeContext
  u.make_options = IpGeolocationUtilities::MakeOptions
  u.make_request = IpGeolocationUtilities::MakeRequest
  u.make_response = IpGeolocationUtilities::MakeResponse
  u.make_result = IpGeolocationUtilities::MakeResult
  u.make_point = IpGeolocationUtilities::MakePoint
  u.make_spec = IpGeolocationUtilities::MakeSpec
  u.make_url = IpGeolocationUtilities::MakeUrl
  u.param = IpGeolocationUtilities::Param
  u.prepare_auth = IpGeolocationUtilities::PrepareAuth
  u.prepare_body = IpGeolocationUtilities::PrepareBody
  u.prepare_headers = IpGeolocationUtilities::PrepareHeaders
  u.prepare_method = IpGeolocationUtilities::PrepareMethod
  u.prepare_params = IpGeolocationUtilities::PrepareParams
  u.prepare_path = IpGeolocationUtilities::PreparePath
  u.prepare_query = IpGeolocationUtilities::PrepareQuery
  u.graphql_body = IpGeolocationUtilities::GraphqlBody
  u.graphql_errors = IpGeolocationUtilities::GraphqlErrors
  u.result_basic = IpGeolocationUtilities::ResultBasic
  u.result_body = IpGeolocationUtilities::ResultBody
  u.result_headers = IpGeolocationUtilities::ResultHeaders
  u.transform_request = IpGeolocationUtilities::TransformRequest
  u.transform_response = IpGeolocationUtilities::TransformResponse
}
