import express from "express"
import { RouteResponse, Status } from "../../controller"
import Emitter from "../../../client/emitter.client"
import Logger from "../../../client/logger.client"
import DB from "../../../database"
import UTILS from "../../../utils"

export const create_channel = async (req: express.Request, res: express.Response) => { // Create a private channel
    try {
        const {} = req.params
        const token = req.token
    
        if (!token || token.length < UTILS.CONSTANTS.USER.TOKEN.MIN_LENGTH || token.length > UTILS.CONSTANTS.USER.TOKEN.MAX_LENGTH) throw "Badly formatted"
    
        var User = await UTILS.FUNCTIONS.FIND.USER.token(token)

        if (User.channels.length >= UTILS.CONSTANTS.CHANNEL.MAX_PRIVATE_CHANNELS) throw "You have reached the maximum number of private channels"

        var Channel = await DB.channels.create({
            channel_id: Date.now() + Math.floor(Math.random() * 1000),
            updated_at: new Date().toLocaleString(),
            created_at: new Date().toLocaleString(),
        })

        if(!Channel) throw "Failed to create channel"

        User.channels.push(Channel.channel_id) // save the channel id to the user
        await User.save() // Save the user

        Emitter.emit("channel.create", Channel) // Emit the event to the client
        Emitter.emit("channel.join", Channel, User)

        res.json(
            new RouteResponse()
                .setStatus(Status.success)
                .setMessage("Channel created")
                .setData(Channel)
        )
    }

    catch (err) {
        res.status(400)
        res.json(
            new RouteResponse()
                .setStatus(Status.error)
                .setMessage(err as string)
        )
        return
    }
}
