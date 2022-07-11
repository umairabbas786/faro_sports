<?php include "includes/header.php";?>
<style>
  .swiper-button-disabled{
    display:none;   
}
</style>
<div class="wrapper">
  <?php include "includes/nav.php";?>
  <main>

    <body style="background-color:black;">
      <!-- Home Section -->
      <div id="particles-js" style="position:absolute;z-index:9;height:85vh;width:100%;"></div>
      <div class="swiper swiper-container" data-swiper-options='{
                  "slidesPerView": 1,
                  "spaceBetween": 0,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "clickable": false
                  },
                  "navigation": {
                    "nextEl": ".swiper-next-01",
                    "prevEl": ".swiper-prev-01"
                  },
                  "autoplay": {
                    "delay": 3000,
                    "disableOnInteraction": false
                  }
                }'>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="bg-no-repeat bg-cover bg-center"
              style="background-image: url(assets/img/fashion/home-banner-1.jpg);">
              <div class="container">
                <div class="row min-vh-85 align-items-center justify-content-center py-12">
                  <div class="col-lg-8 text-center">
                    <h2 class="fw-lighten text-uppercase text-black mb-3 letter-spacing-6" style="-webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: white;">Welcome To</h2>
                    <h1 class="display-1 fw-lighten text-black letter-spacing-6 text-uppercase" style="-webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: white;">Faro Sports</h1>
                    <!-- <div class="pt-3"><a class="btn btn-outline-white" style="-webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: black; font-size:25px;" href="#">Discover More</a></div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="bg-no-repeat bg-cover bg-center"
              style="background-image: url(assets/img/fashion/home-banner-2.jpg);">
              <div class="container">
                <div class="row min-vh-85 align-items-center justify-content-center py-12">
                  <div class="col-lg-8 text-center">
                    <h2 class="fw-lighten text-uppercase text-black mb-3 letter-spacing-6" style="-webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: white;">Welcome To</h2>
                    <h1 class="display-1 fw-lighten text-black letter-spacing-6 text-uppercase" style="-webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: white;">Faro Sports</h1>
                    <!-- <div class="pt-3"><a class="btn btn-outline-black" style="-webkit-text-stroke-width: 2px;-webkit-text-stroke-color: black; font-size:25px;z-index:999" href="#">Discover More</a></div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="swiper-arrow-style-01 swiper-next swiper-next-01"><i class="bi bi-chevron-right"></i></div>
        <div class="swiper-arrow-style-01 swiper-prev swiper-prev-01"><i class="bi bi-chevron-left"></i></div> -->
        <div class="swiper-pagination swiper-pagination-white"></div>
      </div><!-- End Home Section -->
      <!-- section -->
      <section class="py-3">
        <div class="container-fluid">
          <div class="row g-3">
            <div class="col-lg-4">
              <div class="position-relative"><img src="assets/img/fashion/shop-banner-1.jpg"
                  title="" alt="">
                <div
                  class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center top-0 left-0">
                  <div class="w-100 text-center">
                    <h6 class="text-uppercase fw-lighten text-white mb-3">Sports</h6>
                    <h3 class="fw-lighten h3 text-white">Wear</h3>
                    <div class="pt-3"><a class="btn btn-white btn-sm" href="products.php">Discover Now</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="position-relative"><img src="assets/img/fashion/shop-banner-2.jpg"
                  title="" alt="">
                <div
                  class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center top-0 left-0">
                  <div class="w-100 text-center">
                    <h6 class="text-uppercase fw-lighten text-white mb-3">Sports</h6>
                    <h3 class="fw-lighten h3 text-white">Gear</h3>
                    <div class="pt-3"><a class="btn btn-white btn-sm" href="products.php">Discover Now</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="position-relative"><img src="assets/img/fashion/shop-banner-3.jpg"
                  title="" alt="">
                <div
                  class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center top-0 left-0">
                  <div class="w-100 text-center">
                    <h6 class="text-uppercase fw-lighten text-white mb-3">Sports</h6>
                    <h3 class="fw-lighten h3 text-white">Accessories</h3>
                    <div class="pt-3"><a class="btn btn-white btn-sm" href="products.php">Discover Now</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End section -->
      <!-- Product section -->
      <section class="section">
        <div class="container">
          
          <div class="row g-2 g-sm-3 g-lg-4">
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">

                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid" src="assets/img/fashion/product-1.jpg"
                        title="" alt=""></a>

                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Product</a>, <a href="#">type</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Product Name</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>

                </div>
              </div>
            </div><!-- End Product Box -->
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">

                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid" src="assets/img/fashion/product-2.jpg"
                        title="" alt=""></a>

                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Product</a>, <a href="#">type</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Product Name</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>

                </div>
              </div>
            </div><!-- End Product Box -->
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">

                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid" src="assets/img/fashion/product-3.jpg"
                        title="" alt=""></a>

                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Product</a>, <a href="#">type</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Product Name</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>

                </div>
              </div>
            </div><!-- End Product Box -->
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">

                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid" src="assets/img/fashion/product-4.jpg"
                        title="" alt=""></a>

                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Product</a>, <a href="#">type</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Product Name</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>

                </div>
              </div>
            </div><!-- End Product Box -->
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">

                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid" src="assets/img/fashion/product-5.jpg"
                        title="" alt=""></a>

                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Product</a>, <a href="#">type</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Product Name</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>

                </div>
              </div>
            </div><!-- End Product Box -->
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">

                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid" src="assets/img/fashion/product-6.jpg"
                        title="" alt=""></a>

                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Product</a>, <a href="#">type</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Product Name</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>

                </div>
              </div>
            </div><!-- End Product Box -->
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">

                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid" src="assets/img/fashion/product-7.jpg"
                        title="" alt=""></a>

                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Product</a>, <a href="#">type</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Product Name</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>

                </div>
              </div>
            </div><!-- End Product Box -->
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">

                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid" src="assets/img/fashion/product-8.jpg"
                        title="" alt=""></a>

                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Product</a>, <a href="#">type</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Product Name</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>

                </div>
              </div>
            </div><!-- End Product Box -->
          </div>
        </div>
      </section><!-- End Product section -->
      <!-- call to action -->
      <section class="py-12 bg-cover bg-center bg-no-repeat"
        style="background-image: url(assets/img/fashion/bg-banner-1.jpg);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
              
              <h3 class="display-2 fw-lighten text-white"style="-webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: black;">New Exclusive<br>2022 Collection</h3>
              <div class="pt-4"><a class="btn btn-outline-white" href="products.php">Discover More</a></div>
            </div>
          </div>
        </div>
      </section><!-- End call to action -->
      <!-- Product section -->
      <!-- section -->
      <section class="section">
        <div class="container">
          <div class="row justify-content-center section-heading">
            <div class="col-lg-6 text-center">
              <h3 class="fw-500 h2 m-0">Browse our Bestsellers</h3>
            </div>
          </div>
          <div class="swiper-hover-arrow position-relative">
            <div class="swiper swiper-container" data-swiper-options='{
                              "slidesPerView": 2,
                              "spaceBetween": 10,
                              "loop": true,
                              "pagination": {
                                "el": ".swiper-pagination",
                                "clickable": true
                                },
                              "navigation": {
                                "nextEl": ".swiper-next-02",
                                "prevEl": ".swiper-prev-02"
                              },
                              "autoplay": {
                                "delay": 3500,
                                "disableOnInteraction": false
                              },
                              "breakpoints": {
                                "600": {
                                  "slidesPerView": 3
                                },
                                "991": {
                                  "slidesPerView": 3,
                                  "spaceBetween": 24
                                },
                                "1200": {
                                  "slidesPerView": 4,
                                  "spaceBetween": 24
                                }
                              }
                        }'>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="product-card-1">
                    <div class="product-card-image">

                      <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                        </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                          data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                          class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                      <div class="product-media"><a href="#"><img class="img-fluid"
                            src="assets/img/fashion/product-1.jpg" title="" alt=""></a>

                      </div>
                    </div>
                    <div class="product-card-info">
                      <div class="product-meta small"><a href="#">Product</a>, <a href="#">type</a></div>
                      <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                      <h6 class="product-title"><a href="#">Product Name</a></h6>
                      <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                          class="fs-sm text-muted">$38.<small>50</small></del></div>

                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card-1">
                    <div class="product-card-image">

                      <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                        </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                          data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                          class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                      <div class="product-media"><a href="#"><img class="img-fluid"
                            src="assets/img/fashion/product-2.jpg" title="" alt=""></a>

                      </div>
                    </div>
                    <div class="product-card-info">
                      <div class="product-meta small"><a href="#">Product</a>, <a href="#">type</a></div>
                      <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                      <h6 class="product-title"><a href="#">Product Name</a></h6>
                      <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                          class="fs-sm text-muted">$38.<small>50</small></del></div>

                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card-1">
                    <div class="product-card-image">

                      <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                        </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                          data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                          class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                      <div class="product-media"><a href="#"><img class="img-fluid"
                            src="assets/img/fashion/product-3.jpg" title="" alt=""></a>

                      </div>
                    </div>
                    <div class="product-card-info">
                      <div class="product-meta small"><a href="#">Product</a>, <a href="#">type</a></div>
                      <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                      <h6 class="product-title"><a href="#">Product Name</a></h6>
                      <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                          class="fs-sm text-muted">$38.<small>50</small></del></div>

                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card-1">
                    <div class="product-card-image">

                      <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                        </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                          data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                          class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                      <div class="product-media"><a href="#"><img class="img-fluid"
                            src="assets/img/fashion/product-4.jpg" title="" alt=""></a>

                      </div>
                    </div>
                    <div class="product-card-info">
                      <div class="product-meta small"><a href="#">Product</a>, <a href="#">type</a></div>
                      <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                      <h6 class="product-title"><a href="#">Product Name</a></h6>
                      <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                          class="fs-sm text-muted">$38.<small>50</small></del></div>

                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card-1">
                    <div class="product-card-image">

                      <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                        </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                          data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                          class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                      <div class="product-media"><a href="#"><img class="img-fluid"
                            src="assets/img/fashion/product-5.jpg" title="" alt=""></a>

                      </div>
                    </div>
                    <div class="product-card-info">
                      <div class="product-meta small"><a href="#">Product</a>, <a href="#">type</a></div>
                      <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                      <h6 class="product-title"><a href="#">Product Name</a></h6>
                      <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                          class="fs-sm text-muted">$38.<small>50</small></del></div>

                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card-1">
                    <div class="product-card-image">

                      <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                        </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                          data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                          class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                      <div class="product-media"><a href="#"><img class="img-fluid"
                            src="assets/img/fashion/product-6.jpg" title="" alt=""></a>

                      </div>
                    </div>
                    <div class="product-card-info">
                      <div class="product-meta small"><a href="#">Product</a>, <a href="#">type</a></div>
                      <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                      <h6 class="product-title"><a href="#">Product Name</a></h6>
                      <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                          class="fs-sm text-muted">$38.<small>50</small></del></div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination mt-4 d-lg-none position-relative"></div>
            </div>
            <div class="swiper-arrow-style-02 swiper-next swiper-next-02"><i class="bi bi-chevron-right"></i></div>
            <div class="swiper-arrow-style-02 swiper-prev swiper-prev-02"><i class="bi bi-chevron-left"></i></div>
          </div>
        </div>
      </section><!-- End section -->
      <!-- End Product section -->
      <!-- Count Down -->
      <section class="bg-cover bg-no-repeat" style="background-image: url(assets/img/fashion/bg-banner-2.jpg);">
        <div class="container">
          <div class="row justify-content-end py-12">
            <div class="col-md-8 col-lg-6 col-xxl-5 py-lg-8">
              <div class="p-4 p-xl-6 bg-white">
                <h3 class="h1">Get  in touch<br>Now</h3>
                <h6>For 2022 Collections</h6>
                <div class="count-down count-down-01 py-4" data-countdown="January 01, 2023 15:00:00"></div>
                <div><a class="btn btn-primary" href="products.php">discover Now</a></div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Count Down -->
      <!-- blog -->
      
      <!-- Privacy Policy -->
      <section class="py-5 border-top" style="background-color: #676F67;">
        <div class="container">
          <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-3">
              <div class="d-flex">
                <div class="fs-1 lh-1 text-primary"><i class="bi bi-truck"></i></div>
                <div class="col ps-3">
                  <h6 class="mb-1">Free shipping</h6>
                  <p class="m-0" style="color: black;">Lorem ipsum dolor sit amet</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="d-flex">
                <div class="fs-1 lh-1 text-primary"><i class="bi bi-headphones"></i></div>
                <div class="col ps-3">
                  <h6 class="mb-1">Contact us 24/7</h6>
                  <p class="m-0" style="color: black;">Lorem ipsum dolor sit amet</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="d-flex">
                <div class="fs-1 lh-1 text-primary"><i class="bi bi-box-arrow-in-left"></i></div>
                <div class="col ps-3">
                  <h6 class="mb-1">30 Days Return</h6>
                  <p class="m-0" style="color: black;">Lorem ipsum dolor sit amet</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="d-flex">
                <div class="fs-1 lh-1 text-primary"><i class="bi bi-shield-lock"></i></div>
                <div class="col ps-3">
                  <h6 class="mb-1">100% Secure Payment</h6>
                  <p class="m-0" style="color: black;">Lorem ipsum dolor sit amet</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Privacy Policy -->
  </main><!-- End Main -->
  <?php include "includes/footer.php";?>
  <script src="assets/js/app.js"></script>
  <script src="assets/js/particles.js"></script>