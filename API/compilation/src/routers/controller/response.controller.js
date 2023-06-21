"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Intercept = void 0;
const errors_1 = require("../errors/");
const users_1 = require("../users");
const channels_1 = require("../channels");
const messages_1 = require("../messages");
const router_score_1 = require("../score/router.score");
exports.Intercept = {
    ROOT: {
        path: "/",
        API: {
            path: "api",
            Users: users_1.UserRouter,
            Score: router_score_1.ScoreRouter,
            Channels: channels_1.ChannelsRouter,
            Messages: messages_1.MessagesRouter // MESSAGE ROUTES
        },
        // ERROR HANDLER OF WRONG ROUTES // PATH * ALWAYS AT THE END OF THE ROUTER OBJECT 
        Errors: {
            path: "*",
            E404: errors_1.ErrorRouter
        }
    }
};
