"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.ScoreRouter = void 0;
const intercept_score_1 = require("./intercept.score");
exports.ScoreRouter = {
    path: "/score",
    Get: {
        method: "GET",
        path: "/get",
        res: intercept_score_1.ScoreIntercept.get
    },
    Create: {
        method: "GET",
        path: "/create/:user_id/:score",
        res: intercept_score_1.ScoreIntercept.create
    }
};
