import React from "react";
import "./hero.css";

const Hero = () => {
  return (
    <section
      className="hero"
      id="home"
      style={{
        backgroundImage: "url(/images/Hero.png)",
        backgroundSize: "cover",
        backgroundPosition: "center",
        height: "600px",
        position: "relative",
      }}
    >
      <div className="hero-overlay">
        <div className="hero-content">
          <h1>Dịch vụ trợ lý cá nhân<br />& doanh nghiệp</h1>
          <p>Tiết kiệm thời gian, tăng hiệu quả công việc với đội ngũ hỗ trợ chuyên nghiệp từ Behind Office.</p>
          <button className="hero-button">Xem thêm</button>
        </div>
      </div>
    </section>
  );
};

export default Hero;
