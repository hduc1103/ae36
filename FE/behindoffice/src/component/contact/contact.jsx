import React, { useState } from "react";
import "./contact.css";

const Contact = () => {
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    message: "",
  });

  const handleChange = (e) => {
    setFormData((prev) => ({
      ...prev,
      [e.target.name]: e.target.value,
    }));
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    console.log("Form submitted:", formData);
    alert("Cảm ơn bạn đã liên hệ!");
    // Reset form
    setFormData({ name: "", email: "", message: "" });
  };

  return (
    <section className="contact-section" id="contact">
      <h2 className="contact-title">Liên hệ với chúng tôi</h2>
      <form className="contact-form" onSubmit={handleSubmit}>
        <input
          type="text"
          name="name"
          placeholder="Họ và tên"
          value={formData.name}
          onChange={handleChange}
          required
        />
        <input
          type="email"
          name="email"
          placeholder="Email liên hệ"
          value={formData.email}
          onChange={handleChange}
          required
        />
        <textarea
          name="message"
          rows="5"
          placeholder="Lời nhắn..."
          value={formData.message}
          onChange={handleChange}
          required
        />
        <button type="submit">Gửi liên hệ</button>
      </form>
    </section>
  );
};

export default Contact;
