import React from "react";
import { RootId } from "..";
import { HomePage } from "./HomePage/HomePage";

const PageDecorator = ({ rootId }: { rootId: RootId }) => {
  switch (rootId) {
    case "bb-home-react":
      return <HomePage />;

    default:
      return null;
  }
};

export default PageDecorator;
