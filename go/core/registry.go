package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewGetIpGeolocationEntityFunc func(client *IpGeolocationSDK, entopts map[string]any) IpGeolocationEntity

