import {getUserbyToken} from "./users.token.get"
import {getUserbyID} from "./users.id.get"
import {getUsername} from "./users.username.get"
import {getUpdatedAt} from "./users.updated_at.get"
import {getCreatedAt} from "./users.created_at.get"
import {getAvatar} from "./users.avatar.get"
import {getFriends} from "./users.friends.get"
import {getFriendsRequestsReceived} from "./users.friends_requests_received.get"
import {getFriendsRequestsSent} from "./users.friends_requests_sent.get"
import {getLastConnection} from "./users.last_connection.get"

export const get = {
    UserbyToken: getUserbyToken,
    UserbyID: getUserbyID,
    Username: getUsername,
    UpdatedAt: getUpdatedAt,
    CreatedAt: getCreatedAt,
    Avatar: getAvatar,
    Friends: getFriends,
    FriendsRequestsReceived: getFriendsRequestsReceived,
    FriendsRequestsSent: getFriendsRequestsSent,
    LastConnection: getLastConnection,
}