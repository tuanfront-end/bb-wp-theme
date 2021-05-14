import React, { useEffect } from "react";
import ProductCard, {
  ProductCardProps,
} from "components/ProductCard/ProductCard";
import Glide from "@glidejs/glide";

export interface SectionProductsProps {
  products: ProductCardProps[];
}

const SectionProducts: React.FC<SectionProductsProps> = ({ products }) => {
  useEffect(() => {
    new Glide(".bb-HomePage-SectionProducts", {
      type: "carousel",
      perView: 4,
      autoplay: 4000,
      animationDuration: 800,
      gap: 24,
      breakpoints: {
        1400: {
          perView: 3,
        },
        1050: {
          perView: 2,
        },
        400: {
          perView: 1,
        },
      },
    }).mount();
  }, []);

  return (
    <div className="bb-HomePage-SectionProducts bb-SectionProducts">
      <div className="glide__track" data-glide-el="track">
        <ul className="glide__slides">
          {products.map((item, index) => {
            return (
              <li key={index} className="glide__slide">
                <ProductCard {...item} />
              </li>
            );
          })}
        </ul>
      </div>
    </div>
  );
};

export default SectionProducts;
