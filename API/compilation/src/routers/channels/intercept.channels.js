"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.ChannelsIntercept = void 0;
const create_1 = require("./create");
const get_1 = require("./get");
exports.ChannelsIntercept = {
    create: {
        group: create_1.create.channel,
    },
    get: {
        channel: get_1.get.channel,
        messages: get_1.get.messages,
        created_at: get_1.get.created_at,
        updated_at: get_1.get.updated_at,
    }
};
