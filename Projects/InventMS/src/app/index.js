import express from "express";
import { config } from "dotenv";

config();
const app = express();

app.use(express.static("public"));
app.use(express.urlencoded({ extended: true }));

app.set("view engine", "ejs");

const PORT = process.env.PORT || 3000;

app.get("/", (req, res) => {
  res.render("index");
});

app.listen(PORT, () => {
  console.log(`[+] Server is on http://localhost:${PORT}`);
});
