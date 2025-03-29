import React from "react";
import "./services.css";

const servicesList = [
  {
    title: "Trợ lý hành chính",
    description: "Hỗ trợ giấy tờ, báo cáo, sắp xếp lịch trình và quản lý văn phòng.",
    image: "/images/charming-ethnic-businesswoman-using-laptop.png",
  },
  {
    title: "Chăm sóc khách hàng",
    description: "Giải đáp thắc mắc, theo dõi đơn hàng và tăng trải nghiệm khách hàng.",
    image: "/images/young-business-lady.png",
  },
  {
    title: "Hỗ trợ cá nhân",
    description: "Nhắc lịch cá nhân, mua sắm hộ, sắp xếp công việc hằng ngày.",
    image: "/images/image-young-asian-woman-company-worker-glasses-smiling-holding-digital-tablet-standing-white-background.png",
  },
];

const Services = () => {
  return (
    <section className="services" id="services">
      <h2 className="services-title">Dịch vụ của chúng tôi</h2>
      <div className="services-grid">
        {servicesList.map((service, index) => (
          <div className="service-card" key={index}>
            <img src={service.image} alt={service.title} />
            <h3>{service.title}</h3>
            <p>{service.description}</p>
          </div>
        ))}
      </div>
    </section>
  );
};

export default Services;
