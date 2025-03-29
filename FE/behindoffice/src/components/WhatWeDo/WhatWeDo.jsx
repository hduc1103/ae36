import React from 'react';
import './WhatWeDo.css';

const WhatWeDo = () => {
  const sections = [
    {
      id: '01',
      title: 'Trợ lý hành chính giấy tờ',
      image: '/images/WhatWeDo/Line1.png',
      description: [
        'Lưu trữ và quản lý tài liệu',
        'Quản lý lịch trình và cuộc họp',
        'Soạn thảo và xử lý văn bản',
        'Quản lý email và liên lạc',
        'Lập báo cáo và thống kê'
      ]
    },
    {
      id: '02',
      title: 'Trợ lý kế toán công việc, booking',
      image: '/images/WhatWeDo/Line2.png',
      description: [
        'Quản lý thu chi',
        'Lập và theo dõi hóa đơn',
        'Đối soát số liệu',
        'Quản lý công nợ',
        'Báo cáo tài chính'
      ]
    },
    {
      id: '03',
      title: 'Cung cấp thông tin, giải quyết các công việc khác',
      image: '/images/WhatWeDo/Line3.png',
      description: [
        'Nghiên cứu và thu thập thông tin',
        'Phân tích và tổng hợp dữ liệu',
        'Đề xuất giải pháp',
        'Theo dõi và báo cáo tiến độ',
        'Hỗ trợ ra quyết định'
      ]
    },
    {
      id: '04',
      title: 'Trợ lý hành chính văn phòng',
      image: '/images/WhatWeDo/Line4.png',
      description: [
        'Quản lý văn phòng phẩm',
        'Sắp xếp và lưu trữ tài liệu',
        'Hỗ trợ tổ chức sự kiện',
        'Điều phối công việc',
        'Quản lý cơ sở vật chất'
      ]
    },
    {
      id: '05',
      title: 'Giao hàng và văn phòng',
      image: '/images/WhatWeDo/Line5.png',
      description: [
        'Quản lý đơn hàng',
        'Theo dõi vận chuyển',
        'Xử lý khiếu nại',
        'Báo cáo tình trạng',
        'Tối ưu quy trình giao hàng'
      ]
    }
  ];

  return (
    <div className="what-we-do">
      <div className="intro-section">
        <div className="intro-content">
          <h2 className="section-title">Chúng tôi làm gì?</h2>
          <p className="intro-description">
            Behind Office cung cấp các dịch vụ trợ lý ảo chuyên nghiệp, giúp doanh nghiệp tối ưu hóa quy trình làm việc và nâng cao hiệu quả hoạt động một cách toàn diện.
          </p>
        </div>
        <div className="intro-image">
          <img src="/images/WhatWeDo/head.png" alt="Office Building" />
        </div>
      </div>
      
      <div className="services-container">
        {sections.map((section, index) => (
          <div 
            key={section.id} 
            className={`service-item ${index % 2 === 0 ? 'left' : 'right'}`}
          >
            <div className="service-block image-block">
              <img src={section.image} alt={section.title} />
            </div>
            <div className="service-block content-block">
              <div className="service-number">{section.id}</div>
              <div className="service-details">
                <h3>{section.title}</h3>
                <ul>
                  {section.description.map((item, index) => (
                    <li key={index}>{item}</li>
                  ))}
                </ul>
                <button className="learn-more">Tìm hiểu thêm</button>
              </div>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
};

export default WhatWeDo; 