import ProductCard, {
  ProductCardProps,
} from "components/ProductCard/ProductCard";
import React, { useEffect, useState } from "react";

export interface Category {
  term_id: string;
  name: string;
  slug: string;
  count: number;
}
export interface DataType {
  products: ProductCardProps[][];
  categories: Category[];
}

const DATA: DataType = (__SERVER_DATA__.productsPage as any) || {
  products: [
    [
      {
        title: "Almost before we knew it, we had",
        link: "#",
        img: "https://images.pexels.com/photos/2428822/pexels-photo-2428822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
      },
      {
        title: "Almost before we knew it, we had",
        link: "#",
        img: "https://images.pexels.com/photos/2428822/pexels-photo-2428822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
      },
      {
        title: "Almost before we knew it, we had",
        link: "#",
        img: "https://images.pexels.com/photos/2428822/pexels-photo-2428822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
      },
      {
        title: "Almost before we knew it, we had",
        link: "#",
        img: "https://images.pexels.com/photos/2428822/pexels-photo-2428822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
      },
    ],
    [
      {
        title: "Almost before we knew it, we had",
        link: "#",
        img: "https://images.pexels.com/photos/2428822/pexels-photo-2428822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
      },
      {
        title: "Almost before we knew it, we had",
        link: "#",
        img: "https://images.pexels.com/photos/2428822/pexels-photo-2428822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
      },
    ],
    [
      {
        title: "Almost before we knew it, we had",
        link: "#",
        img: "https://images.pexels.com/photos/2428822/pexels-photo-2428822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
      },
      {
        title: "Almost before we knew it, we had",
        link: "#",
        img: "https://images.pexels.com/photos/2428822/pexels-photo-2428822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
      },
    ],
  ],
  categories: [
    {
      term_id: "11",
      name: "Tat ca san pham",
      slug: "xxx",
      count: "212",
    },
    {
      term_id: "1",
      name: "Xe nâng người dạng Boomlift",
      slug: "xxx",
      count: "22",
    },
    {
      term_id: "2",
      name: "Xe nâng người dạng Cắt kéo",
      slug: "xxx",
      count: "12",
    },
  ],
};

const ProductsPage = () => {
  const [cateActive, setCateActive] = useState(0);

  const renderTabFilterByCategory = () => {
    return (
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid mb-16 gap-4 md:gap-5">
        {DATA.categories.map((item, index) => {
          const checked = cateActive === index;
          return (
            <div
              key={index}
              className={`
                ${checked ? "bg-[#7069FA] text-white" : "bg-white"}
                  relative rounded-xl shadow-md px-5 py-4 cursor-pointer flex focus:outline-none border border-[#E6E6FF]`}
              onClick={() => setCateActive(index)}
            >
              <div className="flex items-center justify-between w-full">
                <div className="flex items-center">
                  <div className="text-sm">
                    <h2
                      className={`line-clamp-1 font-semibold text-base mb-1 ${
                        checked ? "text-white" : "text-gray-900"
                      }`}
                    >
                      {item.name}
                    </h2>
                    <span
                      className={`  text-sm ${
                        checked ? "text-[#E6E6FF]" : "text-[#486581]"
                      }`}
                    >
                      {item.count}
                      {` `}
                      <span>Sản phẩm</span>
                    </span>
                  </div>
                </div>
                {checked && (
                  <div className="flex-shrink-0 text-white">
                    <svg viewBox="0 0 24 24" fill="none" className="w-6 h-6">
                      <circle
                        cx="12"
                        cy="12"
                        r="12"
                        fill="#fff"
                        opacity="0.2"
                      ></circle>
                      <path
                        d="M7 13l3 3 7-7"
                        stroke="#fff"
                        strokeWidth="1.5"
                        strokeLinecap="round"
                        strokeLinejoin="round"
                      ></path>
                    </svg>
                  </div>
                )}
              </div>
            </div>
          );
        })}
      </div>
    );
  };

  const renderListProducts = () => {
    const items = DATA.products[cateActive];
    return (
      <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        {items.map((item, index) => {
          return (
            <div className="" key={index}>
              <ProductCard {...item} />
            </div>
          );
        })}
      </div>
    );
  };

  return (
    <div className="bb-ProductPage container mx-auto py-10 md:pt-24 md:pb-14">
      <h1 className="text-4xl font-bold mb-7">Tất cả sản phẩm</h1>
      {renderTabFilterByCategory()}
      {renderListProducts()}
    </div>
  );
};

export default ProductsPage;
