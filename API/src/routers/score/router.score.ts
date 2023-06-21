import { ScoreIntercept } from "./intercept.score"

export const ScoreRouter = {
    path: "/score",

    Get: {
        method: "GET",
        path: "/get",
        res: ScoreIntercept.get
    },

    Create: {
        method: "GET",
        path: "/create/:user_id/:score",
        res: ScoreIntercept.create
    }
}