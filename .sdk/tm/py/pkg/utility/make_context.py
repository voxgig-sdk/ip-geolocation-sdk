# IpGeolocation SDK utility: make_context

from projectname_sdk.core.context import IpGeolocationContext


def make_context_util(ctxmap, basectx):
    return IpGeolocationContext(ctxmap, basectx)
