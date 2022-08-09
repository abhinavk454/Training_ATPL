const express = require("express");
const conn = require("./connect_db");
const app = express();

app.use(express.urlencoded({ extended: true }));
app.use(express.static("public"));

app.set("view engine", "ejs");

/**
 * GET form page
 */
app.get("/assign43", (req, res) => {
  res.render("assign");
});

app.get("/", (req, res) => {
  res.render("update", {
    message: "",
  });
});

app.post("/edit-by-id", (req, res, next) => {
  const { id } = req.body;
  query = "SELECT * FROM user WHERE id = " + id;
  conn.query(query, (err, result) => {
    if (err) throw err;
    console.log(result[0]);
    res.render("edit", {
      data: result[0],
    });
  });
});

// edit by id
app.post("/edit/:id", (req, res, next) => {
  const { id } = req.params;
  const { name, quote } = req.body;
  query =
    "UPDATE user SET name = '" +
    name +
    "', quote = '" +
    quote +
    "' WHERE id = " +
    id;
  conn.query(query, (err, result) => {
    if (err) throw err;
    console.log(result);
    res.render("update", {
      message: "Update success",
    });
  });
});

//delete by id
app.post("/delete/:id", (req, res) => {
  const { id } = req.params;
  query = "DELETE FROM user where id = " + id;
  conn.query(query, (err, result) => {
    res.render("update", {
      message: "Data Deleted",
    });
  });
});

app.listen(3000, () => {
  console.log("On 3000");
});
