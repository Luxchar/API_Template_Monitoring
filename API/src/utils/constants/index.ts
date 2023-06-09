import { USER_PROPERTIES } from './users'
import { MESSAGE_PROPERTIES } from './messages'
import { CHANNEL_PROPERTIES} from './channels'
import { SERVER_PROPERTIES } from './servers'
import { ROLE_PROPERTIES } from './roles'
import { API } from './api'
import { INVITES_PROPERTIES } from './invites/index';

export class CONSTANTS {
    static USER = USER_PROPERTIES
    static MESSAGE = MESSAGE_PROPERTIES
    static CHANNEL = CHANNEL_PROPERTIES
    static SERVER = SERVER_PROPERTIES
    static ROLE = ROLE_PROPERTIES
    static INVITE = INVITES_PROPERTIES
    static API = API
}
