import React from "react";
import "./App.css";
import PageDecorator from "./containers/PageDecorator";
import { RootId } from "./main";

function App({ rootId }: { rootId: RootId }) {
  return (
    <div className="App">
      <PageDecorator rootId={rootId} />
    </div>
  );
}

export default App;
