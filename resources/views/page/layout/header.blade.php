<body class="animsition">
   <!-- Header -->
   <header>
      <!-- Header desktop -->
      <div class="container-menu-desktop">
         <!-- Topbar -->
         <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">
               <!-- Logo desktop -->		
               <a href="#" class="logo">
               <!-- <img src="shop/images/icons/logo-01.png" alt="IMG-LOGO"> -->
                  vòng tay phong thủy
               </a>
               <!-- Menu desktop -->
               <div class="menu-desktop">
                  <ul class="main-menu">
                     <li class="active-menu">
                        <a href="index.html">Trang chủ</a>
                     </li>  
                     <!-- <li class="label1" data-label1="hot">
                        <a href="shoping-cart.html">Features</a>
                        </li> -->
                     <li>
                        <a href="shop/about.html">Giới thiệu về shop</a>
                     </li>
                     <li>
                        <a href="shop/contact.html">Liên hệ với shop</a>
                     </li>
                  </ul>
               </div>
               <!-- Icon header -->
               <div class="wrap-icon-header flex-w flex-r-m">
                  <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                     <i class="zmdi zmdi-search"></i>
                  </div>
                  <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{Cart::count()}}">
                      <a href="cart/danhsach"><i class="zmdi zmdi-shopping-cart"></i></a>
                  </div>
                  <!-- <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                  <i class="zmdi zmdi-favorite-outline"></i> -->
                  </a>
               </div>
            </nav>
         </div>
      </div>
      <!-- Header Mobile -->
      <div class="wrap-header-mobile">
         <!-- Logo moblie -->		
         <div class="logo-mobile">
            vòng tay phong thủy
         </div>
         <!-- Icon header -->
         <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
               <i class="zmdi zmdi-search"></i>
            </div>
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
               <i class="zmdi zmdi-shopping-cart"></i>
            </div>
            <!-- <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
            <i class="zmdi zmdi-favorite-outline"></i> -->
            </a>
         </div>
         <!-- Button show menu -->
         <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
         </div>
      </div>
      <!-- Menu Mobile -->
      <div class="menu-mobile">
         <ul class="main-menu-m">
            <li>
               <a href="index.html">Trang chủ</a>
               <span class="arrow-main-menu-m">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               </span>
            </li>
            <li>
               <a href="product.html">Tài khoản</a>
            </li>
            <li>
               <a href="about.html">Giới thiệu</a>
            </li>
            <li>
               <a href="contact.html">Liên hệ</a>
            </li>
         </ul>
      </div>
      <!-- Modal Search -->
      <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
         <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
            <img src="shop/images/icons/icon-close2.png" alt="CLOSE">
            </button>
            <form class="wrap-search-header flex-w p-l-15">
               <button class="flex-c-m trans-04">
               <i class="zmdi zmdi-search"></i>
               </button>
               <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
         </div>
      </div>
   </header>
   <!-- Cart -->
   <!-- <div class="wrap-header-cart js-panel-cart">
      <div class="s-full js-hide-cart"></div>
      <div class="header-cart flex-col-l p-l-65 p-r-25">
         <div class="header-cart-title flex-w flex-sb-m p-b-8">
            <span class="cl2"> 
				<h5><b>GIỎ HÀNG CỦA BẠN</b></h5>
            </span>
            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
               <i class="zmdi zmdi-close"></i>
            </div>
         </div>
         <div class="header-cart-content flex-w js-pscroll">
            <ul class="header-cart-wrapitem w-full">
               <li class="header-cart-item flex-w flex-t m-b-12">
                  <div class="header-cart-item-img">
                     <img src="upload/0aqn__1 (13).jpg" alt="IMG">
                  </div>
                  <div class="header-cart-item-txt p-t-8">
                     <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                     	<h5>Tên sản phẩm</h5>
                     </a>
                     <span class="header-cart-item-info">
                     1 x 100K
                     </span>
                  </div>
               </li>
            </ul>
            <div class="w-full">
               <div class="header-cart-total w-full p-tb-40">
                  Tổng thiệt hại: 100K
               </div>
               <div class="header-cart-buttons w-full">
                  <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
					<b>chi tiết</b>
				  </a>
               </div>
            </div>
         </div>
      </div>
   </div> -->