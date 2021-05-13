import React, { useEffect, useRef } from "react";
import Glide from "@glidejs/glide";

export const SectionHero = () => {
  const fakeData = [
    "https://images.pexels.com/photos/3569213/pexels-photo-3569213.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
    "https://images.pexels.com/photos/3569213/pexels-photo-3569213.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
    "https://images.pexels.com/photos/3569213/pexels-photo-3569213.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
  ];

  useEffect(() => {
    setTimeout(() => {
      new Glide("#bb-home-page__section-hero").mount();
    }, 100);
  }, []);

  const renderItem = (img: string, index: number) => {
    return (
      <li key={index} className="glide__slide">
        <div>
          <img src={img} alt={img} />
        </div>
      </li>
    );
  };

  return (
    <div>
      <div id="bb-home-page__section-hero" className="glide">
        <div className="glide__track" data-glide-el="track">
          <ul className="glide__slides">{fakeData.map(renderItem)}</ul>
        </div>
      </div>
    </div>
  );
};
