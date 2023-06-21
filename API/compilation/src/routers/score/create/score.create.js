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
exports.createScore = void 0;
const controller_1 = require("../../controller");
const utils_1 = __importDefault(require("../../../utils"));
const Score_1 = __importDefault(require("../../../database/models/Score"));
const User_1 = __importDefault(require("../../../database/models/User"));
const createScore = (req, res) => __awaiter(void 0, void 0, void 0, function* () {
    try {
        // url looking like: /score/create/1/100
        // get user_id and score from url
        const user_id = req.params.user_id;
        const score = req.params.score;
        // if user_id badly formatted
        if (!user_id || user_id.length < utils_1.default.CONSTANTS.USER.ID.MIN_LENGTH || user_id.length > utils_1.default.CONSTANTS.USER.ID.MAX_LENGTH || isNaN(parseInt(user_id)))
            throw "Badly formatted";
        // get user
        const user = yield User_1.default.findOne({ user_id: user_id });
        if (!user)
            throw "user not found";
        const newScore = yield Score_1.default.create({
            user_id: user_id,
            score: score,
            username: user.username
        });
        newScore.save();
        res.json(new controller_1.RouteResponse()
            .setStatus(controller_1.Status.success)
            .setMessage(`user Score saved`)
            .setData(newScore));
    }
    catch (err) {
        res.status(400);
        res.json(new controller_1.RouteResponse()
            .setStatus(controller_1.Status.error)
            .setMessage(err));
    }
});
exports.createScore = createScore;
