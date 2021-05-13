import React from "react";
import "./App.css";
import PageDecorator from "./containers/PageDecorator";
import { RootId } from "./index";

function App({ rootId }: { rootId: RootId }) {
  return (
    <div className="App overflow-hidden">
      <header>Thí í header</header>
      <PageDecorator rootId={rootId} />
      <footer className="h-32">This is footer</footer>
    </div>
  );
}

export default App;
