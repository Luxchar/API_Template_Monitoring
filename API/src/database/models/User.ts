import mongoose, {Document, Schema} from "mongoose";

export interface IUser { // This is the interface for the user in the database
    user_id: number;
    token: string;
    username: string;
    password: string;
    avatar?: string;
    friends_requests_sent?: number[];
    friends_requests_received?: number[];
    friends?: number[];
    
    last_connection?: string;
    updated_at?: string;
    created_at?: string;
}

export interface IUserModel extends IUser, Document {}

const UserSchema = new Schema({
    user_id: { type: Number, required: true, unique: true, index: true },
    token: { type: String, required: true, unique: true, index: true },
    username: { type: String, required: true, unique: false, index: true },
    password: { type: String, required: true },
    avatar: { type: String, required: false, default: null },

    last_connection: { type: String, required: true, default: new Date().toLocaleString() },
    updated_at: { type: String, required: true, default: new Date().toLocaleString() },
    created_at: { type: String, required: true, default: new Date().toLocaleString() },
});

export default mongoose.model<IUserModel>("User", UserSchema);