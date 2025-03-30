import React from 'react';
import './Contact.css';

const Contact = () => {
  return (
    <div className="contact-container">
      <div className="contact-intro">
        <h1 className="contact-main-title">BEHIND OFFICE</h1>
        <p className="contact-main-description">
          Tại Behind Office, chúng tôi cung cấp dịch vụ trợ lý chuyên nghiệp giúp doanh nghiệp và cá nhân tối ưu hóa công việc, giảm tải áp lực hành chính và nâng cao hiệu quả làm việc. Nếu bạn đang tìm kiếm một giải pháp linh hoạt bền vững và hiệu quả, hãy kết nối với chúng tôi ngay hôm nay!
        </p>
      </div>

      <div className="contact-image-section">
        <img src="/images/Contact/image.png" alt="Behind Office Building" className="contact-image" />
        
        <div className="contact-info-box">
          <h2 className="info-box-title">BEHIND OFFICE</h2>
          <p className="info-box-description">
            Chúng tôi tin rằng một trợ lý chuyên nghiệp không chỉ giúp hoàn thành công việc mà còn tạo ra giá trị thực sự cho khách hàng. Sứ mệnh của chúng tôi là đồng hành cùng doanh nghiệp và cá nhân, giúp họ tối ưu hóa quy trình làm việc, giảm tải áp lực hành chính và tập trung vào những mục tiêu quan trọng nhất.
          </p>
          <div className="contact-details">
            <div className="contact-detail">
              <strong>Trụ sở:</strong> Suncet Tower, 108 Nguyen Hoang, My Dinh, Nam Tu Liem, Hanoi, Vietnam
            </div>
            <div className="contact-detail">
              <strong>Email:</strong> behindoffice@gmail.com
            </div>
            <div className="contact-detail">
              <strong>Hotline:</strong> 878799866
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Contact; 