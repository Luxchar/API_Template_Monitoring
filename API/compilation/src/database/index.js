"use strict";
var __createBinding = (this && this.__createBinding) || (Object.create ? (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    var desc = Object.getOwnPropertyDescriptor(m, k);
    if (!desc || ("get" in desc ? !m.__esModule : desc.writable || desc.configurable)) {
      desc = { enumerable: true, get: function() { return m[k]; } };
    }
    Object.defineProperty(o, k2, desc);
}) : (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    o[k2] = m[k];
}));
var __exportStar = (this && this.__exportStar) || function(m, exports) {
    for (var p in m) if (p !== "default" && !Object.prototype.hasOwnProperty.call(exports, p)) __createBinding(exports, m, p);
};
Object.defineProperty(exports, "__esModule", { value: true });
const messages_1 = require("./messages/");
const users_1 = require("./users");
const channels_1 = require("./channels");
__exportStar(require("./interface.database"), exports);
exports.default = {
    users: {
        create: users_1.UserCreate,
        log: users_1.UserConnect,
        get: {
            one: users_1.UserGetOne,
        },
        find: {
            username: users_1.UserFindByUsername,
            token: users_1.UserFindByToken,
            id: users_1.UserFindByID,
            many: users_1.UserGetMany
        },
        connect: users_1.UserConnect
    },
    messages: {
        create: messages_1.MessageCreate,
        find: {
            id: messages_1.MessageFindOne,
            user: messages_1.MessageFindUser,
            channel: messages_1.MessageFindChannel
        },
        delete: messages_1.MessageDelete
    },
    channels: {
        create: channels_1.ChannelCreate,
        find: {
            id: channels_1.ChannelFindOne,
            messages: channels_1.GetXNumberofMessages,
            userInChannel: channels_1.ChannelFindUser,
            many: channels_1.ChannelGetMany
        },
        delete: channels_1.ChannelDelete
    }
};
