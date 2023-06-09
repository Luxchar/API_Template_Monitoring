import { update } from "./update"
import { userLogin, userRegister, userConnect } from "./connect"
import { get } from "./get"
import { friends } from "./friends"


export const UserIntercept = {
    register : userRegister,
    login : userLogin,
    connect : userConnect,

    get: {
        user: get.UserbyToken,
        username: get.Username,
        updated_at: get.UpdatedAt,
        created_at: get.CreatedAt,
        avatar: get.Avatar,
        friends: get.Friends,
        friends_requests_received: get.FriendsRequestsReceived,
        friends_requests_sent: get.FriendsRequestsSent,
        last_connection: get.LastConnection,
    },

    update : { 
        username: update.username,
        password: update.password,
        avatar: update.avatar,
        wallet_token: update.wallet_token,
        status: update.status,
        channels: update.channels,
        servers: update.servers
    },

    friends: {
        add: friends.add,
        remove: friends.remove
    }
}