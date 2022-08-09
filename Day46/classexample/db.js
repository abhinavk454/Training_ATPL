import { createConnection } from "mysql2";

const conn = createConnection({
  host: "localhost",
  user: "root",
  password: "password",
  database: "prisma",
});

const connectToDB = () => {
  conn.connect((err) => {
    if (err) throw err;
    console.log("Connected to database");
  });
};

connectToDB();

export default conn;
