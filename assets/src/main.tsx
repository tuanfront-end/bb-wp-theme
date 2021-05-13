import React from "react";
import ReactDOM from "react-dom";
import "./index.css";
import "./styles/index.scss";
import App from "./App";

export type RootId = "bb-home-react" | "bb-product-page-react";

const rootEl = (function getRootElement(): RootId | null {
  if (document.getElementById("bb-home-react")) {
    return "bb-home-react";
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
