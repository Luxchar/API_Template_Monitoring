import {findUserbyToken, findUserbyID, findFriendbyUser, findChannelID} from "./find"

export class FUNCTIONS {    
    static FIND = {
        CHANNEL: {
            id: findChannelID
        },

        USER: {
            token: findUserbyToken,
            id: findUserbyID,
            friend: findFriendbyUser
        }
    }

    static REMOVE_PRIVATE_INFO_USER = (user: any) => {
        user.password = undefined
        user.token = undefined
        user.friends_requests_received = undefined
        user.friends_requests_sent = undefined
        user.blocked = undefined
        user.servers = undefined
        user.channels = undefined
        user.friends = undefined
        return user
    }
    
    static REMOVE_OVERFLOW_INFO_CHANNEL = (channel: any) => {
        channel.members = undefined
        channel.messages = undefined
        channel.permissions = undefined
        return channel
    }
}