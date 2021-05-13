import React from "react";

export interface ProductCardProps {
  img: string;
  title: string;
  link: string;
}

const ProductCard: React.FC<ProductCardProps> = ({ title, img, link }) => {
  return (
    <a href={link} className="bb-ProductCard block" title={title}>
      <div className="w-full h-80 rounded-2xl overflow-hidden">
        <img className="w-full h-full object-cover" src={img} alt={title} />
      </div>
      <div className="px-3 2xl:px-5 transform -translate-y-1/2 text-left">
        <div className="px-6 py-5 xl:px-8 xl:py-6 bg-white rounded-2xl shadow-lg">
          <h2 className="text-lg line-clamp-1 leading-none mb-3 font-medium">
            {title}
          </h2>
          <span className="flex items-center leading-none text-gray-600">
            Xem thêm <i className="ml-4 las la-arrow-right leading-none"></i>
          </span>
        </div>
      </div>
    </a>
  );
};

export default ProductCard;
