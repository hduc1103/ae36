import React from "react";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import AboutUs from "./pages/AboutUs/AboutUs";

function App() {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<AboutUs />} />
      </Routes>
    </Router>
  );
}

export default App;
