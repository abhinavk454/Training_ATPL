const mysql = require("mysql2");

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

module.exports = conn;
