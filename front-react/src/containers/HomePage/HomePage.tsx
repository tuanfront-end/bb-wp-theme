import React from "react";
import { SectionHero, SectionHeroProps } from "./SectionHero";
import SectionProducts, { SectionProductsProps } from "./SectionProducts";
import SectionPosts, { SectionPostsProps } from "./SectionPosts";

export interface HomePageData {
  sectionHero: SectionHeroProps;
  sectionProducts: SectionProductsProps;
  sectionPosts: SectionPostsProps;
}

const DATA: HomePageData = (__SERVER_DATA__.homePage as any) || {
  sectionHero: {
    imgs: [
      "https://images.pexels.com/photos/3569213/pexels-photo-3569213.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
      "https://images.pexels.com/photos/3569213/pexels-photo-3569213.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
      "https://images.pexels.com/photos/3569213/pexels-photo-3569213.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
    ],
  },
  sectionProducts: {
    products: [
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
      {
        title: "Almost before we knew it, we had",
        link: "#",
        img: "https://images.pexels.com/photos/2428822/pexels-photo-2428822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
      },
    ],
  },

  sectionPosts: {
    left: {
      heading: "Về chúng tôi",
      desc: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos earum sint pariatur velit, corrupti facere, illo cumque est aliquam aspernatur eaque, deleniti nemo excepturi dolorem itaque minima ratione harum explicabo!",
      blogPageLink: "#",
    },
    right: [
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
  },
};

//
console.log({ sv: __SERVER_DATA__.homePage, cl: DATA });
//
export const HomePage = () => {
  return (
    <div className="bb-HomePage">
      <SectionHero {...DATA.sectionHero} />
      <div className="container mx-auto mt-16 mb-4">
        <SectionProducts {...DATA.sectionProducts} />
      </div>
      <section className="py-24 bg-gradient-to-br from-[#FFE3E3] to-[#E3F8FF]">
        <div className="container mx-auto">
          <SectionPosts {...DATA.sectionPosts} />
        </div>
      </section>
    </div>
  );
};
