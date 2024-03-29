<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Buah</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('/template/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/template/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/template/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/template/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/template/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/template/css/owl.carousel.min.css') }}" type="text/css'">
    <link rel="stylesheet" href="{{ asset('/template/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/template/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{ asset('/template/img/logo.png') }}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href=""><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
         
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <a href="/formRegis"><i class="fa fa-user"></i> Register</a>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="./login"><i class="fa fa-user"></i> Login</a>
            </div>
            <div class="header__top__right__auth">
                <a href="./formRegis"><i class="fa fa-user"></i> Register</a>
            </div>

        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Register</a></li>
                <li><a href="/admin">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="">Shop Details</a></li>
                        <li><a href="">Shoping Cart</a></li>
                        <li><a href="">Check Out</a></li>

                        <!-- untuk blog ditampilkan dimenu blog saja -->
                        <!-- <li><a href="./blog-details.html">Blog Details</a></li> -->
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Profile</a></li>
                <li><a href="#feedback">FeedBack</a></li>
                <li><a href="/profile">Profile</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>

        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                {{-- <li><i class="fa fa-mobile"></i> Welcome, {{ auth()->user()->nama }}</li> --}}
                                <li>Belanja Puas Harga Pas!</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">

                            @guest
                            <div class="header__top__right__auth">
                                <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                        @else
                        <div class="header__top__right__auth">
                            <a href=""><i class="fa fa-user"></i> {{ auth()->user()->username }}</a>
                        </div>
                        
                            <a href="./logOUT"><i class="mx-2"></i> Logout</a>
                        </div>
                    </div>
                   
                </div>
                @endguest

            </div>
        </div>
        </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{ asset('/template/img/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="/home">Home</a></li>
                            <li><a href="/admin">Shop</a></li>
                            <li><a href="#">Details</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="/shop">Shop Details</a></li>
                                    <li><a href="/crud">CRUD detail</a></li>
                                  
                                    <li><a href="/blog">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="/categories">Kategori</a></li>
                            <li><a href="/profile">Profile</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                        
                            <li><a href=""><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->



    @yield('content')



  

    <!-- Js Plugins -->
    <script src="{{ asset('/template/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/template/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/template/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/template/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('/template/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('/template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/template/js/main.js') }}"></script>



</body>

</html>
