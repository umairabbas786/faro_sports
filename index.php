<?php include "includes/header.php";?>

<div class="wrapper">
    <?php include "includes/nav.php";?>
<main>
      <!-- Home Section -->
      <div class="swiper swiper-container" data-swiper-options='{
                  "slidesPerView": 1,
                  "spaceBetween": 0,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "clickable": true
                  },
                  "navigation": {
                    "nextEl": ".swiper-next-01",
                    "prevEl": ".swiper-prev-01"
                  },
                  "autoplay": {
                    "delay": 5000,
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
                    <h6 class="fw-lighten text-uppercase text-white mb-3 letter-spacing-6">You're Looking Good</h6>
                    <h1 class="display-1 fw-lighten text-white letter-spacing-6 text-uppercase">New LookBook</h1>
                    <div class="pt-3"><a class="btn btn-outline-white" href="#">Discover More</a></div>
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
                    <h6 class="fw-lighten text-uppercase text-white mb-3 letter-spacing-6">You're Looking Good</h6>
                    <h1 class="display-1 fw-lighten text-white letter-spacing-6 text-uppercase">New LookBook</h1>
                    <div class="pt-3"><a class="btn btn-outline-white" href="#">Discover More</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-arrow-style-01 swiper-next swiper-next-01"><i class="bi bi-chevron-right"></i></div>
        <div class="swiper-arrow-style-01 swiper-prev swiper-prev-01"><i class="bi bi-chevron-left"></i></div>
        <div class="swiper-pagination swiper-pagination-white"></div>
      </div><!-- End Home Section -->
      <!-- section -->
      <section class="py-3">
        <div class="container-fluid">
          <div class="row g-3">
            <div class="col-lg-4">
              <div class="position-relative"><img class="w-100" src="assets/img/fashion/shop-banner-1.jpg"
                  title="" alt="">
                <div
                  class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center top-0 left-0">
                  <div class="w-100 text-center">
                    <h6 class="text-uppercase fw-lighten text-white mb-3">NEW IN</h6>
                    <h3 class="fw-lighten h3 text-white">WOMEN’S</h3>
                    <div class="pt-3"><a class="btn btn-white btn-sm" href="#">Shop Now</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="position-relative"><img class="w-100" src="assets/img/fashion/shop-banner-2.jpg"
                  title="" alt="">
                <div
                  class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center top-0 left-0">
                  <div class="w-100 text-center">
                    <h6 class="text-uppercase fw-lighten text-white mb-3">NEW IN</h6>
                    <h3 class="fw-lighten h3 text-white">WOMEN’S</h3>
                    <div class="pt-3"><a class="btn btn-white btn-sm" href="#">Shop Now</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="position-relative"><img class="w-100" src="assets/img/fashion/shop-banner-3.jpg"
                  title="" alt="">
                <div
                  class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center top-0 left-0">
                  <div class="w-100 text-center">
                    <h6 class="text-uppercase fw-lighten text-white mb-3">NEW IN</h6>
                    <h3 class="fw-lighten h3 text-white">WOMEN’S</h3>
                    <div class="pt-3"><a class="btn btn-white btn-sm" href="#">Shop Now</a></div>
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
          <div class="row justify-content-center section-heading">
            <div class="col-lg-6 text-center">
              <p class="fs-6 m-0">Read Today’s News.</p>
              <h3 class="h2 mt-2">Latest Arrivals</h3>
            </div>
          </div>
          <div class="row g-2 g-sm-3 g-lg-4">
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">
                  <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid"
                        src="assets/img/fashion/product-1.jpg" title="" alt=""></a>
                    <div class="product-cart-btn"><a href="#" class="btn btn-primary btn-sm w-100"><i
                          class="fi-shopping-cart"></i> Add to cart</a></div>
                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Clothing</a>, <a href="#">Men</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>
                  <div class="nav-thumbs">
                    <div class="form-check radio-text form-check-inline"><input class="form-check-input" type="radio"
                        name="size3" id="btnradio1" checked="checked"> <label class="radio-text-label"
                        for="btnradio1">XS</label></div>
                    <div class="form-check radio-text form-check-inline"><input class="form-check-input" type="radio"
                        name="size3" id="btnradio2"> <label class="radio-text-label" for="btnradio2">S</label></div>
                    <div class="form-check radio-text form-check-inline"><input class="form-check-input" type="radio"
                        name="size3" id="btnradio3"> <label class="radio-text-label" for="btnradio3">M</label></div>
                    <div class="form-check radio-text form-check-inline"><input class="form-check-input" type="radio"
                        name="size3" id="btnradio4"> <label class="radio-text-label" for="btnradio4">L</label></div>
                  </div>
                </div>
              </div>
            </div><!-- End Product Box -->
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">
                  <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid"
                        src="assets/img/fashion/product-2.jpg" title="" alt=""></a>
                    <div class="product-cart-btn"><a href="#" class="btn btn-primary btn-sm w-100"><i
                          class="fi-shopping-cart"></i> Add to cart</a></div>
                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Clothing</a>, <a href="#">Men</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>
                  <div class="nav-thumbs">
                    <div class="form-check radio-color form-check-inline"><input class="form-check-input" type="radio"
                        name="color1" id="color_1" checked=""> <label class="radio-color-label" for="color_1"><span
                          style="background-color: #d1dceb;"></span></label></div>
                    <div class="form-check radio-color form-check-inline"><input class="form-check-input" type="radio"
                        name="color1" id="color_2"> <label class="radio-color-label" for="color_2"><span
                          style="background-color: #d1dceb;"></span></label></div>
                    <div class="form-check radio-color form-check-inline"><input class="form-check-input" type="radio"
                        name="color1" id="color_3"> <label class="radio-color-label" for="color_3"><span
                          style="background-color: #d1dceb;"></span></label></div>
                    <div class="form-check radio-color form-check-inline"><input class="form-check-input" type="radio"
                        name="color1" id="color_4"> <label class="radio-color-label" for="color_4"><span
                          style="background-color: #d1dceb;"></span></label></div>
                  </div>
                </div>
              </div>
            </div><!-- End Product Box -->
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">
                  <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid"
                        src="assets/img/fashion/product-3.jpg" title="" alt=""></a>
                    <div class="product-cart-btn"><a href="#" class="btn btn-primary btn-sm w-100"><i
                          class="fi-shopping-cart"></i> Add to cart</a></div>
                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Clothing</a>, <a href="#">Men</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>
                  <div class="nav-thumbs">
                    <div class="form-check radio-text form-check-inline"><input class="form-check-input" type="radio"
                        name="size4" id="btnradio_1" checked="checked"> <label class="radio-text-label"
                        for="btnradio_1">XS</label></div>
                    <div class="form-check radio-text form-check-inline"><input class="form-check-input" type="radio"
                        name="size4" id="btnradi_o2"> <label class="radio-text-label" for="btnradi_o2">S</label></div>
                    <div class="form-check radio-text form-check-inline"><input class="form-check-input" type="radio"
                        name="size4" id="btnradi_o3"> <label class="radio-text-label" for="btnradi_o3">M</label></div>
                    <div class="form-check radio-text form-check-inline"><input class="form-check-input" type="radio"
                        name="size4" id="btnradi_o4"> <label class="radio-text-label" for="btnradi_o4">L</label></div>
                  </div>
                </div>
              </div>
            </div><!-- End Product Box -->
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">
                  <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid"
                        src="assets/img/fashion/product-4.jpg" title="" alt=""></a>
                    <div class="product-cart-btn"><a href="#" class="btn btn-primary btn-sm w-100"><i
                          class="fi-shopping-cart"></i> Add to cart</a></div>
                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Clothing</a>, <a href="#">Men</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>
                  <div class="nav-thumbs">
                    <div class="form-check radio-color form-check-inline"><input class="form-check-input" type="radio"
                        name="color2" id="color_5" checked=""> <label class="radio-color-label" for="color_5"><span
                          style="background-color: #d1dceb;"></span></label></div>
                    <div class="form-check radio-color form-check-inline"><input class="form-check-input" type="radio"
                        name="color2" id="color_6"> <label class="radio-color-label" for="color_6"><span
                          style="background-color: #d1dceb;"></span></label></div>
                    <div class="form-check radio-color form-check-inline"><input class="form-check-input" type="radio"
                        name="color2" id="color_7"> <label class="radio-color-label" for="color_7"><span
                          style="background-color: #d1dceb;"></span></label></div>
                    <div class="form-check radio-color form-check-inline"><input class="form-check-input" type="radio"
                        name="color2" id="color_8"> <label class="radio-color-label" for="color_8"><span
                          style="background-color: #d1dceb;"></span></label></div>
                  </div>
                </div>
              </div>
            </div><!-- End Product Box -->
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">
                  <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid"
                        src="assets/img/fashion/product-5.jpg" title="" alt=""></a>
                    <div class="product-cart-btn"><a href="#" class="btn btn-primary btn-sm w-100"><i
                          class="fi-shopping-cart"></i> Add to cart</a></div>
                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Clothing</a>, <a href="#">Men</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>
                </div>
              </div>
            </div><!-- End Product Box -->
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">
                  <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid"
                        src="assets/img/fashion/product-6.jpg" title="" alt=""></a>
                    <div class="product-cart-btn"><a href="#" class="btn btn-primary btn-sm w-100"><i
                          class="fi-shopping-cart"></i> Add to cart</a></div>
                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Clothing</a>, <a href="#">Men</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>
                </div>
              </div>
            </div><!-- End Product Box -->
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">
                  <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid"
                        src="assets/img/fashion/product-7.jpg" title="" alt=""></a>
                    <div class="product-cart-btn"><a href="#" class="btn btn-primary btn-sm w-100"><i
                          class="fi-shopping-cart"></i> Add to cart</a></div>
                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Clothing</a>, <a href="#">Men</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                  <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                      class="fs-sm text-muted">$38.<small>50</small></del></div>
                </div>
              </div>
            </div><!-- End Product Box -->
            <!-- Product Box -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card-1">
                <div class="product-card-image">
                  <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                  <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                    </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                      data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                      class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                  <div class="product-media"><a href="#"><img class="img-fluid"
                        src="assets/img/fashion/product-8.jpg" title="" alt=""></a>
                    <div class="product-cart-btn"><a href="#" class="btn btn-primary btn-sm w-100"><i
                          class="fi-shopping-cart"></i> Add to cart</a></div>
                  </div>
                </div>
                <div class="product-card-info">
                  <div class="product-meta small"><a href="#">Clothing</a>, <a href="#">Men</a></div>
                  <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                      class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                  <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
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
              <h6 class="text-white mb-4">Hurry up! Limited time offer</h6>
              <h3 class="display-2 fw-lighten text-white">Nw Exclusive<br>2021 Collection</h3>
              <div class="pt-4"><a class="btn btn-outline-white" href="#">Discover More</a></div>
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
                      <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                      <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                        </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                          data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                          class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                      <div class="product-media"><a href="#"><img class="img-fluid"
                            src="assets/img/fashion/product-1.jpg" title="" alt=""></a>
                        <div class="product-cart-btn"><a href="#" class="btn btn-primary btn-sm w-100"><i
                              class="fi-shopping-cart"></i> Add to cart</a></div>
                      </div>
                    </div>
                    <div class="product-card-info">
                      <div class="product-meta small"><a href="#">Clothing</a>, <a href="#">Men</a></div>
                      <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                      <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                      <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                          class="fs-sm text-muted">$38.<small>50</small></del></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card-1">
                    <div class="product-card-image">
                      <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                      <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                        </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                          data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                          class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                      <div class="product-media"><a href="#"><img class="img-fluid"
                            src="assets/img/fashion/product-2.jpg" title="" alt=""></a>
                        <div class="product-cart-btn"><a href="#" class="btn btn-primary btn-sm w-100"><i
                              class="fi-shopping-cart"></i> Add to cart</a></div>
                      </div>
                    </div>
                    <div class="product-card-info">
                      <div class="product-meta small"><a href="#">Clothing</a>, <a href="#">Men</a></div>
                      <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                      <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                      <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                          class="fs-sm text-muted">$38.<small>50</small></del></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card-1">
                    <div class="product-card-image">
                      <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                      <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                        </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                          data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                          class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                      <div class="product-media"><a href="#"><img class="img-fluid"
                            src="assets/img/fashion/product-3.jpg" title="" alt=""></a>
                        <div class="product-cart-btn"><a href="#" class="btn btn-primary btn-sm w-100"><i
                              class="fi-shopping-cart"></i> Add to cart</a></div>
                      </div>
                    </div>
                    <div class="product-card-info">
                      <div class="product-meta small"><a href="#">Clothing</a>, <a href="#">Men</a></div>
                      <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                      <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                      <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                          class="fs-sm text-muted">$38.<small>50</small></del></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card-1">
                    <div class="product-card-image">
                      <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                      <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                        </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                          data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                          class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                      <div class="product-media"><a href="#"><img class="img-fluid"
                            src="assets/img/fashion/product-4.jpg" title="" alt=""></a>
                        <div class="product-cart-btn"><a href="#" class="btn btn-primary btn-sm w-100"><i
                              class="fi-shopping-cart"></i> Add to cart</a></div>
                      </div>
                    </div>
                    <div class="product-card-info">
                      <div class="product-meta small"><a href="#">Clothing</a>, <a href="#">Men</a></div>
                      <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                      <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                      <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                          class="fs-sm text-muted">$38.<small>50</small></del></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card-1">
                    <div class="product-card-image">
                      <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                      <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                        </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                          data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                          class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                      <div class="product-media"><a href="#"><img class="img-fluid"
                            src="assets/img/fashion/product-5.jpg" title="" alt=""></a>
                        <div class="product-cart-btn"><a href="#" class="btn btn-primary btn-sm w-100"><i
                              class="fi-shopping-cart"></i> Add to cart</a></div>
                      </div>
                    </div>
                    <div class="product-card-info">
                      <div class="product-meta small"><a href="#">Clothing</a>, <a href="#">Men</a></div>
                      <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                      <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
                      <div class="product-price"><span class="text-primary">$28.<small>50</small></span> <del
                          class="fs-sm text-muted">$38.<small>50</small></del></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="product-card-1">
                    <div class="product-card-image">
                      <div class="badge-ribbon"><span class="badge bg-danger">Sale</span></div>
                      <div class="product-action"><a href="#" class="btn btn-outline-primary"><i class="fi-heart"></i>
                        </a><a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i> </a><a
                          data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)"
                          class="btn btn-outline-primary"><i class="fi-eye"></i></a></div>
                      <div class="product-media"><a href="#"><img class="img-fluid"
                            src="assets/img/fashion/product-6.jpg" title="" alt=""></a>
                        <div class="product-cart-btn"><a href="#" class="btn btn-primary btn-sm w-100"><i
                              class="fi-shopping-cart"></i> Add to cart</a></div>
                      </div>
                    </div>
                    <div class="product-card-info">
                      <div class="product-meta small"><a href="#">Clothing</a>, <a href="#">Men</a></div>
                      <div class="rating-star text"><i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                          class="bi bi-star-fill active"></i> <i class="bi bi-star"></i></div>
                      <h6 class="product-title"><a href="#">Fine-knit sweater</a></h6>
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
                <h3 class="h1">Get -50% from<br>Summer Collection</h3>
                <h6>Hurry up! Limited time offer</h6>
                <div class="count-down count-down-01 py-4" data-countdown="January 01, 2023 15:00:00"></div>
                <div><a class="btn btn-primary" href="#">Shop Now</a></div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Count Down -->
      <!-- blog -->
      <section class="section">
        <div class="container">
          <div class="row justify-content-center mb-4">
            <div class="col-lg-6 text-center">
              <h3 class="h2 mb-2">New Blog Posts</h3>
              <p class="fs-6 m-0">Read Today’s News.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 my-3">
              <div class="hover-scale text-center">
                <div class="hover-scale-in position-relative"><a href="#"><img class="img-fluid"
                      src="assets/img/fashion/blog-home-1.jpg" title="" alt=""></a>
                  <div
                    class="position-absolute top-0 start-0 mt-3 ms-3 bg-white d-flex flex-column align-items-center px-3 py-2">
                    <span class="h4 m-0">25</span> <small>MAR</small></div>
                </div>
                <div class="pt-3 px-3">
                  <h5><a class="text-reset" href="#">Make your Marketing website</a></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p><a
                    class="btn btn-sm btn-outline-dark" href="#">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 my-3">
              <div class="hover-scale text-center">
                <div class="hover-scale-in position-relative"><a href="#"><img class="img-fluid"
                      src="assets/img/fashion/blog-home-2.jpg" title="" alt=""></a>
                  <div
                    class="position-absolute top-0 start-0 mt-3 ms-3 bg-white d-flex flex-column align-items-center px-3 py-2">
                    <span class="h4 m-0">25</span> <small>MAR</small></div>
                </div>
                <div class="pt-3 px-3">
                  <h5><a class="text-reset" href="#">Make your Marketing website</a></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p><a
                    class="btn btn-sm btn-outline-dark" href="#">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 my-3">
              <div class="hover-scale text-center">
                <div class="hover-scale-in position-relative"><a href="#"><img class="img-fluid"
                      src="assets/img/fashion/blog-home-3.jpg" title="" alt=""></a>
                  <div
                    class="position-absolute top-0 start-0 mt-3 ms-3 bg-white d-flex flex-column align-items-center px-3 py-2">
                    <span class="h4 m-0">25</span> <small>MAR</small></div>
                </div>
                <div class="pt-3 px-3">
                  <h5><a class="text-reset" href="#">Make your Marketing website</a></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p><a
                    class="btn btn-sm btn-outline-dark" href="#">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End blog -->
      <!-- Privacy Policy -->
      <section class="py-5 bg-gray-100 border-top">
        <div class="container">
          <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-3">
              <div class="d-flex">
                <div class="fs-1 lh-1 text-primary"><i class="bi bi-truck"></i></div>
                <div class="col ps-3">
                  <h6 class="mb-1">Free shipping</h6>
                  <p class="m-0">Lorem ipsum dolor sit amet</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="d-flex">
                <div class="fs-1 lh-1 text-primary"><i class="bi bi-headphones"></i></div>
                <div class="col ps-3">
                  <h6 class="mb-1">Contact us 24/7</h6>
                  <p class="m-0">Lorem ipsum dolor sit amet</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="d-flex">
                <div class="fs-1 lh-1 text-primary"><i class="bi bi-box-arrow-in-left"></i></div>
                <div class="col ps-3">
                  <h6 class="mb-1">30 Days Return</h6>
                  <p class="m-0">Lorem ipsum dolor sit amet</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="d-flex">
                <div class="fs-1 lh-1 text-primary"><i class="bi bi-shield-lock"></i></div>
                <div class="col ps-3">
                  <h6 class="mb-1">100% Secure Payment</h6>
                  <p class="m-0">Lorem ipsum dolor sit amet</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Privacy Policy -->
    </main><!-- End Main -->
<?php include "includes/footer.php";?>