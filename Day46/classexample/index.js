import express, { query } from "express";
import conn from "./db.js";

const app = express();

app.use(express.json());
app.use(express.static("public"));
app.use(express.urlencoded({ extended: true }));
app.set("view engine", "ejs");

app.get("/", (req, res) => {
  const query = "SELECT * FROM inventory";
  conn.query(query, (err, results) => {
    console.log(results);
    if (err) throw err;
    res.render("index", { inventory: results });
  });
});

app.post("/delete/:id", (req, res) => {
  const query = `DELETE FROM inventory WHERE id = ${req.params.id}`;
  conn.query(query, (err, results) => {
    if (err) throw err;
    res.redirect("/");
  });
});

app.post("/edit/:id", (req, res) => {
  const query = `UPDATE inventory SET name = '${req.body.name}', price = ${req.body.price}, quantity = ${req.body.quantity} WHERE id = ${req.params.id}`;
  conn.query(query, (err, results) => {
    if (err) throw err;
    res.redirect("/");
  });
});

app.listen(3000, () => {
  console.log("Server started on port 3000");
});
