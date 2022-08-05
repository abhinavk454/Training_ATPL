const mysql = require("mysql2");
// const http = require("http");
const readline = require("readline-sync");

const conn = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "password",
  database: "sqlexerc",
});

const getInput = () => {
  const name = readline.question("What is your name? ");
  const email = readline.question("What is your email? ");
  const phone = readline.question("What is your phone number? ");
  return [name, email, phone];
};

//connect to DB
const connectToDB = () => {
  conn.connect((err) => {
    if (err) throw err;
    console.log("Connected to database");
  });
};

//get all booking
const getBookings = () => {
  conn.query("SELECT * FROM booking", (err, results) => {
    if (err) {
      console.log(err);
    } else {
      console.log(results);
    }
  });
};

//get all guests
const getGuests = () => {
  conn.query("SELECT * FROM guest", (err, results) => {
    if (err) {
      console.log(err);
    } else {
      console.log(results);
    }
  });
};

// insert data into book table
const insertBook = () => {
  const [name, email, phone] = getInput();
  conn.query(
    "INSERT INTO book (name, email, phone, date, time, party) VALUES (?, ?, ?, ?, ?, ?)",
    [name, email, phone, "2020-01-01", "12:00", 2],
    (err, results) => {
      if (err) {
        console.log(err);
      } else {
        console.log(results);
      }
    }
  );
};

const viewBook = () => {
  conn.query("SELECT * FROM book", (err, results) => {
    if (err) {
      console.log(err);
    } else {
      console.log(results);
    }
  });
};

const deleteBook = (name) => {
  conn.query("DELETE FROM book WHERE name = ?", [name], (err, results) => {
    if (err) {
      console.log(err);
    } else {
      console.log(results);
    }
  });
};

connectToDB();
const sw = readline.question(
  "What would you like to do?\n 1. Add Data\n 2. View Data\n 3. Delete Data\n"
);
if (sw === "1") {
  insertBook();
} else if (sw === "2") {
  viewBook();
} else if (sw === "3") {
  const name_delete = readline.question(
    "Enter the name of data you want to delete: \n"
  );
  connectToDB();
  deleteBook(name_delete);
} else {
  console.log("Invalid input");
}
// getBookings();
// getGuests();
// createBookTable();
// insertBook();
conn.end();
