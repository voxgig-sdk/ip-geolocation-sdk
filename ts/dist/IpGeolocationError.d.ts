import { Context } from './Context';
declare class IpGeolocationError extends Error {
    isIpGeolocationError: boolean;
    sdk: string;
    code: string;
    ctx: Context;
    status: number;
    get notFound(): boolean;
    constructor(code: string, msg: string, ctx: Context);
}
export { IpGeolocationError };
