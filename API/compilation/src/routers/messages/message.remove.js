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
exports.remove = void 0;
const controller_1 = require("../controller");
const database_1 = __importDefault(require("../../database"));
const emitter_client_1 = __importDefault(require("../../client/emitter.client"));
const utils_1 = __importDefault(require("../../utils"));
const remove = (req, res) => __awaiter(void 0, void 0, void 0, function* () {
    try {
        const { channel_id, message_id } = req.params;
        const token = req.token;
        if (!channel_id || !token || !message_id || channel_id.length < utils_1.default.CONSTANTS.CHANNEL.ID.MIN_LENGTH || channel_id.length > utils_1.default.CONSTANTS.CHANNEL.ID.MAX_LENGTH ||
            message_id.length < utils_1.default.CONSTANTS.MESSAGE.ID.MIN_LENGTH || message_id.length > utils_1.default.CONSTANTS.MESSAGE.ID.MAX_LENGTH ||
            token.length < utils_1.default.CONSTANTS.USER.TOKEN.MAX_LENGTH || token.length > utils_1.default.CONSTANTS.USER.TOKEN.MIN_LENGTH || isNaN(parseInt(message_id)) || isNaN(parseInt(channel_id)))
            throw "Badly formatted";
        var User = yield utils_1.default.FUNCTIONS.FIND.USER.token(token); // Find the user
        var Channel = yield database_1.default.channels.find.id(parseInt(channel_id));
        if (!Channel)
            throw "Channel not found";
        // Check if the message is not his own message
        var Message = yield database_1.default.messages.find.id(message_id);
        if (!Message)
            throw "Message not found";
        // Delete the message
        var Message = yield database_1.default.messages.find.id(message_id);
        if (!Message)
            throw "Message not found";
        yield Message.deleteOne();
        emitter_client_1.default.emit("deleteMessage", Message);
        res.json(new controller_1.RouteResponse()
            .setStatus(controller_1.Status.success)
            .setMessage(`Message deleted`)
            .setData(Message));
    }
    catch (err) {
        res.status(400);
        res.json(new controller_1.RouteResponse()
            .setStatus(controller_1.Status.error)
            .setMessage(err));
    }
});
exports.remove = remove;
