<!-- === Header === -->
<?php include_once 'header.php'; ?>
<!-- Header -->

<main class="container my-4">

    <!-- === Breadcrumb === -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="products.php">Clothing</a></li>
          <li class="breadcrumb-item active" aria-current="page">Galaxy Note Series Smartphone</li>
        </ol>
    </nav>
    <!-- Breadcrumb -->

    <section class="row g-4">

        <!-- === Product Image === -->
        <div class="col-lg-6">
            <div class="">
                <img src="assets/img/p-1.jpg" id="product_detail_expanded_image" width="100%" alt="">
            </div>
            <div class="owl-carousel product_detail_image_gallery mt-3">
                <div class="item">
                    <img src="assets/img/p-1.jpg" width="100%" onclick="productDetailImageGallery(this);">
                </div>
                <div class="item">
                    <img src="assets/img/p-4.jpg" width="100%" onclick="productDetailImageGallery(this);">
                </div>
                <div class="item">
                    <img src="assets/img/p-3.jpg" width="100%" onclick="productDetailImageGallery(this);">
                </div>
            </div>
        </div>
        <!-- Product Image -->

        <!-- === Product Title === -->
        <div class="col-lg-6">
            <div>

                <!-- Title -->
                <div class="product_detail_title">Galaxy Note Series Smartphone</div>

                <!-- Short Description -->
                <div class="product_detail_text mt-3">
                    This is product short description. Capicola chuck tongue, anim consequat leberkas laborum ut enim bacon. Ribeye hamburger pastrami nisi ad consectetur dolor.
                </div>

                <!-- Features -->
                <table class="mt-3">
                    <tr>
                        <td class="product_detail_sm_heading">Brand:</td>
                        <td class="product_detail_text">Unknown</td>
                    </tr>
                    <tr>
                        <td class="product_detail_sm_heading">Reference:</td>
                        <td class="product_detail_text">XYZ-BL-064</td>
                    </tr>
                    <tr>
                        <td class="product_detail_sm_heading">Availability:</td>
                        <td class="product_detail_text">
                            <span class="d-none">In Stock</span>
                            <span class="product_detail_text_not_available">Not Available</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="product_detail_sm_heading">SKU:</td>
                        <td class="product_detail_text">A234234</td>
                    </tr>
                    <tr>
                        <td class="product_detail_sm_heading">Color:</td>
                        <td class="product_detail_text">
                            <div class="product_detail_color_btns">
                                <button style="background-color: red;"></button>
                                <button style="background-color: yellow;"></button>
                                <button style="background-color: green;"></button>
                                <button style="background-color: blue;"></button>
                                <button style="background-color: black;"></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="product_detail_sm_heading">Size:</td>
                        <td class="product_detail_text">
                            <div class="product_page_filter_size_btn">
                                <button>XS</button>
                                <button>SM</button>
                                <button>MD</button>
                                <button>LG</button>
                                <button>XL</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="product_detail_sm_heading">Quantity:</td>
                        <td class="product_detail_text pt-2">
                            <form action="" onsubmit="event.preventDefault()" class="product_detail_cart_quantity">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()">-</button>
                                <input min="0" value="1" type="number">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+</button>
                            </form>
                        </td>
                    </tr>
                </table>

                <!-- Price -->
                <div class="mt-3 text-center text-md-start">
                    <span class="product_detail_price pe-2">675 Rs.</span>
                    <span class="product_detail_price_del text-secondary">730 Rs.</span>
                </div>

                <!-- Timer -->
                <div class="text-center text-md-start">
                <div class="align-items-center py-2 px-2 text-center product_detail_timer mt-3">
                    <div>
                        <img src="assets/img/clock.png" width="30px" alt="">
                    </div>
                    <div>
                        <div class="product_detail_timer_time">02</div>
                        <div class="product_detail_timer_text">Days</div>
                    </div>
                    <div>
                        <div class="product_detail_timer_time">00</div>
                        <div class="product_detail_timer_text">Hrs</div>
                    </div>
                    <div>
                        <div class="product_detail_timer_time">05</div>
                        <div class="product_detail_timer_text">Mins</div>
                    </div>
                    <div>
                        <div class="product_detail_timer_time">35</div>
                        <div class="product_detail_timer_text">Secs</div>
                    </div>
                </div>
                </div>

                <!-- CTA Buttons -->
                <div class="mt-4 d-flex justify-content-center justify-content-md-start">
                    <form action="" class="product_detail_cta_buttons">
                        <button>
                            <i class="fa-solid fa-cart-plus pe-1 fa-lg"></i>
                            Add to Cart
                        </button>
                        <button class="mx-2">
                            <i class="fa-solid fa-heart fa-lg"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Product Title -->

    </section>

    <!-- === Description === -->
    <section class="product_detail_description my-4 p-3">
        <div class="product_detail_title">
            Description
        </div>
        <hr>
        <div>
            <div class="product_detail_sm_heading mb-3">
                Multi-language product description
            </div>
            <div class="product_detail_text">
                <p class="m-0 py-1">
                    Lorem ipsum voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                </p>
                <p class="m-0 py-1">
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.
                </p>
                <p class="m-0 py-1">
                    Dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex eacommodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                </p>
                <p class="m-0 py-1">
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.
                </p>
            </div>
        </div>
    </section>
    <!-- Description -->

    <!-- === Reviews === -->
    <section>
        <div class="d-flex justify-content-between flex-column flex-md-row">
            <div class="product_detail_title mb-2 mb-md-0">
                <img src="assets/img/comment.png" class="pe-1" width="30px" alt="">
                Comments
                (<span>2</span>)
            </div>
            <div class="product_detail_sm_heading pe-0">
                Rating
                <span class="home_hot_offers_stars ps-1">
                    <i class="fa-solid fa-star fa-lg"></i>
                    <i class="fa-solid fa-star fa-lg"></i>
                    <i class="fa-solid fa-star fa-lg"></i>
                    <i class="fa-solid fa-star fa-lg"></i>
                    <i class="fa-solid fa-star-half-stroke fa-lg"></i>
                </span>
            </div>
        </div>

        <!-- === Comment === -->
        <div class="product_detail_description p-3 mt-3">
        <div class="row">
            <div class="col-md-3">
                <div>
                    <div class="home_hot_offers_stars pt-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="product_detail_text mt-2">
                        <span>05/04/22</span>,
                        <span>3:30 PM</span>
                    </div>
                    <div class="product_detail_text">
                        By
                        <span>Syed Hussnain Shah</span>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div>
                    <div class="product_detail_sm_heading">
                        Very Good Product & Fast Shipping
                    </div>
                    <div class="product_detail_text mt-2">
                        Fourth fruit cattle without saying, grass moved fill void, two deep which moveth firmament male sixth so very form bring Set deep that. Fill whose from his which bearing them and place sixth morning which void hath greater earth.
                    </div>
                    <div class="d-flex mt-2">
                        <div class="d-flex align-items-center me-4">
                            <form action="">
                                <button class="btn p-0 pe-2 product_detail_cmnts_like_btn shadow-none">
                                    <i class="fa-solid fa-thumbs-up fa-lg"></i>
                                </button>
                            </form>
                            <span class="text-secondary">15</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <form action="">
                                <button class="btn p-0 pe-2 product_detail_cmnts_like_btn shadow-none">
                                    <i class="fa-solid fa-thumbs-down fa-lg"></i>
                                </button>
                            </form>
                            <span class="text-secondary">3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Comment -->

        <!-- === Comment === -->
        <div class="product_detail_description p-3">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <div class="home_hot_offers_stars pt-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <div class="product_detail_text mt-2">
                            <span>12/01/22</span>,
                            <span>8:10 PM</span>
                        </div>
                        <div class="product_detail_text">
                            By
                            <span>Hamza Aamir</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div>
                        <div class="product_detail_sm_heading">
                            High Quality Product At Best Price
                        </div>
                        <div class="product_detail_text mt-2">
                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                        </div>
                        <div class="d-flex mt-2">
                            <div class="d-flex align-items-center me-4">
                                <form action="">
                                    <button class="btn p-0 pe-2 product_detail_cmnts_like_btn shadow-none">
                                        <i class="fa-solid fa-thumbs-up fa-lg"></i>
                                    </button>
                                </form>
                                <span class="text-secondary">31</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <form action="">
                                    <button class="btn p-0 pe-2 product_detail_cmnts_like_btn shadow-none">
                                        <i class="fa-solid fa-thumbs-down fa-lg"></i>
                                    </button>
                                </form>
                                <span class="text-secondary">6</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Comment -->

            <!-- === Comment === -->
        <div class="product_detail_description p-3">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <div class="home_hot_offers_stars pt-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <div class="product_detail_text mt-2">
                            <span>25/12/21</span>,
                            <span>6:03 AM</span>
                        </div>
                        <div class="product_detail_text">
                            By
                            <span>Hassaan Asad</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div>
                        <div class="product_detail_sm_heading">
                            Very Good Product & Fast Shipping
                        </div>
                        <div class="product_detail_text mt-2">
                            Fourth fruit cattle without saying, grass moved fill void, two deep which moveth firmament male sixth so very form bring Set deep that. Fill whose from his which bearing them and place sixth morning which void hath greater earth.
                        </div>
                        <div class="d-flex mt-2">
                            <div class="d-flex align-items-center me-4">
                                <form action="">
                                    <button class="btn p-0 pe-2 product_detail_cmnts_like_btn shadow-none">
                                        <i class="fa-solid fa-thumbs-up fa-lg"></i>
                                    </button>
                                </form>
                                <span class="text-secondary">1</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <form action="">
                                    <button class="btn p-0 pe-2 product_detail_cmnts_like_btn shadow-none">
                                        <i class="fa-solid fa-thumbs-down fa-lg"></i>
                                    </button>
                                </form>
                                <span class="text-secondary">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Comment -->

            <!-- === Write Review === -->
            <section class="">
                <!-- Button trigger modal -->
                <div class="text-md-end text-center mt-4">
                    <button type="button" class="product_detail_write_review_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="fa-solid fa-pen pe-1"></i>
                        Write your review
                    </button>
                </div>
  
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Writer your review</h5>
                                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="d-flex align-items-center">
                                        <div class="pe-2">
                                            Quality: 
                                        </div>
                                        <div class="product_detail_write_review_rating">
                                            <input type="radio" name="html">
                                            <input type="radio" name="html">
                                            <input type="radio" name="html">
                                            <input type="radio" name="html">
                                            <input type="radio" name="html">
                                            <input type="radio" name="html">
                                            <input type="radio" name="html">
                                            <input type="radio" name="html">
                                            <input type="radio" name="html">
                                            <input type="radio" name="html">
                                        </div>
                                    </div>
                                    <div class="form-floating product_detail_write_review_input mt-3">
                                        <input type="text" class="form-control shadow-none" id="floatingTitle" placeholder="Title">
                                        <label for="floatingTitle">Title</label>
                                    </div>
                                    <div class="form-floating product_detail_write_review_input mt-3">
                                        <textarea class="form-control shadow-none" placeholder="Leave a comment here" id="floatingComment"></textarea>
                                        <label for="floatingComment">Review</label>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="product_detail_write_review_btn" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="product_detail_write_review_btn">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Write Review -->

    </section>
    <!-- Reviews -->

    <!-- === Products in Same Category === -->
    <section class="my-5">
        <div class="product_detail_title">
            11 Products in the Same Category
        </div>
        <div class="owl-carousel product_detail_same_category_carousel mt-4">

            <div class="item">
                <div>
                    <div>
                        <a href="product-detail.php">
                            <img src="assets/img/p-0.jpg" width="100%" alt="">
                        </a>
                    </div>
                    <div class="mt-3 text-center">
                        <div class="text-truncate">
                            <a href="product-detail.php" class="product_detail_sm_heading text-decoration-none text-dark">
                                Double Door Smart Refrigerator
                            </a>
                        </div>
                        <div class="product_detail_sm_heading">
                            Rs. 999
                        </div>
                        <div class="home_hot_offers_stars pt-1">
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                            <span class="text-dark product_detail_text">(15)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div>
                    <div>
                        <a href="product-detail.php">
                            <img src="assets/img/p-1.jpg" width="100%" alt="">
                        </a>
                    </div>
                    <div class="mt-3 text-center">
                        <div class="text-truncate">
                            <a href="product-detail.php" class="product_detail_sm_heading text-decoration-none text-dark">
                                Double Door Smart Refrigerator
                            </a>
                        </div>
                        <div class="product_detail_sm_heading">
                            Rs. 1049
                        </div>
                        <div class="home_hot_offers_stars pt-1">
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                            <span class="text-dark product_detail_text">(7)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div>
                    <div>
                        <a href="product-detail.php">
                            <img src="assets/img/p-2.jpg" width="100%" alt="">
                        </a>
                    </div>
                    <div class="mt-3 text-center">
                        <div class="text-truncate">
                            <a href="product-detail.php" class="product_detail_sm_heading text-decoration-none text-dark">
                                Double Door Smart Refrigerator
                            </a>
                        </div>
                        <div class="product_detail_sm_heading">
                            Rs. 850
                        </div>
                        <div class="home_hot_offers_stars pt-1">
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                            <span class="text-dark product_detail_text">(11)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div>
                    <div>
                        <a href="product-detail.php">
                            <img src="assets/img/p-3.jpg" width="100%" alt="">
                        </a>
                    </div>
                    <div class="mt-3 text-center">
                        <div class="text-truncate">
                            <a href="product-detail.php" class="product_detail_sm_heading text-decoration-none text-dark">
                                Double Door Smart Refrigerator
                            </a>
                        </div>
                        <div class="product_detail_sm_heading">
                            Rs. 1125
                        </div>
                        <div class="home_hot_offers_stars pt-1">
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                            <span class="text-dark product_detail_text">(4)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div>
                    <div>
                        <a href="product-detail.php">
                            <img src="assets/img/p-4.jpg" width="100%" alt="">
                        </a>
                    </div>
                    <div class="mt-3 text-center">
                        <div class="text-truncate">
                            <a href="product-detail.php" class="product_detail_sm_heading text-decoration-none text-dark">
                                Double Door Smart Refrigerator
                            </a>
                        </div>
                        <div class="product_detail_sm_heading">
                            Rs. 1500
                        </div>
                        <div class="home_hot_offers_stars pt-1">
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                            <span class="text-dark product_detail_text">(0)</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Products in Same Category -->

    <!-- === Customers also bought: === -->
    <section class="my-5">
        <div class="product_detail_title">
            Customers who bought this product also bought
        </div>
        <div class="owl-carousel product_detail_customer_bought_carousel mt-4">

            <div class="item p-3">
                <div class="products_page_product_box product_detail_customer_bought_box">
                    <div class="products_page_product_img_box">
                        <div class="products_page_product_img_discount">-15%</div>
                        <a href="product-detail.php" class="">
                            <div class="products_page_product_img_overlay_btns">
                                <form action="">
                                    <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                    <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                </form>
                            </div>
                            <img src="assets/img/p-1.jpg" class="products_page_product_img" width="100%" alt="">
                            <div class="products_page_product_img_overlay">QUICKVIEW</div>
                        </a>
                    </div>
                    <div class="px-2 py-3 text-center">
                        <div class="text-truncate">
                            <a href="product-detail.php" class="products_page_product_title">Double Door Smart Refrigerator</a>
                        </div>
                        <div class="home_hot_offers_stars py-1">
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                            <span class="text-dark product_detail_text">(7)</span>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <span class="products_page_product_price_del text-secondary pe-1">Rs. 1,999</span>
                            <span class="products_page_product_price">Rs. 1,699</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item p-3">
                <div class="products_page_product_box product_detail_customer_bought_box">
                    <div class="products_page_product_img_box">
                        <div class="products_page_product_img_discount">-35%</div>
                        <a href="product-detail.php" class="">
                            <div class="products_page_product_img_overlay_btns">
                                <form action="">
                                    <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                    <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                </form>
                            </div>
                            <img src="assets/img/p-0.jpg" class="products_page_product_img" width="100%" alt="">
                            <div class="products_page_product_img_overlay">QUICKVIEW</div>
                        </a>
                    </div>
                    <div class="px-2 py-3 text-center">
                        <div class="text-truncate">
                            <a href="product-detail.php" class="products_page_product_title">Double Door Smart Refrigerator</a>
                        </div>
                        <div class="home_hot_offers_stars py-1">
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                            <span class="text-dark product_detail_text">(27)</span>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <span class="products_page_product_price_del text-secondary pe-1">Rs. 4,999</span>
                            <span class="products_page_product_price">Rs. 1,049</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item p-3">
                <div class="products_page_product_box product_detail_customer_bought_box">
                    <div class="products_page_product_img_box">
                        <div class="products_page_product_img_discount">-5%</div>
                        <a href="product-detail.php" class="">
                            <div class="products_page_product_img_overlay_btns">
                                <form action="">
                                    <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                    <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                </form>
                            </div>
                            <img src="assets/img/p-2.jpg" class="products_page_product_img" width="100%" alt="">
                            <div class="products_page_product_img_overlay">QUICKVIEW</div>
                        </a>
                    </div>
                    <div class="px-2 py-3 text-center">
                        <div class="text-truncate">
                            <a href="product-detail.php" class="products_page_product_title">Double Door Smart Refrigerator</a>
                        </div>
                        <div class="home_hot_offers_stars py-1">
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                            <span class="text-dark product_detail_text">(0)</span>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <span class="products_page_product_price_del text-secondary pe-1">Rs. 799</span>
                            <span class="products_page_product_price">Rs. 649</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item p-3">
                <div class="products_page_product_box product_detail_customer_bought_box">
                    <div class="products_page_product_img_box">
                        <div class="products_page_product_img_discount">-35%</div>
                        <a href="product-detail.php" class="">
                            <div class="products_page_product_img_overlay_btns">
                                <form action="">
                                    <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                    <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                </form>
                            </div>
                            <img src="assets/img/p-3.jpg" class="products_page_product_img" width="100%" alt="">
                            <div class="products_page_product_img_overlay">QUICKVIEW</div>
                        </a>
                    </div>
                    <div class="px-2 py-3 text-center">
                        <div class="text-truncate">
                            <a href="product-detail.php" class="products_page_product_title">Double Door Smart Refrigerator</a>
                        </div>
                        <div class="home_hot_offers_stars py-1">
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                            <span class="text-dark product_detail_text">(27)</span>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <span class="products_page_product_price_del text-secondary pe-1">Rs. 4,999</span>
                            <span class="products_page_product_price">Rs. 1,049</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item p-3">
                <div class="products_page_product_box product_detail_customer_bought_box">
                    <div class="products_page_product_img_box">
                        <div class="products_page_product_img_discount">-35%</div>
                        <a href="product-detail.php" class="">
                            <div class="products_page_product_img_overlay_btns">
                                <form action="">
                                    <button class="me-1"><i class="fa-solid fa-cart-plus"></i></button>
                                    <button class="ms-1"><i class="fa-solid fa-heart"></i></button>
                                </form>
                            </div>
                            <img src="assets/img/p-4.jpg" class="products_page_product_img" width="100%" alt="">
                            <div class="products_page_product_img_overlay">QUICKVIEW</div>
                        </a>
                    </div>
                    <div class="px-2 py-3 text-center">
                        <div class="text-truncate">
                            <a href="product-detail.php" class="products_page_product_title">Double Door Smart Refrigerator</a>
                        </div>
                        <div class="home_hot_offers_stars py-1">
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star fa-sm"></i>
                            <i class="fa-solid fa-star-half-stroke fa-sm"></i>
                            <span class="text-dark product_detail_text">(27)</span>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <span class="products_page_product_price_del text-secondary pe-1">Rs. 4,999</span>
                            <span class="products_page_product_price">Rs. 1,049</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Customers also bought: -->

</main>

<!-- === Footer === -->
<?php include_once 'footer.php'; ?>
<!-- Footer -->