"use strict";
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.create_channel = void 0;
const controller_1 = require("../../controller");
const emitter_client_1 = __importDefault(require("../../../client/emitter.client"));
const database_1 = __importDefault(require("../../../database"));
const utils_1 = __importDefault(require("../../../utils"));
const create_channel = (req, res) => __awaiter(void 0, void 0, void 0, function* () {
    try {
        const {} = req.params;
        const token = req.token;
        if (!token || token.length < utils_1.default.CONSTANTS.USER.TOKEN.MIN_LENGTH || token.length > utils_1.default.CONSTANTS.USER.TOKEN.MAX_LENGTH)
            throw "Badly formatted";
        var User = yield utils_1.default.FUNCTIONS.FIND.USER.token(token);
        if (User.channels.length >= utils_1.default.CONSTANTS.CHANNEL.MAX_PRIVATE_CHANNELS)
            throw "You have reached the maximum number of private channels";
        var Channel = yield database_1.default.channels.create({
            channel_id: Date.now() + Math.floor(Math.random() * 1000),
            updated_at: new Date().toLocaleString(),
            created_at: new Date().toLocaleString(),
        });
        if (!Channel)
            throw "Failed to create channel";
        User.channels.push(Channel.channel_id); // save the channel id to the user
        yield User.save(); // Save the user
        emitter_client_1.default.emit("channel.create", Channel); // Emit the event to the client
        emitter_client_1.default.emit("channel.join", Channel, User);
        res.json(new controller_1.RouteResponse()
            .setStatus(controller_1.Status.success)
            .setMessage("Channel created")
            .setData(Channel));
    }
    catch (err) {
        res.status(400);
        res.json(new controller_1.RouteResponse()
            .setStatus(controller_1.Status.error)
            .setMessage(err));
        return;
    }
});
exports.create_channel = create_channel;
