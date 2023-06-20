

import { ChannelsIntercept } from "./intercept.channels";

export const ChannelsRouter = {
    path: "/channel",

    Create: {
        Group: {
            name: "createGroup",
            method: "GET",
            socketing: false,
            description: "Create a group channel",
            path: "/group/:friend_id_1/:friend_id_2",
            params: ["token", "friend_id_1", "friend_id_2"],
            res: ChannelsIntercept.create.group
        }
    },

    get : {
        path: "/get",
        Channel : {
            name: "getChannel",
            method: "GET",
            socketing: false,
            description: "Get a channel",
            path: "/:channel_id",
            params: ["token", "channel_id"],
            res: ChannelsIntercept.get.channel
        },
        Updated_at : {
            name: "getUpdated_at",
            method: "GET",
            socketing: false,
            description: "Get updated_at from a channel",
            path: "/updated_at/:channel_id",
            params: ["token", "channel_id"],
            res: ChannelsIntercept.get.updated_at
        },
        Created_at : {
            name: "getCreated_at",
            method: "GET",
            socketing: false,
            description: "Get created_at from a channel",
            path: "/created_at/:channel_id",
            params: ["token", "channel_id"],
            res: ChannelsIntercept.get.created_at
        },
        Messages : {
            name: "getMessages",
            method: "GET",
            socketing: false,
            description: "Get messages from a channel",
            path: "/messages/:channel_id/:limit",
            params: ["token", "channel_id", "limit"],
            res: ChannelsIntercept.get.messages
        },
    },
}