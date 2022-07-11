<?php include "includes/header.php";?>
<style>
  .swiper-button-disabled {
    display: none;
  }
</style>

<body style="background-color:black;">
  <div class="wrapper">
    <?php include "includes/nav.php";?>
    <main>
      <section class="py-6">
        <div class="container">
          <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-4 col-xl-3 pe-xl-5 pt-9 pt-lg-0 shop-mob-toggle collapse d-lg-block" id="shop_filter">
              <!-- Mobile Toggle --> <button class="shop-sidebar-toggle-btn btn-close d-lg-none" type="button"
                data-bs-toggle="collapse" data-bs-target="#shop_filter" aria-controls="shop_filter"
                aria-expanded="false" aria-label="Toggle navigation"></button><!-- End Mobile Toggle -->
              <!-- Categories -->
              <div class="shop-sidebar-block">
                <div class="shop-sidebar-title"><a style="color: #CC0000;" class="h5" data-bs-toggle="collapse"
                    href="#shop_categories" role="button" aria-expanded="true"
                    aria-controls="shop_categories">Categories <i class="bi bi-chevron-up"></i></a>
                </div>
                <div class="shop-category-list collapse show" id="shop_categories">
                  <ul class="nav flex-column">
                    <li class="nav-item"><a style="color: #CC0000;" href="#" class="nav-link active">All Products</a>
                    </li>
                    <li class="nav-item"><a style="color: white;" href="#" class="nav-link">Sports Wear</a> <a
                        data-bs-toggle="collapse" href="#shop_cat_1" role="button" aria-expanded="false"
                        aria-controls="shop_cat_1" class="s-icon" style="color: white;">+</a>
                      <div class="collapse" id="shop_cat_1">
                        <ul class="nav nav-pills flex-column nav-hierarchy">
                          <li class="nav-item"><a href="#" class="nav-link">Football Uniforms</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Basketball Uniforms</a>
                          </li>
                          <li class="nav-item"><a href="#" class="nav-link">Baseball Uniforms</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Boxing Uniforms</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Cycling Uniforms</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Running & Athletics</a>
                          </li>
                          <li class="nav-item"><a href="#" class="nav-link">MMA Uniforms</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Paddle Uniforms</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Tennis Uniforms</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item"><a style="color: white;" href="#" class="nav-link">Sports Gear</a> <a
                        data-bs-toggle="collapse" href="#shop_cat_2" role="button" aria-expanded="false"
                        aria-controls="shop_cat_2" class="s-icon" style="color: white;">+</a>
                      <div class="collapse" id="shop_cat_2">
                        <ul class="nav nav-pills flex-column nav-hierarchy">
                          <li class="nav-item"><a href="#" class="nav-link">Boxing Gear
                            </a></li>
                          <li class="nav-item"><a href="#" class="nav-link">MMA Gear</a>
                          </li>

                        </ul>
                      </div>
                    </li>
                    <li class="nav-item"><a style="color: white;" href="#" class="nav-link">Accessories</a> <a
                        data-bs-toggle="collapse" href="#shop_cat_3" role="button" aria-expanded="false"
                        aria-controls="shop_cat_3" class="s-icon" style="color: white;">+</a>
                      <div class="collapse" id="shop_cat_3">
                        <ul class="nav nav-pills flex-column nav-hierarchy">
                          <li class="nav-item"><a href="#" class="nav-link">Socks</a>
                          </li>
                          <li class="nav-item"><a href="#" class="nav-link">Bags</a>
                          </li>
                          <li class="nav-item"><a href="#" class="nav-link">Flags</a>
                          </li>
                          <li class="nav-item"><a href="#" class="nav-link">Masks</a>
                          </li>
                        </ul>
                      </div>
                    </li>

                  </ul>
                </div>
              </div><!-- End Categories -->
              <!-- gender -->
            </div><!-- End Sidebar -->
            <!-- Product Box -->
            <div class="col-lg-8 col-xl-9">
              <div class="shop-top-bar d-flex pb-3">
                <div class="layout-change">
                  <!-- Mobile Toggle --> <button class="btn btn-sm d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#shop_filter" aria-controls="shop_filter" aria-expanded="false"
                    aria-label="Toggle navigation"><i class="fs-4 lh-1 bi bi-justify-left"></i></button>
                  <!-- End Mobile Toggle -->
                  <a class="btn btn-sm active" href="#"><i class="bi bi-grid"></i></a> <a class="btn btn-sm"
                    href="shop-list.html"><i class="bi bi-view-stacked"></i></a>
                </div>
                <div class="shop-mob-button"></div>

              </div>
              <div class="row g-3">
                <h3 style="color: #CC0000;">Sports Wear</h3>
                <!-- Product Box -->
                <div class="col-sm-6 col-lg-4">
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
                </div><!-- End Product Box -->
                <!-- Product Box -->
                <div class="col-sm-6 col-lg-4">
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
                </div><!-- End Product Box -->
                <!-- Product Box -->
                <div class="col-sm-6 col-lg-4">
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
                </div><!-- End Product Box -->
                <!-- Product Box -->
                <div class="col-sm-6 col-lg-4">
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
                </div><!-- End Product Box -->
              </div>
              <!-- <div class="shop-bottom-bar d-flex align-items-center mt-3">
                                <div>Showing: 1 - 12 of 17</div>
                                <div class="ms-auto">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                                    aria-hidden="true">&laquo;</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                                    aria-hidden="true">&raquo;</span></a></li>
                                    </ul>
                                </div>
                            </div> -->
            </div><!-- End Product Box -->

          </div>
        </div>
      </section>



      <?php include "includes/footer.php";?>
  </div>