import React, { useState } from "react";
import "./blog.css";

const BlogCard = ({ title, content, image }) => {
  const [expanded, setExpanded] = useState(false);
  const preview = content.length > 150 ? content.slice(0, 150) + "..." : content;

  return (
    <div className="blog-card">
      <img src={image} alt={title} />
      <div className="blog-card-body">
        <h3>{title}</h3>
        <p>{expanded ? content : preview}</p>
        {content.length > 150 && (
          <span className="read-more" onClick={() => setExpanded(!expanded)}>
            {expanded ? "Thu gọn" : "Xem thêm..."}
          </span>
        )}
      </div>
    </div>
  );
};

export default BlogCard;
