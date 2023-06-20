import mongoose, {Document, Schema} from "mongoose"; 

export interface IChannel { // This is the interface for the channel in the database
    channel_id: number;
    updated_at: string;
    created_at: string;
}

export interface IChannelModel extends IChannel, Document {}

const ChannelSchema = new Schema({
    channel_id: { type: Number, required: true, unique: true, index: true },

    updated_at: { type: String, required: true, default: new Date().toLocaleString() },
    created_at: { type: String, required: true, default: new Date().toLocaleString() },
});

export default mongoose.model<IChannelModel>("Channel", ChannelSchema);