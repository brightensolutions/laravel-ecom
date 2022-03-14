<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from andit.co/projects/html/andshop/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Mar 2022 12:04:00 GMT -->
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
    <!-- Preloader Area -->
    {{View::make('header')}}

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
                            <li class="active">Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Main Area -->
    <section id="shop_main_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="product_filter">
                        <div class="customs_selects">
                            <select name="product" class="customs_sel_box">
                                <option value="Filter">Filter</option>
                                <option value="volvo">Most Popular</option>
                                <option value="saab">Best Seller</option>
                                <option value="mercedes">Tranding</option>
                                <option value="audi">Featured</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="product_shot">
                        <div class="product_shot_title">
                            <p> Sort By:</p>
                        </div>
                        <div class="customs_selects">
                            <select name="product" class="customs_sel_box">
                                <option value="Popularity">Sort by Popularity</option>
                                <option value="newness">Sort by newness</option>
                                <option value="low">price: low to high</option>
                                <option value="high">price: high to low</option>
                            </select>
                        </div>
                        <div class="product_shot_view">
                            <ul>
                                <li><a href="shop-3.html"><i class="fas fa-list"></i></a></li>
                                <li><a href="shop-2.html"><i class="fas fa-th-large"></i></a></li>
                                <li><a href="shop.html" class="active"><i class="fas fa-th"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($products as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product_wrappers_one">
                        <div class="thumb">
                            <a href="product-single.html" class="image">
                                <img src="{{$item['gallery']}}" alt="Product" />
                                <img class="hover-image" src="{{$item['gallery']}}" alt="Product" />
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
                            <h5 class="title"><a href="details/{{ $item['id'] }}">{{$item['name']}}</a></h5>
                            <span class="price">
                                <span class="new">{{$item['price']}}</span>
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <div class="col-lg-12">
                    <!-- pagination start -->
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                    <!-- pagination end -->
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
                                <img src="assets/img/instagram/post10.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post1.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post11.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post12.png" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer Area -->
    {{View::make('footer')}}


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
    <!-- wow.js -->
    <script src="{{ asset('/js/wow.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('/js/custom.js') }}"></script>
    <script>
        new WOW().init();
    </script>
</body>



</html>