<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
$total= ProductController::cartItem();
}
?>
<!-- Preloader Area -->
<div id="preloader">
        <div id="status">
            <img src="{{ asset('/img/loader.gif')}}" alt="img" />
        </div>
    </div>

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <ul class="top-header-contact-info">
                        <li><i class="fas fa-phone-volume"></i> <a href="tel:+1234567898">(+123) 456-7898</a></li>
                        <li><i class="fas fa-street-view"></i> <a href="#" target="_blank">Surat, Gujarat, India</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-5">
                    <ul class="top-header-menu">
                       @if(Session::has('user'))
                       
                        <li>{{Session::get('user')['name']}}</li>
                        <li><a href="/logout">Logout</a></li>
                        @else
                        <li><a href="/login">Login</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Navebar Area -->
    <div class="navbar-area">
        <div class="drodo-responsive-nav">
            <div class="container">
                <div class="drodo-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="drodo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="#" class="nav-link active">Home </a>
                               
                            </li>
                            
                            <li class="nav-item"><a href="about-us.html" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Products <i
                                        class='fas fa-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-gride-1.html">Product 1</a></li>
                                    <li><a href="blog-gride-2.html">Product 2</a></li>
                                    <li><a href="blog-list.html">Product 3</a></li>
                                    
                                </ul>
                            </li>
                            <li class="nav-item"><a href="my-account.html" class="nav-link">My Account</a></li>
                            <li class="nav-item"><a href="about-us.html" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="contact-us.html" class="nav-link">Contact Us</a></li>
                            
                           
                        </ul>
                        <div class="others-option">
                            <!-- <div class="option-item">
                                <div class="wishlist-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal"><i
                                            class='far fa-heart'></i></a>
                                </div>
                            </div> -->
                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingCartModal"><i
                                            class='fas fa-shopping-bag'></i><span>{{$total}}</span></a>
                                </div>
                            </div>
                            <!-- <div class="option-item">
                                <div class="search-btn-box">
                                    <i class="fas fa-search search-btn"></i>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Search Area -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class="fas fa-search search-btn"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>