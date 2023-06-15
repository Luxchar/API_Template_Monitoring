import { ErrorRouter } from "../errors/"
import { UserRouter } from "../users"
import { ScoreRouter } from "../score"

export const Intercept = { // Intercept the requests and responses and route them to the right function, this is the main router and all the other routers are children of this router
    ROOT: {
        path: "/",
        API: { // API ROUTES
            path: "api", // CLIENT SIDE ROUTES

            Users: UserRouter, // USER ROUTES
            Score: ScoreRouter, // SCORE ROUTES
    
        },
        
        // ERROR HANDLER OF WRONG ROUTES // PATH * ALWAYS AT THE END OF THE ROUTER OBJECT 
    
        Errors  : {
            path: "*",
            E404: ErrorRouter
        }
    }

}
