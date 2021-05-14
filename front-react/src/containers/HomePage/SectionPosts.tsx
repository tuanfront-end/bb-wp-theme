import Glide from "@glidejs/glide";
import Next from "components/Next/Next";
import PostCard, { PostCardProps } from "components/PostCard/PostCard";
import React, { useEffect } from "react";

export interface SectionPostsProps {
  left: {
    heading: string;
    desc: string;
    blogPageLink: string;
  };
  right: PostCardProps[];
}

const SectionPosts: React.FC<SectionPostsProps> = ({ left, right }) => {
  useEffect(() => {
    new Glide(".bb-HomePage-SectionPosts__posts", {
      type: "carousel",
      perView: 3,
      autoplay: 4500,
      animationDuration: 900,
      gap: 24,
      breakpoints: {
        1280: {
          perView: 2,
        },
        1024: {
          perView: 1,
        },
      },
    }).mount();
  }, []);

  return (
    <div className="bb-HomePage-SectionPosts bb-SectionPosts sm:flex space-y-8 sm:space-y-0">
      <div className="w-full sm:w-1/2 lg:w-[35%] xl:w-[30%] flex-shrink-0 pr-8 xl:pr-16 flex flex-col justify-center">
        <h2 className="text-3xl lg:text-4xl xl:text-5xl font-bold leading-none">
          {left.heading}
        </h2>
        <div className="h-[3px] bg-blue-800 my-6 w-16 "></div>
        <span className="text-gray-500 mb-10 block leading-relaxed">
          {left.desc}
        </span>
        <a
          className="flex items-center font-semibold text-gray-700"
          href={left.blogPageLink}
        >
          <span>Xem thêm các bài viết</span>
          <i className="ml-3 las la-arrow-right"></i>
        </a>
      </div>
      <div className="w-full sm:w-1/2 lg:w-[65%] xl:w-[70%]">
        <div className="bb-HomePage-SectionPosts__posts relative">
          <div className="glide__track" data-glide-el="track">
            <ul className="glide__slides">
              {right.map((item, index) => {
                return (
                  <li key={index} className="glide__slide">
                    <PostCard {...item} />
                  </li>
                );
              })}
            </ul>
          </div>
          <div className="glide__arrows" data-glide-el="controls">
            <span
              className="absolute right-0 top-1/2 transform translate-x-1/4 lg:translate-x-1/2 -translate-y-1/2 z-40"
              data-glide-dir=">"
            >
              <Next />
            </span>
            <span
              className="absolute left-0 top-1/2 transform -translate-x-1/4 lg:-translate-x-1/2 -translate-y-1/2 z-40"
              data-glide-dir="<"
            >
              <Next isNext={false} />
            </span>
          </div>
        </div>
      </div>
    </div>
  );
};

export default SectionPosts;
