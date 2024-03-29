<?php
session_start();

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Toys For Kids, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/Logo_Copy.png" sizes="16x16">
    <title>Toys For Kids | Store</title>

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f52718c374.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script nonce="6a542a0d-7c5b-48c4-b05e-36d56d7b86fa">
    (function(w, d) {
        ! function(bw, bx, by, bz) {
            bw[by] = bw[by] || {};
            bw[by].executed = [];
            bw.zaraz = {
                deferred: [],
                listeners: []
            };
            bw.zaraz.q = [];
            bw.zaraz._f = function(bA) {
                return function() {
                    var bB = Array.prototype.slice.call(arguments);
                    bw.zaraz.q.push({
                        m: bA,
                        a: bB
                    })
                }
            };
            for (const bC of ["track", "set", "debug"]) bw.zaraz[bC] = bw.zaraz._f(bC);
            bw.zaraz.init = () => {
                var bD = bx.getElementsByTagName(bz)[0],
                    bE = bx.createElement(bz),
                    bF = bx.getElementsByTagName("title")[0];
                bF && (bw[by].t = bx.getElementsByTagName("title")[0].text);
                bw[by].x = Math.random();
                bw[by].w = bw.screen.width;
                bw[by].h = bw.screen.height;
                bw[by].j = bw.innerHeight;
                bw[by].e = bw.innerWidth;
                bw[by].l = bw.location.href;
                bw[by].r = bx.referrer;
                bw[by].k = bw.screen.colorDepth;
                bw[by].n = bx.characterSet;
                bw[by].o = (new Date).getTimezoneOffset();
                if (bw.dataLayer)
                    for (const bJ of Object.entries(Object.entries(dataLayer).reduce(((bK, bL) => ({
                            ...bK[1],
                            ...bL[1]
                        }))))) zaraz.set(bJ[0], bJ[1], {
                        scope: "page"
                    });
                bw[by].q = [];
                for (; bw.zaraz.q.length;) {
                    const bM = bw.zaraz.q.shift();
                    bw[by].q.push(bM)
                }
                bE.defer = !0;
                for (const bN of [localStorage, sessionStorage]) Object.keys(bN || {}).filter((bP => bP
                    .startsWith("_zaraz_"))).forEach((bO => {
                    try {
                        bw[by]["z_" + bO.slice(7)] = JSON.parse(bN.getItem(bO))
                    } catch {
                        bw[by]["z_" + bO.slice(7)] = bN.getItem(bO)
                    }
                }));
                bE.referrerPolicy = "origin";
                bE.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bw[by])));
                bD.parentNode.insertBefore(bE, bD)
            };
            ["complete", "interactive"].includes(bx.readyState) ? zaraz.init() : bw.addEventListener(
                "DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
    </script>
</head>

<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header-section">
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img class="img_logo" src="img/Logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="fa-sharp fa-solid fa-bag-shopping"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="img/Thor-Marvel.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                    <i class="fa-sharp fa-solid fa-xmark"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img src="img/Wasp-Marvel.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                    <i class="fa-sharp fa-solid fa-xmark"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$150.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <!-- <i class="ti-menu"></i> -->
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.html">Home</a></li>
                        <li><a href="./shop.html">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                        <li>
                            <?php
                                if (isset($_SESSION['Welcome']['useremail'])) {
                                    echo "<a href=''>Ab Me</a>
                                            <ul class='dropdown'>
                                            <li><a href=''>Account</a></li>
                                            <li><a href=''>Shopping Cart</a></li>
                                            <li><a href=''>Pays</a></li>
                                            <li><a href=''>Sign Up</a></li>
                                            <li><a href='Logout.php'>Log Out</a></li>
                                            <li><a href=''>About Us</a></li>
                                        </ul>";
                                } else {
                                    echo "<a href='./Welcome.php'>Sign In</a>
                                            <ul class='dropdown'>
                                                <li><a href='./Welcome.php'>SIGN UP</a></li>
                                            </ul>
                                    ";
                                }
                        ?>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>


    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/Marvel.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black friday</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="img/Marvel-1.jpg">
                <div class="container">
                </div>
            </div>
        </div>
    </section>


    <div class="banner-section spad">
        <div class="container-fluid">
            <!-- <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/IronMan-Marvel.jpg" alt="">
                        <div class="inner-text">
                            <h4>Iron Man</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/Nhen-Marvel.jpg" alt="">
                        <div class="inner-text">
                            <h4>Spider-Man</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner.jpg" alt="">
                        <div class="inner-text">
                            <h4>Marvel</h4>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>


    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="img/products/LogoGroup0.jpg">
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Lego City - Family</li>
                            <!-- <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li> -->
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <?php
                        $connect = mysqli_connect('localhost', 'root', '', 'ToysKid_Project');
                        
                        if (mysqli_connect_errno()) {
                            echo 'Không thể kết nối đến MySQL: ' . mysqli_connect_error();
                            exit();
                        }
                        
                        // truy vấn dữ liệu
                        $result = mysqli_query($connect, 'SELECT name, price, Image FROM products');
                        
                        // kiểm tra kết quả và hiển thị dữ liệu
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $name = $row['name'];
                                $price = $row['price'];
                                $image = $row['Image'];
                               
                                echo "
                                <div class='product-item'>
                                <div class='pi-pic'>
                                    <img src='./Admin/Products\\$image'>
                                    <div class='sale'>Sale</div>
                                    <div class='icon'>
                                        <i class='icon_heart_alt'></i>
                                    </div>
                                    <ul>
                                        <li class='w-icon active'><a href='#'><i class='fa-sharp fa-solid fa-bag-shopping'></i></a></li>
                                        <li class='quick-view'><a href='#'>+ Quick View</a></li>
                                        <li class='w-icon'><a href='#'><i class='fa fa-random'></i></a></li>
                                    </ul>
                                </div>
                                <div class='pi-text'>
                                    <a href='#'>
                                        <h5>$name</h5>
                                    </a>
                                    <div class='product-price'>
                                        $14.00
                                        <span>$price</span>
                                    </div>
                                </div>
                            </div>
                                ";
                            }
                        } else {
                            echo 'Không có sản phẩm nào trong cơ sở dữ liệu.';
                        }
                        
                        // đóng kết nối
                        mysqli_close($connect);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="deal-of-week set-bg spad" data-setbg="img/55637.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal Of The Week</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet,
                        consectetur adipisicing elit </p>
                    <div class="product-price">
                        $350.000
                        <span>/ Marvel</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="#" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </section>


    <section class="man-banner spad">
        <div class="container-fluid">
            <!-- <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Lego City - Family</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <?php
                        $connect = mysqli_connect('localhost', 'root', '', 'ToysKid_Project');
                        
                        if (mysqli_connect_errno()) {
                            echo 'Không thể kết nối đến MySQL: ' . mysqli_connect_error();
                            exit();
                        }
                        
                        // truy vấn dữ liệu
                        $result = mysqli_query($connect, 'SELECT name, price, Image FROM products');
                        
                        // kiểm tra kết quả và hiển thị dữ liệu
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $name = $row['name'];
                                $price = $row['price'];
                                $image = $row['Image'];
                               
                                echo "
                                <div class='product-item'>
                                <div class='pi-pic'>
                                    <img src='./Admin/Products\\$image'>
                                    <div class='sale'>Sale</div>
                                    <div class='icon'>
                                        <i class='icon_heart_alt'></i>
                                    </div>
                                    <ul>
                                        <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                                        <li class='quick-view'><a href='#'>+ Quick View</a></li>
                                        <li class='w-icon'><a href='#'><i class='fa fa-random'></i></a></li>
                                    </ul>
                                </div>
                                <div class='pi-text'>
                                    <a href='#'>
                                        <h5>$name</h5>
                                    </a>
                                    <div class='product-price'>
                                        $14.00
                                        <span>$price</span>
                                    </div>
                                </div>
                            </div>
                                ";
                            }
                        } else {
                            echo 'Không có sản phẩm nào trong cơ sở dữ liệu.';
                        }
                        
                        // đóng kết nối
                        mysqli_close($connect);
                        ?>


                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-3.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/products/LogoGroup1.jpg">
                        <h2>Men’s</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>


    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="img/Cap-Marvel.jpg">
            <div class="inside-text">
                <h5><a href="#">Captain Marvel</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/Nhen-Marvel.jpg">
            <div class="inside-text">
                <h5><a href="#">Spider-Man Marvel</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/Wasp-Marvel.jpg">
            <div class="inside-text">
                <h5><a href="#">Wasp Marvel</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/IronMan-Marvel.jpg">
            <div class="inside-text">
                <h5><a href="#">Iron-Man Marvel</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/Thor-Marvel.jpg">
            <div class="inside-text">
                <h5><a href="#">Thor Marvel</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/QuaPhu-Marvel.jpg">
            <div class="inside-text">
                <h5><a href="#">Black Widow Marvel</a></h5>
            </div>
        </div>
    </div>


    <!-- <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="img/latest-1.jpg" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>The Best Street Style From London Fashion Week</h4>
                            </a>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="img/latest-2.jpg" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>Vogue's Ultimate Guide To Autumn/Winter 2019 Shoes</h4>
                            </a>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="img/latest-3.jpg" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>How To Brighten Your Wardrobe With A Dash Of Lime</h4>
                            </a>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery On Time</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#" class="img_logo"><img src="img/Logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="5e363b323231703d3132312c32373c1e39333f3732703d3133">[email&#160;protected]</a>
                            </li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">

                            Copyright &copy;
                            <script data-cfasync="false"
                                src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                            document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"79f83bff0abd045b","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>