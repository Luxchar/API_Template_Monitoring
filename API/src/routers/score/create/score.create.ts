import express from "express"
import DB from "../../../database"
import { RouteResponse, Status } from "../../controller"
import UTILS from "../../../utils"
import Score from "../../../database/models/Score"

export const createScore = async (req: express.Request, res: express.Response) => { // Get a user
    try {
        const {user_id, score} = req.body

        // if user_id badly formatted
        if(!user_id || user_id.length < UTILS.CONSTANTS.USER.ID.MIN_LENGTH || user_id.length > UTILS.CONSTANTS.USER.ID.MAX_LENGTH || isNaN(parseInt(user_id))) throw "Badly formatted"

        // get user
        const User = await Score.findOne({where: {id: user_id}})
        if(!User) throw "User not found"

        const newScore = await Score.create({
            user_id: user_id,
            score: score,
            username: User.username
        })

        newScore.save()

        res.json(
            new RouteResponse()
                .setStatus(Status.success)
                .setMessage(`User Score saved`)
                .setData(newScore)
        )
    }

    catch(err) {
        res.status(400)
        res.json(
            new RouteResponse()
                .setStatus(Status.error)
                .setMessage(err as string)
        )
    }
}