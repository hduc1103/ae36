import React from 'react';
import './WhyChooseUs.css';

const WhyChooseUs = () => {
  const topFeatures = [
    {
      icon: '/images/WhyChooseUs/Icon1.png',
      title: 'Nhanh chóng',
      description: 'Behind Office tối ưu dịch vụ, phản hồi nhanh, hoàn thành công việc sớm nhất. Đội ngũ chuyên nghiệp hỗ trợ 24/7.'
    },
    {
      icon: '/images/WhyChooseUs/Icon2.png',
      title: 'Hiệu quả',
      description: 'Behind Office cam kết kết quả tốt ưu, đáp ứng mong muốn khách hàng. Giải pháp chính xác, tăng hiệu quả, giảm rủi ro.'
    },
    {
      icon: '/images/WhyChooseUs/Icon3.png',
      title: 'Uy tín',
      description: 'Behind Office luôn đặt khách hàng lên hàng đầu, với đội ngũ chuyên môn đa lĩnh vực, sẵn sàng hỗ trợ bạn mọi lúc.'
    }
  ];

  const bottomFeatures = [
    {
      icon: '/images/WhyChooseUs/Icon4.png',
      title: 'Tiện lợi',
      description: 'Behind Office luôn đặt khách hàng lên hàng đầu, với đội ngũ chuyên môn đa lĩnh vực, sẵn sàng hỗ trợ bạn mọi lúc.'
    },
    {
      icon: '/images/WhyChooseUs/Icon5.png',
      title: 'Tiết kiệm',
      description: 'Tùy chỉnh dịch vụ theo nhu cầu, giúp doanh nghiệp vận hành trơn tru và tiết kiệm chi phí.'
    }
  ];

  const FeatureCard = ({ icon, title, description }) => (
    <div className="feature-card">
      <div className="feature-card__icon">
        <img src={icon} alt={title} />
      </div>
      <div className="feature-card__content">
        <h3 className="feature-card__title">{title}</h3>
        <p className="feature-card__description">{description}</p>
      </div>
    </div>
  );

  return (
    <div className="why-choose-us">
      <div className="why-choose-us__container">
        <h2 className="why-choose-us__title">Tại sao lựa chọn chúng tôi?</h2>
        <p className="why-choose-us__subtitle">
          Đội ngũ trợ lý chuyên nghiệp, quy trình linh hoạt, cam kết bảo mật – Behind Office giúp bạn tối ưu công việc và nâng cao hiệu suất!
        </p>
        
        <div className="why-choose-us__features">
          <div className="why-choose-us__features-row">
            {topFeatures.map((feature, index) => (
              <FeatureCard key={index} {...feature} />
            ))}
          </div>
          <div className="why-choose-us__features-row">
            {bottomFeatures.map((feature, index) => (
              <FeatureCard key={index} {...feature} />
            ))}
          </div>
        </div>
      </div>
    </div>
  );
};

export default WhyChooseUs; 