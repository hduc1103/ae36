import React from "react";
import "./footer.css";

const Footer = () => {
  return (
    <footer className="footer">
      <div className="footer-main">
      <div className="footer-section logo-section">
  <div className="footer-logo-wrapper">
    <img
      src="/images/icononly_transparent.png"
      alt="Behind Office Icon"
      className="footer-logo-icon"
    />
    <img
      src="/images/fulllogo_transparent.png"
      alt="Behind Office"
      className="footer-logo-text"
    />
  </div>
  <p>
    Giải pháp hỗ trợ phía sau văn phòng giúp bạn vận hành doanh nghiệp
    trơn tru và hiệu quả hơn mỗi ngày.
  </p>
</div>


        <div className="footer-section">
          <h4>Đường dẫn</h4>
          <ul>
            <li><a href="#home">Trang chủ</a></li>
            <li><a href="#about">Về chúng tôi</a></li>
            <li><a href="#services">Dịch vụ</a></li>
            <li><a href="#contact">Liên hệ</a></li>
            <li><a href="#blog">Bài viết</a></li>
          </ul>
        </div>

        <div className="footer-section">
          <h4>Mạng xã hội</h4>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Zalo</a></li>
          </ul>
        </div>

        <div className="footer-section">
          <h4>Thông tin doanh nghiệp</h4>
          <p>Địa chỉ: Suced Tower, 108 Nguyễn Hoàng, Mỹ Đình, Nam Từ Liêm, Hà Nội, Vietnam</p>
          <p>Số điện thoại: +84 878 799 866</p>
          <p>Email: behindofficevn@gmail.com</p>
        </div>
      </div>

      <hr className="footer-divider" />

      <div className="footer-bottom">
        <span>Copyright © {new Date().getFullYear()} Behind Office</span>
        <span>Developed by Le Vu Media</span>
      </div>
    </footer>
  );
};

export default Footer;
