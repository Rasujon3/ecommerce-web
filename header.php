<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0"
    />

    <title>RIT e-commerce</title>

    <meta
      name="keywords"
      content="RIT commerce"
    />
    <meta
      name="description"
      content="RIT is Bangladesh top leading ecommerce business"
    />
    <meta name="author" content="D-THEMES" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png" />

    <!-- WebFont.js -->
    <script>
      WebFontConfig = {
        google: { families: ["Poppins:400,600,500,700,800", "Zeyada: 400"] },
      };
      (function (d) {
        var wf = d.createElement("script"),
          s = d.scripts[0];
        wf.src = "assets/js/webfont.js";
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
    </script>

    <link
      rel="preload"
      href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2"
      as="font"
      type="font/woff2"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2"
      as="font"
      type="font/woff2"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2"
      as="font"
      type="font/woff2"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="assets/fonts/wolmart87d5.woff?png09e"
      as="font"
      type="font/woff"
      crossorigin="anonymous"
    />

    <!-- Vendor CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/vendor/fontawesome-free/css/all.min.css"
    />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/vendor/animate/animate.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/vendor/magnific-popup/magnific-popup.min.css"
    />

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo3.min.css" />
  </head>

  <body class="home">
    <div class="page-wrapper">
      <h1 class="d-none">RIT ecommerce</h1>
      <!-- Start of Header -->
      <header class="header">
        <div class="header-top">
          <div class="container">
            <div class="header-left">
              <p class="welcome-msg">
                Welcome to RIT ecommerce
              </p>
            </div>
            <div class="header-right">
              <!-- End of DropDown Menu -->

              <!-- End of Dropdown Menu -->

              <a href="contact-us.php" class="d-lg-show">Contact Us</a>
              <a href="my-account.php" class="d-lg-show">My Account</a>
              <a href="assets/ajax/login.html" class="d-lg-show login sign-in"
                ><i class="w-icon-account"></i>Sign In</a
              >
              <span class="delimiter d-lg-show">/</span>
              <a
                href="assets/ajax/login.html"
                class="ml-0 d-lg-show login register"
                >Register</a
              >
            </div>
          </div>
        </div>
        <!-- End of Header Top -->

        <div class="header-middle">
          <div class="container">
            <div class="header-left mr-md-4">
              <a
                href="#"
                class="mobile-menu-toggle w-icon-hamburger"
                aria-label="menu-toggle"
              >
              </a>
              <a href="index.php" class="logo ml-lg-0">
                <img
                  src="assets/images/demos/demo3/header-logo.png"
                  alt="logo"
                  width="144"
                  height="45"
                />
              </a>
              <form
                method="get"
                action="#"
                class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper"
              >
                <div class="select-box">
                  <select id="category" name="category" class="pb-0">
                    <option value="">All Categories</option>
                    <option value="4">Fashion</option>
                    <option value="5">Furniture</option>
                    <option value="6">Shoes</option>
                    <option value="7">Sports</option>
                    <option value="8">Games</option>
                    <option value="9">Computers</option>
                    <option value="10">Electronics</option>
                    <option value="11">Kitchen</option>
                    <option value="12">Clothing</option>
                  </select>
                </div>
                <input
                  type="text"
                  class="form-control"
                  name="search"
                  id="search"
                  placeholder="Search in..."
                  required
                />
                <button class="btn btn-search" type="submit">
                  <i class="w-icon-search"></i>
                </button>
              </form>
            </div>
            <div class="header-right ml-4">
              <div class="header-call d-xs-show d-lg-flex align-items-center">
                <a href="tel:#" class="w-icon-call"></a>
                <div class="call-info d-lg-show">
                  <h4
                    class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0"
                  >
                    <a
                      href="https://portotheme.com/cdn-cgi/l/email-protection#aa89"
                      class="text-capitalize"
                      >Call Us Now</a
                    >
                    :
                  </h4>
                  <a href="tel:#" class="phone-number font-weight-bolder ls-50"
                    >01500000000</a
                  >
                </div>
              </div>
              <a
                class="wishlist label-down link d-xs-show"
                href="wishlist.php"
              >
                <i class="w-icon-heart"></i>
                <span class="wishlist-label d-lg-show">Wishlist</span>
              </a>

              <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                <div class="cart-overlay"></div>
                <a href="#" class="cart-toggle label-down link">
                  <i class="w-icon-cart">
                    <span class="cart-count">2</span>
                  </i>
                  <span class="cart-label">Cart</span>
                </a>
                <div class="dropdown-box">
                  <div class="cart-header">
                    <span>Shopping Cart</span>
                    <a href="#" class="btn-close"
                      >Close<i class="w-icon-long-arrow-right"></i
                    ></a>
                  </div>

                  <div class="products">
                    <div class="product product-cart">
                      <div class="product-detail">
                        <a href="product-default.html" class="product-name"
                          >Beige knitted elas<br />tic runner shoes</a
                        >
                        <div class="price-box">
                          <span class="product-quantity">1</span>
                          <span class="product-price">$25.68</span>
                        </div>
                      </div>
                      <figure class="product-media">
                        <a href="product-default.html">
                          <img
                            src="assets/images/cart/product-1.jpg"
                            alt="product"
                            height="84"
                            width="94"
                          />
                        </a>
                      </figure>
                      <button
                        class="btn btn-link btn-close"
                        aria-label="button"
                      >
                        <i class="fas fa-times"></i>
                      </button>
                    </div>

                    <div class="product product-cart">
                      <div class="product-detail">
                        <a href="product-default.html" class="product-name"
                          >Blue utility pina<br />fore denim dress</a
                        >
                        <div class="price-box">
                          <span class="product-quantity">1</span>
                          <span class="product-price">$32.99</span>
                        </div>
                      </div>
                      <figure class="product-media">
                        <a href="product-default.html">
                          <img
                            src="assets/images/cart/product-2.jpg"
                            alt="product"
                            width="84"
                            height="94"
                          />
                        </a>
                      </figure>
                      <button
                        class="btn btn-link btn-close"
                        aria-label="button"
                      >
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>

                  <div class="cart-total">
                    <label>Subtotal:</label>
                    <span class="price">$58.67</span>
                  </div>

                  <div class="cart-action">
                    <a
                      href="cart.php"
                      class="btn btn-dark btn-outline btn-rounded"
                      >View Cart</a
                    >
                    <a href="checkout.php" class="btn btn-primary btn-rounded"
                      >Checkout</a
                    >
                  </div>
                </div>
                <!-- End of Dropdown Box -->
              </div>
            </div>
          </div>
        </div>
        <!-- End of Header Middle -->

        <div
          class="header-bottom sticky-content fix-top sticky-header has-dropdown"
        >
          <div class="container">
            <div class="inner-wrap">
              <div class="header-left">
                <div
                id="menu-bar"
                  class=" dropdown category-dropdown "
                  data-visible="true"
                >
                  <a
                    href="#"
                    class="text-white category-toggle"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="true"
                    data-display="static"
                    title="Browse Categories"
                  >
                    <i class="w-icon-category"></i>
                    <span>Browse Categories</span>
                  </a>

                    <?php include 'partials/category-menu.php'; ?>
                </div>
                <nav class="main-nav">
                  <ul class=" menu active-underline">
                    <li class="active ">
                      <a href="index.php">Home</a>
                    </li>
                    <li>
                      <a href="shop-banner-sidebar.php">Shop</a>
                    </li>
                    <li>
                      <a href="about-us.php">About Us</a>
                    </li>
                    <li>
                      <a href="contact-us.php">Contact Us</a>
                    </li>
                    <li>
                      <a href="faq.php">FAQ's</a>
                    </li>

                    <li>
                      <a href="my-account.php">My Account</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- End of Header -->

      <script>
        const menubar = document.getElementById('menu-bar')
        const path = window.location;
        const rootpath = path.pathname.includes('index.php')

        const pathname = path.pathname;

        console.log(pathname);

        if(!rootpath){
          if(pathname === '/ecommerce-web/'){
           
            menubar.classList.add('show-dropdown');
          } else{
            menubar.classList.remove('show-dropdown');
          }
            
        } else{
           menubar.classList.add('show-dropdown');
        }
        
      </script>