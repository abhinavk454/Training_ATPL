const http = require("http");
const fs = require("fs");
const path = require("path");

/**
 * Server Example1
 */

// const server = http.createServer((req, res) => {
//   res.writeHead(200, { "Content-Type": "text/html" });
//   fs.readFile(path.join(__dirname, "index.html"), (err, data) => {
//     if (err) {
//       res.writeHead(404);
//       res.end("404");
//     } else {
//       res.end(data);
//     }
//   });
// });

/**
 * Server Class Assignment
 */

const server = http.createServer((req, res) => {
  var query = require("url").parse(req.url, true);
  var filename = query.pathname;
  fs.readFile(path.join(__dirname, filename), (err, data) => {
    if (err) {
      res.writeHead(404);
      res.end("404");
    } else {
      res.writeHead(200);
      res.end(data);
    }
  });
});

server.listen(3000, () => {
  console.log("Server started on port 3000");
});
