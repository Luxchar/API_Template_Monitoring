import express from "express"
import DB from "../../../database"
import { RouteResponse, Status } from "../../controller"
import UTILS from "../../../utils"
import Score from "../../../database/models/Score"
import User from "../../../database/models/User"

export const createScore = async (req: express.Request, res: express.Response) => { // Get a user
    try {
        // url looking like: /score/create/1/100

        // get user_id and score from url
        const user_id = req.params.user_id
        const score = req.params.score  

        // if user_id badly formatted
        if(!user_id || user_id.length < UTILS.CONSTANTS.USER.ID.MIN_LENGTH || user_id.length > UTILS.CONSTANTS.USER.ID.MAX_LENGTH || isNaN(parseInt(user_id))) throw "Badly formatted"

        // get user
        const user = await User.findOne({user_id: user_id})
        if(!user) throw "user not found"

        const newScore = await Score.create({
            user_id: user_id,
            score: score,
            username: user.username
        })

        newScore.save()

        res.json(
            new RouteResponse()
                .setStatus(Status.success)
                .setMessage(`user Score saved`)
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