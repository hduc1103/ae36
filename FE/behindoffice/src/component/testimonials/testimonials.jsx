import React from "react";
import "./testimonials.css";

const testimonialsList = [
  {
    name: "Nguyễn Văn A",
    title: "CEO - Công ty ABC",
    content: "Behind Office đã giúp công ty tôi tiết kiệm rất nhiều thời gian và nhân lực.",
    avatar: "/images/chiA.png",
  },
  {
    name: "Trần Thị B",
    title: "Doanh nhân tự do",
    content: "Dịch vụ tuyệt vời, nhanh chóng, chuyên nghiệp. Tôi rất hài lòng!",
    avatar: "/images/anhB.png",
  },
  {
    name: "Lê Văn C",
    title: "Founder - Startup XYZ",
    content: "Giải pháp linh hoạt, đội ngũ hỗ trợ tận tâm. Rất đáng để hợp tác lâu dài.",
    avatar: "/images/anhC.png",
  },
];

const Testimonials = () => {
  return (
    <section className="testimonials-section">
  <h2 className="testimonials-title">Khách hàng nói gì về chúng tôi</h2>
  <p className="testimonials-subtitle">
    Behind Office luôn nhận được sự tin tưởng và đánh giá cao từ khách hàng
    nhờ dịch vụ chuyên nghiệp, hỗ trợ tận tâm và giải pháp tối ưu.
  </p>
  <div className="testimonials-grid">
    {testimonialsList.map((item, index) => (
      <div className={`testimonial-card ${index === 0 ? "active" : ""}`} key={index}>
        <p className="testimonial-content">“{item.content}”</p>
        <img src={item.avatar} alt={item.name} />
        <h4>{item.name}</h4>
        <span className="testimonial-title">{item.title}</span>
        <div className="testimonial-stars">⭐ ⭐ ⭐ ⭐ ⭐</div>
      </div>
    ))}
  </div>
</section>

  );
};

export default Testimonials;
