package core

type IpGeolocationError struct {
	IsIpGeolocationError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewIpGeolocationError(code string, msg string, ctx *Context) *IpGeolocationError {
	return &IpGeolocationError{
		IsIpGeolocationError: true,
		Sdk:              "IpGeolocation",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *IpGeolocationError) Error() string {
	return e.Msg
}
