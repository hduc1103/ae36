import React, { useEffect, useState } from "react";
import BlogCard from "./blogcard";
import "./blog.css";

const BlogList = () => {
  const [posts, setPosts] = useState([]);

  useEffect(() => {
    fetch("http://localhost:8080/api/post")
      .then((res) => res.json())
      .then((data) => setPosts(data))
      .catch((err) => console.error("Error fetching posts", err));
  }, []);

  return (
    <section className="blog-section">
      <h2 className="blog-title">Bài viết</h2>
      <div className="blog-grid">
        {posts.map((post, index) => (
          <BlogCard
            key={index}
            title={post.title}
            content={post.content}
            image={post.image}
          />
        ))}
      </div>
    </section>
  );
};

export default BlogList;
