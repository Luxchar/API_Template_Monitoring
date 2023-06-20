import { MessageCreate, MessageFindOne, MessageDelete, MessageFindUser, MessageFindChannel} from './messages/'
import { UserCreate, UserConnect, UserGetOne, UserGetMany, UserFindByUsername, UserFindByToken, UserFindByID} from './users'
import { ChannelCreate, ChannelFindOne, ChannelDelete, GetXNumberofMessages, ChannelFindUser, ChannelGetMany } from './channels'

export * from './interface.database'

export default {
    users: {
        create: UserCreate,
        log: UserConnect,
        get: {
            one: UserGetOne,
        },
        find: {
            username: UserFindByUsername,
            token: UserFindByToken,
            id: UserFindByID,
            many: UserGetMany
        },
        connect: UserConnect
    },
    messages: {
        create: MessageCreate,
        find: {
            id: MessageFindOne,
            user: MessageFindUser,
            channel: MessageFindChannel
        },
        delete: MessageDelete
    },
    channels: {
        create: ChannelCreate,
        find: {
            id: ChannelFindOne,
            messages: GetXNumberofMessages,
            userInChannel: ChannelFindUser,
            many: ChannelGetMany
        },
        delete: ChannelDelete            
    }
}