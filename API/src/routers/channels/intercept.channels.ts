import { create } from "./create"
import { get } from "./get"

export const ChannelsIntercept = {
    create: {
        group: create.channel,
    },
    get: {
        channel: get.channel,
        messages: get.messages,
        created_at: get.created_at,
        updated_at: get.updated_at,
    }
}