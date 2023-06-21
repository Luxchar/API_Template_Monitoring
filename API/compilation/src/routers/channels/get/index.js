"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.get = void 0;
const channels_get_1 = require("./channels.get");
const channels_messages_get_1 = require("./channels.messages.get");
const channels_created_at_get_1 = require("./channels.created_at.get");
const channels_updated_at_get_1 = require("./channels.updated_at.get");
exports.get = {
    channel: channels_get_1.getChannel,
    messages: channels_messages_get_1.getMessages,
    created_at: channels_created_at_get_1.getChannelCreatedAt,
    updated_at: channels_updated_at_get_1.getChannelUpdatedAt
};
