import { getChannel } from "./channels.get";
import { getMessages } from "./channels.messages.get";
import { getChannelCreatedAt } from "./channels.created_at.get";
import { getChannelUpdatedAt } from "./channels.updated_at.get";

export const get = {
    channel: getChannel,
    messages: getMessages,
    created_at: getChannelCreatedAt,
    updated_at: getChannelUpdatedAt
}