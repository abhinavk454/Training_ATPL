const express = require("express");
const mysql = require("mysql2");
const app = express();

app.set("view engine", "pug");

const conn = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "password",
  database: "sqlexerc",
});

const connectToDB = () => {
  conn.connect((err) => {
    if (err) throw err;
    console.log("Connected to database");
  });
};

connectToDB();

app.get("/", (req, res) => {
  conn.query("SELECT * FROM book", (err, results) => {
    if (err) throw err;
    res.render("index", { books: results });
  });
});

app.listen(3000, () => {
  console.log("Server is running on port 3000");
});
