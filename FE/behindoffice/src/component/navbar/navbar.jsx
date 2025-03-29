import React from "react";
import "./navbar.css";

const Navbar = () => {
  return (
    <header className="navbar">
  <div className="navbar-left">
    <img src="/images/icononly_transparent.png" alt="Icon" className="logo-icon" />
    <img src="/images/fulllogo_transparent.png" alt="Behind Office" className="logo-text" />
  </div>

  <nav className="navbar-center">
    <a href="/home">Trang chủ</a>
    <a href="/about">Về chúng tôi</a>
    <a href="/services">Dịch vụ</a>
    <a href="/contact">Liên hệ</a>
    <a href="/blog">Blog</a>
  </nav>

  <a href="tel:+84878799866" className="navbar-call-button">
    <img src="/images/phone_icon.png" alt="Call" />
    <span>Call us: +84 878 799 866</span>
  </a>
</header>

  );
};

export default Navbar;
