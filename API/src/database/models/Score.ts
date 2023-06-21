import mongoose, {Document, Schema} from "mongoose";

export interface IScore { // This is the interface for the user in the database
    user_id: number;
    score: number;
    username: string;
    date: string;
}

export interface IScoreModel extends IScore, Document {}

const ScoreSchema = new Schema({
    user_id: { type: Number, required: true, unique: false, index: true },
    score: { type: Number, required: true, unique: false, index: true },
    username: { type: String, required: true, unique: false, index: true }
});

export default mongoose.model<IScoreModel>("Score", ScoreSchema);