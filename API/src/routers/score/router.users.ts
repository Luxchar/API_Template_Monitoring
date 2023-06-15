import { ScoreIntercept } from "./intercept.score"

export const ScoreRouter = {
    path: "/score",

    Get: {
        path: "/get",
        res: ScoreIntercept.get
    },

    Create: {
        path: "/create",
        res: ScoreIntercept.create
    }
}