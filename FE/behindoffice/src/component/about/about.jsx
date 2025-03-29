import React from "react";
import "./about.css";

const About = () => {
  return (
    <section className="about" id="about">
      <div className="about-content">
        <div className="about-text">
          <h2>Về Behind Office</h2>
          <p>
            Chúng tôi là đội ngũ trợ lý chuyên nghiệp hỗ trợ mọi tác vụ hành chính, cá nhân và chăm sóc khách hàng cho cá nhân & doanh nghiệp vừa và nhỏ.
          </p>
          <p>
            Với kinh nghiệm và công nghệ, Behind Office giúp bạn tiết kiệm thời gian, tối ưu chi phí và nâng cao hiệu quả công việc.
          </p>
        </div>
        <div className="about-image">
          <img src="/images/woman-with-headset-having-video-call-laptop.png" alt="About us" />
        </div>
      </div>
    </section>
  );
};

export default About;
