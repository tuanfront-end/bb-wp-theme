import PostCard, { PostCardProps } from "components/PostCard/PostCard";
import React from "react";

export interface DataType {
  title: string;
  posts: PostCardProps[];
}

const DATA: DataType = (__SERVER_DATA__.postsPage as any) || {
  title: "Tat ca bai viet",
  posts: [
    {
      title: "Xe nâng Zoomlion 16m làm việc",
      desc: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id ab quod sequi ullam laboriosam nam eaque eum eveniet dolorem impedit.",
      date: "12 Jun 2021",
      img: "https://images.pexels.com/photos/2428822/pexels-photo-2428822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
      link: "#",
    },
    {
      title: "Xe nâng Zoomlion 16m làm việc",
      desc: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id ab quod sequi ullam laboriosam nam eaque eum eveniet dolorem impedit.",
      date: "12 Jun 2021",
      img: "https://images.pexels.com/photos/2428822/pexels-photo-2428822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
      link: "#",
    },
  ],
};

const PostsPage = () => {
  return (
    <div className="bb-PostsPage container mx-auto py-10 md:pt-24 md:pb-14">
      <h1 className="text-4xl font-bold mb-8">
        {DATA.title.replace("<span>", "").replace("</span>", "")}
      </h1>
      <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        {DATA.posts.map((item, index) => {
          return (
            <div key={index}>
              <PostCard {...item} className="border border-gray-100" />
            </div>
          );
        })}
      </div>
    </div>
  );
};

export default PostsPage;
