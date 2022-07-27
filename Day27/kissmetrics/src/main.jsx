import React from "react";
import ReactDOM from "react-dom/client";
import App from "./App";
import "./index.css";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Marketing from "./pages/Marketing";
import Guides from "./pages/Guides";
import CaseStudies from "./pages/CaseStudies";
import Experts from "./pages/Experts";

ReactDOM.createRoot(document.getElementById("root")).render(
  <BrowserRouter>
    <Routes>
      <Route path="/" element={<App />} />
      <Route path="/marketing" element={<Marketing />} />
      <Route path="/guides" element={<Guides />} />
      <Route path="/case-studies" element={<CaseStudies />} />
      <Route path="/experts" element={<Experts />} />
    </Routes>
  </BrowserRouter>
);
