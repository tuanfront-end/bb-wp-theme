import React from "react";
import { RootId } from "..";
import { HomePage } from "./HomePage/HomePage";
import PostsPage from "./PostsPage/PostsPage";
import ProductSingle from "./ProductSingle/ProductSingle";
import ProductsPage from "./ProductsPage/ProductsPage";

const PageDecorator = ({ rootId }: { rootId: RootId }) => {
  switch (rootId) {
    case "bb-home-react":
      return <HomePage />;
    case "bb-products-react":
      return <ProductsPage />;
    case "bb-posts-react":
      return <PostsPage />;
    case "bb-product-single-react":
      return <ProductSingle />;

    default:
      return null;
  }
};

export default PageDecorator;
