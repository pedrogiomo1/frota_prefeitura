import express from "express";
import { addUser, deleteUser, getUsers, updateUser } from "../controllers/user.js";
import { login } from "../controllers/login.js";
import bodyParser from "body-parser";
import multer from 'multer';

const upload = multer();

const router = express.Router();

router.use(bodyParser.urlencoded({ extended: false }));
// Login
router.post('/login', upload.none(), login);

// Users
router.get("/", getUsers);

router.post("/", addUser);

router.put("/:id", updateUser);

router.delete("/:id", deleteUser);

export default router;
