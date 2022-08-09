import express from "express";
import session from "express-session";
import conn from "./db.js";

const app = express();
app.use(express.static("public"));
app.use(express.urlencoded({ extended: true }));

app.set("view engine", "ejs");
app.set("trust proxy", 1);
app.use(
  session({
    secret: "keyboard cat",
    cookie: { maxAge: 60000 },
    resave: false,
    saveUninitialized: false,
  })
);

app.get("/", (req, res) => {
  res.render("index");
});

app.get("/login", function (req, res, next) {
  res.render("login", { title: "Contact-Us" });
});

app.post("/auth", function (request, response) {
  let username = request.body.username;
  let password = request.body.password;
  if (username && password) {
    conn.query(
      "SELECT * FROM logs WHERE username = ? AND password = ?",
      [username, password],
      function (error, results, fields) {
        if (error) throw error;
        if (results.length > 0) {
          request.session.loggedin = true;
          request.session.username = username;
          response.redirect("/home");
        } else {
          response.send("Incorrect Username and/or Password!");
        }
        response.end();
      }
    );
  } else {
    response.send("Please enter Username and Password!");
    response.end();
  }
});

app.get("/home", function (request, response) {
  if (request.session.loggedin) {
    response.send(
      "Welcome back, " +
        request.session.username +
        '!  <a href="/logout">click to logout</a>'
    );
  } else {
    response.send("Please login to view this page!");
  }
  response.end();
});

app.get("/logout", (req, res) => {
  req.session.destroy();
  res.redirect("/");
});

app.listen(3000, () => {
  console.log("Server started on port 3000");
});
