import express from "express"
import { RouteResponse, Status } from "../controller"
import Logger from "../../client/logger.client"
import DB from "../../database"
import Emitter from "../../client/emitter.client"
import { IMessageModel } from "../../database/models/Message"
import { v4, v5 } from "uuid"
import UTILS from "../../utils"

export const send = async (req: express.Request, res: express.Response) => { // Send a message to a channel
    try {
        const {message} = req.body
        const {channel_id} = req.params
        const token = req.token

        if (!channel_id || !token || !message || channel_id.length < UTILS.CONSTANTS.CHANNEL.ID.MIN_LENGTH || channel_id.length > UTILS.CONSTANTS.CHANNEL.ID.MAX_LENGTH ||
            token.length > UTILS.CONSTANTS.USER.TOKEN.MAX_LENGTH || token.length < UTILS.CONSTANTS.USER.TOKEN.MIN_LENGTH || isNaN(parseInt(channel_id))) throw "Badly formatted"

        // Check if the user is banned

        // Check if the user is muted
        var User = await UTILS.FUNCTIONS.FIND.USER.token(token) // Find the user
        if (!User) throw "User not found"
        
        // check length of message
        if (User.premium) {
            if (message.length > UTILS.CONSTANTS.MESSAGE.PROPERTIES.MAX_MESSAGE_LENGTH_PREMIUM || message.length < UTILS.CONSTANTS.MESSAGE.PROPERTIES.MIN_MESSAGE_LENGTH) throw "Message is too long or too short"
        }
        else {
            if (message.length > UTILS.CONSTANTS.MESSAGE.PROPERTIES.MAX_MESSAGE_LENGTH || message.length < UTILS.CONSTANTS.MESSAGE.PROPERTIES.MIN_MESSAGE_LENGTH) throw "Message is too long or too short"
        }

        var Channel = await DB.channels.find.id(parseInt(channel_id))
        console.log(Channel)
        if(!Channel) throw "Channel not found"
        
        //if (!UTILS.FUNCTIONS.CHECK.CHANNEL.PERMISSIONS(User, Channel, UTILS.CONSTANTS.CHANNEL.PERMISSIONS.MESSAGE.SEND)) throw "You do not have permission to send messages in this channel"

        var Message = await DB.messages.create({ // Create the message
            message_id: Date.now() + Math.floor(Math.random() * 1000),
            channel_id: parseInt(channel_id),
            user_id: User.user_id,
            message,
            created_at: new Date().toLocaleString()
        })

        if(!Message) throw "Message not created"
        
        await Message.save() // Save the message to the database

        Emitter.emit("sendMessage", Message) // Emit the message to the client
        res.json(
            new RouteResponse()
                .setStatus(Status.success)
                .setMessage(`Message sent`)
                .setData(Message)
        )
    }

    catch (err) {
        res.status(400)
        console.log(err)
        res.json(
            new RouteResponse()
                .setStatus(Status.error)
                .setMessage(err as string)
        )
    }
}