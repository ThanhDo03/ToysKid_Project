<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ToysKid - Store</title>
    <link rel="stylesheet" href="./css/style_Pet.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>

    <!-- 1 -->
    <div id="header">
        <div id="wrap">
            <div id="Logo"><a href="./Pet.php"><img class="logo" src="./Logo.png"></a></div>
            <div id="Menu">
                <ul>
                    <?php
                    if (isset($_SESSION['SignIn']['username'])) {
                        echo "Hi! <b>{$_SESSION['SignIn']['username']}</b>";
                        echo "<br>";
                        echo "<li><a href='Logout.php'>Log Out</a></li>";
                    } else {
                        echo "<li><a href='./Welcome.php'>Sign In</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div id="Introduc">True Friends</div>
    </div>
    <div id="Banner">
        <div id="Box">
            <div id="Box0">
                <div id="Box1">
                    <div id="Box1_1">
                        <div class="Box1_1_1">
                            <h2>Clean It Right 'Round</h2>
                            <span>The Pets</span>
                            <h2><span><img src="./vv/ten.png" alt=""></span></h2>
                        </div>
                    </div>
                    <div id="Box1_2">
                        <div class="Box1_2_1">
                            <h2><img src="./vv/tym.jpg" alt=""></h2>
                            <h3 style="color: #000000; font-size:15px;">It came to me that every time I lose a dog they
                                take a piece of my heart with them, and every new dog who comes into my life gifts me
                                with a piece of their heart. If I live long enough, all the components of my heart will
                                be dog, and I will become as generous and loving as they are.
                            </h3>
                        </div>
                    </div>
                    <div id="Box1_3">
                        <div>
                            <img src="./vv/love.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div id="Box2">
                    <div id="Box1_4">
                        <div class="Box1_4_1">
                            <h2 style="text-align:center" ;><img src="./vv/icondog.jpg" alt=""></h2>
                            <h3 style="color: #000000; font-size:15px; margin-top: 20px;">
                                A dog will teach you unconditional love. If you can have that in your life, things won’t
                                be too bad.
                            </h3>
                        </div>
                    </div>
                    <div id="Box1_5">
                        <div>
                            <img src="./vv/fun.jpg" alt="">
                        </div>
                    </div>
                    <div id="Box1_6">
                        <div class="Box1_6_1">
                            <h2 style="text-align:center" ;><img src="./vv/iconcat.jpg" alt=""></h2>
                            <h3 style="color: #000000; font-size:15px; margin-top: 20px;">
                                It is impossible for a lover of cats to banish these alert, gentle, and discriminating
                                friends, who give us just enough of their regard and complaisance to make us hunger for
                                more.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Banner2">
        <div id="txtSearch">
            <p>Need a Sweet Heart?</p>
            <h2>If there are no dogs in Heaven,then when I die<br>I want to go where they went.
            </h2>
            <div id="toolSearch">
                <form class="search" method="POST" action="./Search/SearchDog.php?btnSearch=$btnSearch">
                    <input type="text" class="searchTerm" placeholder="Search?" name="search">

                    <button type="submit" class="searchButton" name="btnSearch">
                        <svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!--  -->

    <div id="Dog">
        <div id="Style_Dog">
            <div id="Title">
                <h1>Dog</h1>
            </div>
            <div id="MenuDog">
                <div>
                    <ul>
                        <li>
                            <a href="" style="color:#e7aa71;">
                                <i class='fas fa-dog' style='font-size:24px'></i>Popular
                            </a>
                        </li>
                        <li><a href=""><i class='fas fa-paw' style='font-size:24px'></i>Becgie</a></li>
                        <li><a href=""><i class='fas fa-paw' style='font-size:24px'></i>Corgi</a></li>
                        <li><a href=""><i class='fas fa-paw' style='font-size:24px'></i>Dogo</a></li>
                        <li><a href=""><i class='fas fa-paw' style='font-size:24px'></i>Poodle</a></li>
                        <li><a href=""><i class='fas fa-paw' style='font-size:24px'></i>HMong COC</a></li>
                        <li><a href=""><i class='fas fa-paw' style='font-size:24px'></i>Accessory</a></li>
                        <li><a href=""><i class='fas fa-paw' style='font-size:24px'></i>Service</a></li>
                        <li><a href=""><i class='fas fa-bone' style='font-size:24px'></i>Pet Food</a></li>
                    </ul>
                </div>
            </div>
            <div id="List_pet_dog">
                <table>
                    <tr>
                        <?php
                        $connect = mysqli_connect('localhost', 'root', '', 'demo');
                        $sql = "SELECT * FROM product";
                        $result = mysqli_query($connect, $sql);
                        $index = 0;
                        while ($row_product = mysqli_fetch_array($result)) {
                            $image = $row_product['Image'];
                            $name = $row_product['ProductName'];
                            // $_SESSION['Pet']['name'] = $name;
                            echo "
                                <td style='width:25%'>  
                                    <div class='DOG'>
                                        <a href='Detail_Pet_Dog/Detail_Dog.php?name=$name'><img src= 'Dog\\$image'/></a>
                                        <p> <a href= ''>$name</a> </p> 
                                    </div>
                                </td>
                                ";
                            $index++;
                            if ($index == 4) {
                                echo "</tr><tr>";
                                $index = 0;
                            }
                        }
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>


    <div id="Banner3">
        <div id="Banner_3_1">
            <div id="Banner_Text1">
                <div id="Banner_Text1_1">
                    <h4>PET'S LOVE</h4>
                    <h1>Russian Blue Cat</h1>
                    <div id="toolSearch2">
                        <form class="search2" method="POST">
                            <input type="text" class="searchTerm2" placeholder="Search?" name="search">
                            <button type="submit" class="searchButton2" name="btnSearch">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="Banner_Text2">
                <img src="./Back3.jpeg" alt="">
            </div>
            <div id="Banner_Text3">
                <div>
                    <p>
                        The first step to making your cat famous is by building a steady fan base on social media! You
                        can
                        start by following other animal influencers and learn from what they do.
                    </p>

                    <p>
                        Don’t stop at clicking photos of your cat in fun poses, wearing a cape and looking like he’s
                        ready to take over the world! Push the creative boundaries to bring..
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="Cat">
        <div id="Style_Cat">
            <div id="Name_Pet1">
                <a href="">
                    <h1>Ca<span class="span_h3_cat">t</span></h1>
                </a>
            </div>

            <div id="Menu_pet_cat">
                <ul>
                    <li><a href=""><i class='fas fa-cat' style='font-size:24px'></i>Popular</a></li>
                    <li><a href=""><i class='fas fa-cat' style='font-size:24px'></i>Persian Cat</a></li>
                    <li><a href=""><i class='fas fa-cat' style='font-size:24px'></i>Munchkin Cat</a></li>
                    <li><a href=""><i class='fas fa-cat' style='font-size:24px'></i>Ragdoll Cat</a></li>
                    <li><a href=""><i class='fas fa-cat' style='font-size:24px'></i>Pet Food</a></li>
                </ul>
            </div>
            <div id="List_pet_cat">
                <table>
                    <tr>
                        <?php
                        $connect = mysqli_connect('localhost', 'root', '', 'demo');
                        if (!$connect) {
                            echo 'Not Connect';
                        }
                        $sql = "SELECT * FROM product1";
                        $result = mysqli_query($connect, $sql);
                        $index = 0;
                        for ($i = 0; $i <= ($row_product1 = mysqli_fetch_array($result)); $i++) {
                            # code...
                            $image = $row_product1['Image'];
                            $name = $row_product1['ProductName'];
                            echo "
                                <td style='width:25%'>
                                    <div class='CAT'>
                                        <a href=''><img src='Cat\\$image'/></a>
                                        <p> <a href= ''>$name</a> </p> 
                                    </div>
                                </td> 
                                ";
                            $index++;
                            if ($index == 4) {
                                echo "</tr><tr>";
                                $index = 0;
                            }
                        }
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>


    <footer>
        <div id="col1">
            <div class="child_col1">
                <ul>
                    <li><a href="">FINE A STORE</a></li>
                    <li><a href="">BECOME A MEMBER</a></li>
                    <li><a href="">SIGN UP FOR EMAIL</a></li>
                    <li><a href="">SEND US FEEDBACK</a></li>
                </ul>
            </div>
        </div>
        <div id="col2">
            <div class="child_col2">
                <ul>
                    <li><a href="">GET HELP</a></li>
                    <li><a href="" class="child_col2_ullia">Order Status</a></li>
                    <li><a href="" class="child_col2_ullia">Delivery</a></li>
                    <li><a href="" class="child_col2_ullia">Return</a></li>
                    <li><a href="" class="child_col2_ullia">Payment Options</a></li>
                    <li><a href="" class="child_col2_ullia">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div id="col3">
            <div class="child_col3">
                <ul>
                    <li><a href="">ABOUT PETSHOP</a></li>
                    <li><a href="" class="child_col2_ullia">News</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div id="End">
        <p><i class='fas fa-map-marker-alt' style='font-size:24px'></i> 39YE,Alley 44,Tran Thai Tong, Dich Vong Hau, Cau
            Giay, Ha Noi</p>
    </div>
    <div id="End2">
        <p>&copy; 2022 THANH DO COMPANY.Inc. All Rights Reserved</p>
    </div>
</body>

</html>