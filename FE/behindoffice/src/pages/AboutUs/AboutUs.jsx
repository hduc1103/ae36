import React from "react";

import Navbar from "../../component/navbar/navbar";
import Hero from "../../component/hero/hero";
import Services from "../../component/services/services";
import About from "../../component/about/about";
import Contact from "../../component/contact/contact";
import Testimonials from "../../component/testimonials/testimonials";
import Footer from "../../component/footer/footer";

const AboutUs = () => {
  return (
    <div>
      <Navbar />
      <Hero />
      <Services />
      <About />
      <Contact />
      <Testimonials />
      <Footer />
    </div>
  );
};

export default AboutUs;
