const express = require("express");
const conn = require("./db");
const app = express();
require("./db");

app.set("view engine", "ejs");

app.use(express.static("public"));
app.use(express.urlencoded({ extended: true }));
// app.use(express.json());

app.get("/", (req, res) => {
  res.render("form");
});

app.post("/contact-us", (req, res) => {
  const name = req.body.name;
  const email = req.body.email;
  const message = req.body.message;
  conn.query(
    "INSERT INTO users (name, email, message) VALUES (?, ?, ?)",
    [name, email, message],
    (err, results) => {
      if (err) throw err;
      console.log("Data Inserted successfully");
      res.redirect("/");
    }
  );
});

app.post("/register", (req, res) => {
  name = req.body.name;
  email = req.body.email;
  password = req.body.password;
  gender = req.body.gender;
  screen_name = req.body.screen_name;
  dob = req.body.dob;
  phone = req.body.phone;
  conn.query(
    "INSERT INTO users_all (name, email, password,gender,screen_name,dob,phone) VALUES (?, ?, ?,?,?,?,?)",
    [name, email, password, gender, screen_name, dob, phone],
    (err, results) => {
      if (err) throw err;
      console.log("Data Inserted successfully");
      res.redirect("/");
    }
  );
});

app.post("/delete", (req, res) => {
  const id = req.body.id;
  conn.query("DELETE FROM users_all WHERE id = ?", [id], (err, results) => {
    if (err) throw err;
    console.log("Data Deleted successfully");
    res.redirect("/");
  });
});

app.listen(3000, () => {
  console.log("Server started on port 3000");
});
