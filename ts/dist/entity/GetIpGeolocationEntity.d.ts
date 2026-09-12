import { IpGeolocationEntityBase } from '../IpGeolocationEntityBase';
import type { IpGeolocationSDK } from '../IpGeolocationSDK';
import type { Control } from '../types';
import type { GetIpGeolocation, GetIpGeolocationLoadMatch } from '../IpGeolocationTypes';
declare class GetIpGeolocationEntity extends IpGeolocationEntityBase<GetIpGeolocation> {
    constructor(client: IpGeolocationSDK, entopts: any);
    make(this: GetIpGeolocationEntity): GetIpGeolocationEntity;
    load(this: any, reqmatch?: GetIpGeolocationLoadMatch, ctrl?: Control): Promise<GetIpGeolocationEntity>;
}
export { GetIpGeolocationEntity };
