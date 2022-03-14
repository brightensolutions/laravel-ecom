<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Shop - AndShop</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ asset('/css/fontawesome.all.min.css') }}" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}" />
    <!--  slick-theme.css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/slick.css') }}" />
    <!--slick-theme.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/slick-theme.css') }}" />
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('/css/meanmenu.min.css') }}" />
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <!-- color css -->
    <link rel="stylesheet" href="{{ asset('/css/color.css') }}" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>



    <!-- Top Header Area -->
    {{View::make('header')}}

    <!-- Search Area -->



    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Shop</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Product Single</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Single Area -->
    <section id="product_single_three" class="ptb-100">
        <div class="container">
            <div class="row area_boxed">
                <div class="col-lg-4">
                    <div class="product_single_two_img slider-for">
                        <div class="product_img_two_slider">
                            <img src="{{$product['gallery']}}" alt="img" />
                        </div>
                        <div class="product_img_two_slider">
                            <img src="assets/img/product-image/product2.png" alt="img" />
                        </div>
                        <div class="product_img_two_slider">
                            <img src="assets/img/product-image/product3.png" alt="img" />
                        </div>
                        <div class="product_img_two_slider">
                            <img src="assets/img/product-image/product4.png" alt="img" />
                        </div>
                        <div class="product_img_two_slider">
                            <img src="assets/img/product-image/product5.png" alt="img" />
                        </div>
                        <div class="product_img_two_slider">
                            <img src="assets/img/product-image/product6.png" alt="img" />
                        </div>
                    </div>
                    <div class="slider-nav">
                        <div class="nav_img">
                            <img src="assets/img/product-image/product1.png" alt="img" />
                        </div>
                        <div class="nav_img">
                            <img src="assets/img/product-image/product2.png" alt="img" />
                        </div>
                        <div class="nav_img">
                            <img src="assets/img/product-image/product3.png" alt="img" />
                        </div>
                        <div class="nav_img">
                            <img src="assets/img/product-image/product4.png" alt="img" />
                        </div>
                        <div class="nav_img">
                            <img src="assets/img/product-image/product5.png" alt="img" />
                        </div>
                        <div class="nav_img">
                            <img src="assets/img/product-image/product6.png" alt="img" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="product_details_right_one">
                        <div class="modal_product_content_one">
                            <h3>{{$product['name']}}</h3>
                            <div class="reviews_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(2 Customer Review)</span>
                            </div>
                            <h4>{{$product['price']}} </h4>
                            <p>{{$product['description']}}
                            </p>
                            
                            <ul class="list_three_pro">
                                <li><span>1.</span> Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit.</li>
                                <li><span>2.</span>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing.</li>
                                <li><span>3.</span>Lorem Ipsum Dolor Sit Amet Consectetur Adipi.</li>
                            </ul>
                            <form action="#!" id="product_count_form_two">
                                <div class="product_count_one">
                                    <div class="plus-minus-input">
                                        <div class="input-group-button">
                                            <button type="button" class="button" data-quantity="minus"
                                                data-field="quantity">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input class="form-control" type="number" name="quantity" value="0">
                                        <div class="input-group-button">
                                            <button type="button" class="button" data-quantity="plus"
                                                data-field="quantity">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="variable-single-item">
                                <div class="product-variable-color">
                                    <span class="align_text_color">Color:</span>
                                    <label for="modal-product-color-red">
                                        <input name="modal-product-color" id="modal-product-color-red"
                                            class="color-select" type="radio" checked="">
                                        <span class="product-color-red"></span>
                                    </label>
                                    <label for="modal-product-color-green">
                                        <input name="modal-product-color" id="modal-product-color-green"
                                            class="color-select" type="radio">
                                        <span class="product-color-green"></span>
                                    </label>

                                    <label for="modal-product-color-blue">
                                        <input name="modal-product-color" id="modal-product-color-blue"
                                            class="color-select" type="radio">
                                        <span class="product-color-blue"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="product_details_cat">
                                <ul>
                                    <li>Category:</li>
                                    <li><a href="#!">{{ $product['category'] }}</a></li>
                                   
                                </ul>
                            </div>
                             
                            <div class="links_Product_areas area_custom_details">
                                <form action="/add_to_cart" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                                    <button class="theme-btn-one btn-black-overlay btn_sm">Add to Cart</Button>
                               </form>
                               

                            </div>
                            <div class="product_detail_socials d-flex align-items-center">
                                <h6>Share:</h6>
                                <ul class="d-flex align-items-center">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_details_tabs">
                        <ul class="nav nav-tabs">
                            <li><a data-bs-toggle="tab" data-bs-target="#description" href="#!"
                                    class="active">Description</a></li>
                            <li><a data-bs-toggle="tab" data-bs-target="#additional" href="#!">Additional
                                    Information</a></li>
                            <li><a data-bs-toggle="tab" data-bs-target="#review" href="#!">Review</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="description" class="tab-pane fade in show active">
                                <div class="product_description">
                                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui.
                                        Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed,
                                        convallis at tellus. Sed porttitor lectus nibh.
                                        Donec sollicitudin molestie malesuada. Vivamus magna justo,
                                        lacinia eget consectetur sed, convallis at tellus. Curabitur arcu erat, accumsan
                                        id imperdiet et, porttitor at sem.</p>
                                    <ul>
                                        <li>Vivamus magna justo, lacinia eget consectetur sed</li>
                                        <li>Curabitur aliquet quam id dui posuere blandit</li>
                                        <li>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar </li>
                                    </ul>
                                    <p>Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum
                                        porta.
                                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                                        Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum
                                        porta. Curabitur arcu erat, accumsan id imperdiet et,
                                        Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                        porttitor at sem. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                                    </p>
                                </div>
                            </div>
                            <div id="additional" class="tab-pane fade">
                                <div class="product_additional">
                                    <ul>
                                        <li>Weight: <span>400 g</span></li>
                                        <li>Dimensions: <span>10 x 10 x 15 cm</span></li>
                                        <li>Materials: <span> 60% cotton, 40% polyester</span></li>
                                        <li>Other Info: <span> American heirloom jean shorts pug seitan
                                                letterpress</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="review" class="tab-pane fade">
                                <div class="product_reviews">
                                    <ul>
                                        <li class="media d-flex">
                                            <div class="media-img flex-shrink-0">
                                                <img src="assets/img/user/user1.png" alt="img">
                                            </div>
                                            <div class="media-body flex-grow-1 ms-3">
                                                <div class="media-header">
                                                    <div class="media-name">
                                                        <h4>Sara Anela</h4>
                                                        <p>5 days ago</p>
                                                    </div>
                                                    <div class="post-share">
                                                        <a href="#!" class="replay">Replay</a>
                                                        <a href="#!" class="">Report</a>
                                                    </div>
                                                </div>
                                                <div class="media-pragraph">
                                                    <div class="product_review_strat">
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                    </div>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                        scelerisque Praesent sapien massa, convallis a pellentesque nec,
                                                        egestas non nisi. Cras ultricies ligula sed magna dictum porta.
                                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                                                        dui.
                                                        Vivamus magna justo.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media d-flex">
                                            <div class="media-img flex-shrink-0">
                                                <img src="assets/img/user/user2.png" alt="img">
                                            </div>
                                            <div class="media-body flex-grow-1 ms-3">
                                                <div class="media-header">
                                                    <div class="media-name">
                                                        <h4>Sara Anela</h4>
                                                        <p>5 days ago</p>
                                                    </div>
                                                    <div class="post-share">
                                                        <a href="#!" class="replay">Replay</a>
                                                        <a href="#!" class="">Report</a>
                                                    </div>
                                                </div>
                                                <div class="media-pragraph">
                                                    <div class="product_review_strat">
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                    </div>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                        scelerisque Praesent sapien massa, convallis a pellentesque nec,
                                                        egestas non nisi. Cras ultricies ligula sed magna dictum porta.
                                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                                                        dui.
                                                        Vivamus magna justo.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media d-flex">
                                            <div class="media-img flex-shrink-0">
                                                <img src="assets/img/user/user3.png" alt="img">
                                            </div>
                                            <div class="media-body flex-grow-1 ms-3">
                                                <div class="media-header">
                                                    <div class="media-name">
                                                        <h4>Sara Anela</h4>
                                                        <p>5 days ago</p>
                                                    </div>
                                                    <div class="post-share">
                                                        <a href="#!" class="replay">Replay</a>
                                                        <a href="#!" class="">Report</a>
                                                    </div>
                                                </div>
                                                <div class="media-pragraph">
                                                    <div class="product_review_strat">
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                    </div>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                        scelerisque Praesent sapien massa, convallis a pellentesque nec,
                                                        egestas non nisi. Cras ultricies ligula sed magna dictum porta.
                                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                                                        dui.
                                                        Vivamus magna justo.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Related Product -->
    <section id="related_product" class="pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>You Might Also Like</h2>
                        <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product_wrappers_one">
                        <div class="thumb">
                            <a href="product-single.html" class="image">
                                <img src="assets/img/product-image/product1.png" alt="Product" />
                                <img class="hover-image" src="assets/img/product-image/product2.png" alt="Product" />
                            </a>
                            <div class="actions">
                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                        class="far fa-heart"></i></a>
                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i
                                        class="fas fa-expand"></i></a>
                                <a href="compare.html" class="action compare" title="Compare"><i
                                        class="fas fa-exchange-alt"></i></a>
                            </div>
                            <button title="Add To Cart" class="add-to-cart offcanvas-toggle" data-bs-toggle="modal"
                                data-bs-target="#shoppingCartModal">
                                Add To Cart
                            </button>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="product-single.html">Black T-Shirt For Woman</a></h5>
                            <span class="price">
                                <span class="new">$38.50</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product_wrappers_one">
                        <div class="thumb">
                            <a href="product-single.html" class="image">
                                <img src="assets/img/product-image/product3.png" alt="Product" />
                                <img class="hover-image" src="assets/img/product-image/product4.png" alt="Product" />
                            </a>
                            <span class="badges">
                                <span class="new">New</span>
                            </span>
                            <div class="actions">
                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                        class="far fa-heart"></i></a>
                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i
                                        class="fas fa-expand"></i></a>
                                <a href="compare.html" class="action compare" title="Compare"><i
                                        class="fas fa-exchange-alt"></i></a>
                            </div>
                            <button title="Add To Cart" class="add-to-cart offcanvas-toggle" data-bs-toggle="modal"
                                data-bs-target="#shoppingCartModal">
                                Add To Cart
                            </button>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="product-single.html">T-Shirt Form Girls</a></h5>
                            <span class="price">
                                <span class="new">$38.50</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product_wrappers_one">
                        <div class="thumb">
                            <a href="product-single.html" class="image">
                                <img src="assets/img/product-image/product5.png" alt="Product" />
                                <img class="hover-image" src="assets/img/product-image/product6.png" alt="Product" />
                            </a>
                            <span class="badges">
                                <span class="hot">Hot</span>
                            </span>
                            <div class="actions">
                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                        class="far fa-heart"></i></a>
                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i
                                        class="fas fa-expand"></i></a>
                                <a href="compare.html" class="action compare" title="Compare"><i
                                        class="fas fa-exchange-alt"></i></a>
                            </div>
                            <button title="Add To Cart" class="add-to-cart offcanvas-toggle" data-bs-toggle="modal"
                                data-bs-target="#shoppingCartModal">
                                Add To Cart
                            </button>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="product-single.html">White Black Line Dress</a></h5>
                            <span class="price">
                                <span class="new">$38.50</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product_wrappers_one">
                        <div class="thumb">
                            <a href="product-single.html" class="image">
                                <img src="assets/img/product-image/product7.png" alt="Product" />
                                <img class="hover-image" src="assets/img/product-image/product8.png" alt="Product" />
                            </a>
                            <div class="actions">
                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                        class="far fa-heart"></i></a>
                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i
                                        class="fas fa-expand"></i></a>
                                <a href="compare.html" class="action compare" title="Compare"><i
                                        class="fas fa-exchange-alt"></i></a>
                            </div>
                            <button title="Add To Cart" class="add-to-cart offcanvas-toggle" data-bs-toggle="modal"
                                data-bs-target="#shoppingCartModal">
                                Add To Cart
                            </button>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="product-single.html">Blue Dress For Woman</a></h5>
                            <span class="price">
                                <span class="new">$38.50</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instagram Arae -->
    <section id="instagram_area_one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>Follow Us Instagram</h2>
                        <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram_post_slider owl-carousel owl-theme">
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post2.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post3.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post4.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post5.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post6.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post7.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post8.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post9.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post2.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post1.png" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer Area -->
    {{View::make('footer')}}
    <!-- Product Modal Area Start-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="product_one_modal_top modal-content">
                <button type="button" class="close close_modal_icon" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body" id="product_slider_one">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                            <div class="products_modal_sliders owl-carousel owl-theme">
                                <img src="assets/img/product-image/product1.png" alt="img" />
                                <img src="assets/img/product-image/product2.png" alt="img" />
                                <img src="assets/img/product-image/product3.png" alt="img" />
                                <img src="assets/img/product-image/product4.png" alt="img" />
                                <img src="assets/img/product-image/product5.png" alt="img" />
                                <img src="assets/img/product-image/product6.png" alt="img" />
                                <img src="assets/img/product-image/product7.png" alt="img" />
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                            <div class="modal_product_content_one">
                                <h3>Black fashion handbag JI9023</h3>
                                <div class="reviews_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(2 Customer Review)</span>
                                </div>
                                <h4>$317.76</h4>
                                <p>
                                    Standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen.
                                </p>
                                <div class="variable-single-item">
                                    <span>Color</span>
                                    <div class="product-variable-color">
                                        <label for="modal-product-color-red1">
                                            <input name="modal-product-color" id="modal-product-color-red1"
                                                class="color-select" type="radio" checked="">
                                            <span class="product-color-red"></span>
                                        </label>
                                        <label for="modal-product-color-green3">
                                            <input name="modal-product-color" id="modal-product-color-green3"
                                                class="color-select" type="radio">
                                            <span class="product-color-green"></span>
                                        </label>

                                        <label for="modal-product-color-blue5">
                                            <input name="modal-product-color" id="modal-product-color-blue5"
                                                class="color-select" type="radio">
                                            <span class="product-color-blue"></span>
                                        </label>
                                    </div>
                                </div>
                                <form action="#!" id="product_count_form_one">
                                    <div class="product_count_one">
                                        <div class="plus-minus-input">
                                            <div class="input-group-button">
                                                <button type="button" class="button" data-quantity="minus"
                                                    data-field="quantity">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <input class="form-control" type="number" name="quantity" value="0" />
                                            <div class="input-group-button">
                                                <button type="button" class="button" data-quantity="plus"
                                                    data-field="quantity">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="cart.html" class="theme-btn-one btn-black-overlay btn_sm">Add To
                                            Cart</a>
                                    </div>
                                </form>
                                <div class="modal_share_icons_one">
                                    <h4>SHARE THIS PRODUCT</h4>
                                    <div class="posted_icons_one">
                                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#!"><i class="fab fa-instagram"></i></a>
                                        <a href="#!"><i class="fab fa-twitter"></i></a>
                                        <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#!"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#!"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shopingcart Modal Area Start-->
    <div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h3>My Cart (3)</h3>
                    <div class="products-cart-content">
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/product-image/product1.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Coronavirus Face Mask</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$39.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/product-image/product2.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Protective Gloves</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$99.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/product-image/product3.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Infrared Thermometer Gun</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$90.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                    <div class="products-cart-subtotal">
                        <span>Subtotal</span>
                        <span class="subtotal">$228.00</span>
                    </div>
                    <div class="products-cart-btn">
                        <a href="checkout.html" class="theme-btn-one btn-black-overlay btn_md">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wishlist Modal Area Start-->
    <div class="modal right fade shoppingWishlistModal" id="shoppingWishlistModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h3>My Wishlist (3)</h3>
                    <div class="products-cart-content">
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/product-image/product1.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Coronavirus Face Mask</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$39.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/product-image/product2.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Protective Gloves</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$99.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/product-image/product3.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Infrared Thermometer Gun</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$90.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                    <div class="products-cart-subtotal">
                        <span>Subtotal</span>
                        <span class="subtotal">$228.00</span>
                    </div>
                    <div class="products-cart-btn">
                        <a href="wishlist.html" class="theme-btn-one btn-black-overlay btn_md">Wishlist</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Jquery -->
    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <!-- owl carousel js -->
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <!-- Menu js -->
    <script src="{{ asset('/js/meanmenu.min.js') }}"></script>
    <!-- Count js -->
    <script src="{{ asset('/js/count.js') }}"></script>
    <!-- Timer js -->
    <script src="{{ asset('/js/nice-select.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('/js/slick.min.js') }}"></script>
    <script src="{{ asset('/js/slick-slider.js') }}"></script>
    <!-- wow.js -->
    <script src="{{ asset('/js/wow.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('/js/custom.js') }}"></script>
</body>



</html>