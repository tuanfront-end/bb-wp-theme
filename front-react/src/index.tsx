import React from "react";
import ReactDOM from "react-dom";
import "./index.css";
import "./styles/index.scss";
import App from "./App";

declare global {
  var __SERVER_DATA__: any;
}

export type RootId =
  | "bb-home-react"
  | "bb-products-react"
  | "bb-posts-react"
  | "bb-product-single-react";

const rootEl = (function getRootElement(): RootId | null {
  if (document.getElementById("bb-home-react")) {
    return "bb-home-react";
  }
  if (document.getElementById("bb-products-react")) {
    return "bb-products-react";
  }
  if (document.getElementById("bb-posts-react")) {
    return "bb-posts-react";
  }
  if (document.getElementById("bb-product-single-react")) {
    return "bb-product-single-react";
  }
  return null;
})();

if (rootEl) {
  ReactDOM.render(
    <React.StrictMode>
      <App rootId={rootEl} />
    </React.StrictMode>,
    document.getElementById(rootEl)
  );
}
