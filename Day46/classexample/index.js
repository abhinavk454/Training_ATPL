import express from "express";

const app = express();

app.use(express.json());
app.set("view engine", "ejs");

app.get("/", (req, res) => {
  res.render("index");
});
