import { ErrorRouter } from "../errors/"
import { UserRouter } from "../users"
import { ChannelsRouter } from "../channels"
import { MessagesRouter } from "../messages"
import { ScoreRouter } from "../score/router.score"

export const Intercept = { // Intercept the requests and responses and route them to the right function, this is the main router and all the other routers are children of this router
    ROOT: {
        path: "/",
        API: { // API ROUTES
            path: "api", // CLIENT SIDE ROUTES

            Users: UserRouter, // USER ROUTES
            Score: ScoreRouter, // SCORE ROUTES
            Channels: ChannelsRouter, // CHANNEL ROUTES
            Messages: MessagesRouter // MESSAGE ROUTES
    
        },
        
        // ERROR HANDLER OF WRONG ROUTES // PATH * ALWAYS AT THE END OF THE ROUTER OBJECT 
    
        Errors  : {
            path: "*",
            E404: ErrorRouter
        }
    }

}
