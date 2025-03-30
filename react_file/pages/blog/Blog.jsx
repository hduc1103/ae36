import React from "react";
import Navbar from "../../components/navbar/navbar";
import Footer from "../../components/footer/footer";
import BlogList from "../../components/blog/bloglist";
import "./blog.css";
const Blog = () => {
  return (
    <>
      <Navbar />
      <div className="blog-header">
        <img src="/images/pexels-pixabay-273209.png" alt="Blog Banner" className="blog-banner" />
        <h1 className="blog-header-title">Bài viết</h1>
      </div>
      <BlogList />
      <Footer />
    </>
  );
};

export default Blog;
