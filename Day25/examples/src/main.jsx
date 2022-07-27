import React from "react";
import ReactDOM from "react-dom/client";
import App from "./App";
import "./index.css";
import Event_E from "./components/Contact";
import About from "./components/About";
import { Route, Routes, Link, BrowserRouter as Router } from "react-router-dom";

ReactDOM.createRoot(document.getElementById("root")).render(
  <Router>
    <h3>
      <Link to="/">Home</Link>
    </h3>
    <h3>
      <Link to="/events">Events Example</Link>
    </h3>
    <h3>
      <Link to="/about">About</Link>
    </h3>
    <Routes>
      <Route path="/" element={<App />} />
      <Route path="/events" element={<Event_E />} />
      <Route path="/about" element={<About />} />
    </Routes>
  </Router>
);
