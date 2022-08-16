import express from "express";
import { config } from "dotenv";
import session from "express-session";
import adminRouter from "../routes/admin.routes.js";
import managerRouter from "../routes/manager.routes.js";

config();

const app = express();
const PORT = process.env.PORT || 3000;
const secret = process.env.SESSION_SECRET || "secret";

app.set("view engine", "ejs");
app.set("trust proxy", 1);

app.use(
  session({
    secret: secret,
    cookie: { maxAge: 1000 * 60 * 60 * 24 * 7 },
    saveUninitialized: false,
    resave: false,
  })
);
app.use(express.static("public"));
app.use(express.urlencoded({ extended: true }));
app.use("/admin", adminRouter);
app.use("/manager", managerRouter);

app.get("/", (req, res) => {
  res.render("index");
});

app.get("*", (req, res, next) => {
  res.status(404).send("404");
});
app.listen(PORT, () => {
  console.log(`[+] Server is on http://localhost:${PORT}`);
});
