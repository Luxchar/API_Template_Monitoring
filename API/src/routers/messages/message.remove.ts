import express from "express"
import { RouteResponse, Status } from "../controller"
import DB from "../../database"
import Emitter from "../../client/emitter.client"
import UTILS from "../../utils"

export const remove = async (req: express.Request, res: express.Response) => { // Delete a message from a channel
    try {
        const {channel_id, message_id} = req.params
        const token = req.token

        if (!channel_id || !token || !message_id || channel_id.length < UTILS.CONSTANTS.CHANNEL.ID.MIN_LENGTH || channel_id.length > UTILS.CONSTANTS.CHANNEL.ID.MAX_LENGTH ||
            message_id.length < UTILS.CONSTANTS.MESSAGE.ID.MIN_LENGTH || message_id.length > UTILS.CONSTANTS.MESSAGE.ID.MAX_LENGTH ||
            token.length < UTILS.CONSTANTS.USER.TOKEN.MAX_LENGTH || token.length > UTILS.CONSTANTS.USER.TOKEN.MIN_LENGTH || isNaN(parseInt(message_id)) || isNaN(parseInt(channel_id))) throw "Badly formatted"

        var User = await UTILS.FUNCTIONS.FIND.USER.token(token) // Find the user

        var Channel = await DB.channels.find.id(parseInt(channel_id))
        if(!Channel) throw "Channel not found"

        // Check if the message is not his own message
        var Message = await DB.messages.find.id(message_id)
        if(!Message) throw "Message not found"

        
        // Delete the message
        var Message = await DB.messages.find.id(message_id)
        if(!Message) throw "Message not found"
        await Message.deleteOne()

        Emitter.emit("deleteMessage", Message)

        res.json(
            new RouteResponse()
                .setStatus(Status.success)
                .setMessage(`Message deleted`)
                .setData(Message)
        )
    }

    catch (err) {
        res.status(400)
        res.json(
            new RouteResponse()
                .setStatus(Status.error)
                .setMessage(err as string)
        )
    }
}