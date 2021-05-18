import React from "react";

const HeaderApp = () => {
  return (
    <header id="masthead" className="site-header">
      <div className="site-header-wrap container mx-auto flex items-center justify-between">
        <div className="site-branding">
          <a
            href="http://b-bvietnam.com/"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
              className="block max-h-16 lg:max-h-20"
              src="http://b-bvietnam.com/wp-content/uploads/2021/05/04e94db80fabfaf5a3ba.jpg"
              alt=""
            />
          </a>
        </div>

        <nav id="site-navigation" className="main-navigation">
          <button
            id="menu-toggle"
            className="menu-toggle text-2xl text-gray-900"
            aria-expanded="false"
          >
            <i className="las la-bars"></i>
          </button>
          <div id="primary-menu-wrap" className="flex items-center">
            <button
              id="close-menu-toggle"
              className="block md:hidden text-2xl text-gray-900 absolute right-0 top-0 p-2"
            >
              <i className="las la-times"></i>
            </button>
            <div className="menu-menu-1-container">
              <ul id="primary-menu" className="menu nav-menu">
                <li
                  id="menu-item-129"
                  className="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-32 current_page_item menu-item-129"
                >
                  <a href="http://b-bvietnam.com/" aria-current="page">
                    Trang chủ
                  </a>
                </li>
                <li
                  id="menu-item-125"
                  className="menu-item menu-item-type-post_type menu-item-object-page menu-item-125"
                >
                  <a href="http://b-bvietnam.com/trang-bai-viet/">Bài viết</a>
                </li>
                <li
                  id="menu-item-126"
                  className="menu-item menu-item-type-post_type menu-item-object-page menu-item-126"
                >
                  <a href="http://b-bvietnam.com/trang-san-pham/">Sản phẩm</a>
                </li>
                <li
                  id="menu-item-127"
                  className="menu-item menu-item-type-custom menu-item-object-custom menu-item-127"
                >
                  <a href="#">Liên hệ</a>
                </li>
              </ul>
            </div>
            <button
              className="text-gray-600 dark:text-gray-200 ml-12"
              data-switch-night-mode
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                className="h-8 w-8"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth={2}
                  d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                />
              </svg>
            </button>
          </div>
        </nav>
      </div>
    </header>
  );
};

export default HeaderApp;
