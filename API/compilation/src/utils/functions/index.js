"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.FUNCTIONS = void 0;
const find_1 = require("./find");
class FUNCTIONS {
}
exports.FUNCTIONS = FUNCTIONS;
FUNCTIONS.FIND = {
    CHANNEL: {
        id: find_1.findChannelID
    },
    USER: {
        token: find_1.findUserbyToken,
        id: find_1.findUserbyID,
        friend: find_1.findFriendbyUser
    }
};
FUNCTIONS.REMOVE_PRIVATE_INFO_USER = (user) => {
    user.password = undefined;
    user.token = undefined;
    user.friends_requests_received = undefined;
    user.friends_requests_sent = undefined;
    user.blocked = undefined;
    user.servers = undefined;
    user.channels = undefined;
    user.friends = undefined;
    return user;
};
FUNCTIONS.REMOVE_OVERFLOW_INFO_CHANNEL = (channel) => {
    channel.members = undefined;
    channel.messages = undefined;
    channel.permissions = undefined;
    return channel;
};
