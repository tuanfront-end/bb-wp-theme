import React from "react";
import "./App.css";
import PageDecorator from "./containers/PageDecorator";
import { RootId } from "./index";

function App({ rootId }: { rootId: RootId }) {
  return (
    <div className="App overflow-hidden">
      {/* <header id="masthead" className="site-header">
        <div className="site-header-wrap container mx-auto flex items-center justify-between">
          <div className="site-branding">
            <a href="http://" target="_blank" rel="noopener noreferrer">
              <img
                className="block max-h-16 lg:max-h-20"
                src="https://www.businessbloomer.com/wp-content/uploads/2019/11/bbloomer-logo-white.png"
                alt=""
              />
            </a>
          </div>

          <nav id="site-navigation" className="main-navigation">
            <button
              id="menu-toggle"
              className="menu-toggle text-2xl text-gray-900"
            >
              <i className="las la-bars"></i>
            </button>
            <div id="primary-menu-wrap">
              <button
                id="close-menu-toggle"
                className="block md:hidden text-2xl text-gray-900 absolute right-0 top-0 p-2"
              >
                <i className="las la-times"></i>
              </button>
              <div id="primary-menu" className="menu">
                <ul className="nav-menu">
                  <li className="page_item page-item-10">
                    <a href="http://localhost/wordpress-2/cart/">Cart</a>
                  </li>
                  <li className="page_item page-item-11">
                    <a href="http://localhost/wordpress-2/checkout/">
                      Checkout
                    </a>
                  </li>
                  <li className="page_item page-item-12">
                    <a href="http://localhost/wordpress-2/my-account/">
                      My account
                    </a>
                  </li>
                  <li className="page_item page-item-2">
                    <a href="http://localhost/wordpress-2/">Sample Page</a>
                  </li>
                  <li className="page_item page-item-9 current_page_parent">
                    <a href="http://localhost/wordpress-2/shop/">Shop</a>
                  </li>
                  <li className="page_item page-item-20">
                    <a href="http://localhost/wordpress-2/this-is-sp/">
                      THIS IS SP
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header> */}
      <PageDecorator rootId={rootId} />
    </div>
  );
}

export default App;
