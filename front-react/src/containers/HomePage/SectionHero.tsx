import React, { useEffect } from "react";
import Glide from "@glidejs/glide";

export interface SectionHeroProps {
  imgs: string[];
}

export const SectionHero: React.FC<SectionHeroProps> = ({ imgs }) => {
  useEffect(() => {
    new Glide(".glide", {
      autoplay: 4000,
      animationDuration: 1000,
      gap: 0,
    }).mount();
  }, []);

  const renderItem = (img: string, index: number) => {
    return (
      <li key={index} className="glide__slide">
        <div className="h-[400px] lg:h-[600px] 2xl:h-[800px] w-full">
          <img
            className="w-full h-full object-cover block"
            src={img}
            alt={img}
          />
        </div>
      </li>
    );
  };

  const renderDotItem = (img: string, index: number) => {
    return (
      <button
        key={index}
        className="w-8 h-8 lg:h-16 lg:w-16 rounded-md border-2 border-gray-200 overflow-hidden"
        data-glide-dir={`=${index}`}
      >
        <img className="w-full h-full object-cover block" src={img} alt={img} />
      </button>
    );
  };

  return (
    <div>
      <div className="glide">
        <div className="glide__track" data-glide-el="track">
          <ul className="glide__slides">{imgs.map(renderItem)}</ul>
        </div>
        <div
          className="glide__bullets mx-auto space-x-2 lg:space-x-4 absolute bottom-4 lg:bottom-8 left-0 right-0 text-center"
          data-glide-el="controls[nav]"
        >
          {imgs.map(renderDotItem)}
        </div>
      </div>
    </div>
  );
};
