import React from "react";
export interface PostCardProps {
  title: string;
  img: string;
  link: string;
  desc: string;
  date: string;
  className?: string;
}
const PostCard: React.FC<PostCardProps> = ({
  className,
  title,
  img,
  link,
  desc,
  date,
}) => {
  return (
    <a
      href={link}
      title={title}
      className={`bb-PostCard block relative rounded-2xl overflow-hidden ${className}`}
    >
      <div className="w-full h-48 bg-gray-400">
        <img className="w-full h-full object-cover" src={img} alt={title} />
      </div>
      <div className="bg-white p-4 xl:p-5 2xl:p-6 space-y-3">
        <h2 className="line-clamp-2 font-semibold text-lg">{title}</h2>
        <span className="line-clamp-3 block text-gray-500">{desc}</span>
        <span className="font-medium text-gray-500 block">{date}</span>
      </div>
    </a>
  );
};

export default PostCard;
