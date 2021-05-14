import React, { useState } from "react";
import parse from "html-react-parser";

interface ProductDetailType {
  ID: string;
  post_content: string;
  post_title: string;
  post_excerpt: string;
  imageThumbnail: string;
}

interface ProductSingleType {
  product: ProductDetailType;
  dowloads: string[];
  video: string;
}

const DATA: ProductSingleType = (__SERVER_DATA__.productSinglePage as any) || {
  product: {
    ID: "1",
    post_title: "Almost before we knew it, we had",
    post_content: "Lorem content",
    post_excerpt: "Lorem post_excerpt",
    imageThumbnail:
      "https://images.pexels.com/photos/2428822/pexels-photo-2428822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
  },
  dowloads: [
    {
      id: "string;",
      name: "string;",
      file: "string;",
    },
  ],
  video: "stri",
};
const { product, dowloads, video } = DATA;
const ProductSingle = () => {
  const [tabIndex, setTabIndex] = useState(1);

  return (
    <div className="bb-ProducSingle container mx-auto py-10 md:pt-24 md:pb-14">
      <div className="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-24">
        <div className="">
          <img
            className="w-full h-auto object-cover rounded-xl"
            src={product.imageThumbnail}
            alt={product.post_title}
          />
        </div>
        <div className="lg:pl-20 flex flex-col justify-center items-start">
          <h1 className="font-bold text-3xl md:text-4xl mb-6 leading-snug">
            {product.post_title}
          </h1>
          <p className="text-gray-500 leading-relaxed mb-8">
            {parse(product.post_excerpt)}
          </p>
          {dowloads.map((item, index) => (
            <a
              key={index}
              href={item}
              target="_blank"
              rel="noopener noreferrer"
              className="flex items-center justify-center font-medium text-base bg-bg-button-1 rounded-full py-4 px-12"
              download={item}
            >
              <i className="las la-download mr-4 text-xl leading-none"></i>
              <span>Download</span>
            </a>
          ))}
        </div>
      </div>
      <div>
        <header className="flex justify-center relative">
          <button
            className={`${
              tabIndex === 1 ? "bg-bg-button-1 border-b-4 border-[#8888FC]" : ""
            } p-4 md:py-6 md:px-12 text-base lg:text-lg font-semibold tracking-wide md:tracking-wider uppercase relative z-10 focus:outline-none`}
            onClick={() => setTabIndex(1)}
          >
            Thông số kỹ thuật
          </button>
          <button
            className={`${
              tabIndex === 2 ? "bg-bg-button-1 border-b-4 border-[#8888FC]" : ""
            } p-4 md:py-6 md:px-12 text-base lg:text-lg font-semibold tracking-wide md:tracking-wider uppercase relative z-10 focus:outline-none`}
            onClick={() => setTabIndex(2)}
          >
            Video sản phẩm
          </button>
          <div className="absolute bottom-0 w-full left-0 h-1 bg-gray-50 z-0"></div>
        </header>
        <div
          className={`bb-ProducSingle__content prose lg:prose-lg max-w-7xl mx-auto px-4 pt-9 ${
            tabIndex === 1
              ? "bb-ProducSingle__content-content"
              : "bb-ProducSingle__content-video"
          }`}
        >
          {tabIndex === 1 ? parse(product.post_content) : parse(video)}
        </div>
      </div>
    </div>
  );
};

export default ProductSingle;
