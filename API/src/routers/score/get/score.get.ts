import express from "express"
import DB from "../../../database"
import { RouteResponse, Status } from "../../controller"
import UTILS from "../../../utils"
import Score from "../../../database/models/Score"

export const getScore = async (req: express.Request, res: express.Response) => { // Get a user
    try {
        const score = await Score.find() 

        res.json(
            new RouteResponse()
                .setStatus(Status.success)
                .setMessage(`User Scores found`)
                .setData(score)
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