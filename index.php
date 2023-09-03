<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.css">
</head>
<?php include('connect.php');
$sql = "SELECT*FROM image";
$stmt = $conn->prepare($sql);
$stmt->execute();
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<body>
    <div class="container">
        <header>
            <section class="big">
                <section class="logo">
                    <a href="index.html"> <img src="/img/img/logo.14d0e71d.svg" alt=""></a>
                </section>

                <ul class="menu_parents">
                    
                    <li><a href="">Men</a></li>
                    <li><a href="">Women</a></li>
                    <li><a href="">beauty</a></li>
                    <li><a href="">Sport</a></li>
                    <li class="drop_down">
                        <a href="" id="tpl">
                            Templates
                            <i class="fa-solid fa-caret-down"></i>
                        </a>
                        <div class="templace">
                            <div class="templace_item">
                                <ul class="templace_child">
                                    <li><a href="">Home page</a></li>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">header</a></li>
                                    <li><a href="">coming soon</a></li>
                                </ul>
                                <ul class="templace_child">
                                    <li><a href="">Home page</a></li>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">header</a></li>
                                    <li><a href="">coming soon</a></li>
                                </ul>
                                <ul class="templace_child">
                                    <li><a href="">Home page</a></li>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">header</a></li>
                                    <li><a href="">coming soon</a></li>
                                </ul>
                                <ul class="templace_child">
                                    <li><a href="">Home page</a></li>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">header</a></li>
                                    <li><a href="">coming soon</a></li>
                                </ul>
                                <div class="product1 menu_product" style="background-color: rgb(243, 231, 231);">
                                    <div class="product_text">
                                        <p>Explore new arrivals</p>
                                        <h2>
                                            Shop the latest
                                            <br>
                                            from top brands
                                        </h2>
                                        <button>Show me all</button>
                                    </div>
                                    <div class="product_img">
                                        <img src="img/img/chosen2.1.png" alt="">
                                    </div>
                                </div>
                            </div>


                        </div>

                    </li>

                    <li id="expore">
                        <a href="">expore
                            <i class="fa-solid fa-caret-down">

                            </i>

                        </a>
                        <!-- <div class="menu_child">
                            <ul class="menu_child1">
                                <li><a href="">Home demo 1</a></li>
                                <li><a href="">Home demo 2</a></li>
                                <li><a href="">Categories Pages<i class="fa-solid fa-caret-down">

                                        </i></a></li>
                                <li><a href="">product pages<i class="fa-solid fa-caret-down">

                                        </i></a></li>
                                <li><a href="">cart page</a></li>
                                <li><a href="">checkout page</a></li>
                                <li><a href="">search page</a></li>
                                <li><a href="">acount page</a></li>
                                <li><a href="">other pages<i class="fa-solid fa-caret-down">

                                        </i></a></li>
                                <li><a href="">blog page<i class="fa-solid fa-caret-down">

                                        </i></a></li>
                            </ul>
                        </div> -->

                    </li>
                </ul>
                <section class="seach">

                    <div class="seach_icon">
                        <i id="tk" class="fa-solid fa-magnifying-glass"></i>
                        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <!-- <div class="tk1">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input  style="width: 500px;height: 30px;border: none;background-color: rgb(248, 250, 252);" placeholder="type and press enter" type="text">
    
                    <button style="border: none;background-color: rgb(248, 250, 252) "><i  class="fa-regular fa-trash-can"></i></button>
                    </div> -->
                    <!-- <div class="user">
                        <div class="nameuser">
                            <div class="userimg">
                                <img src="/img/img/Image-8.webp" alt="">
                            </div>
                            <div class="edim" style="width: 152px;">
                                Eden Smith
                                Los Angeles, CA
                            </div>
                        </div>
                        <hr>
                        <div class="myacount">
                            <i class="fa-regular fa-user"></i>
                            <p>My acount</p>
                        </div>
                        <div class="myoder">
                            <i class="fa-solid fa-list"></i>
                            <p>my oder</p>
                        </div>
                        <div class="wishlist">
                            <i class="fa-regular fa-heart"></i>
                            <p> wishlist</p>
                        </div>
                        <hr>
                        <div class="myacount">
                            <i class="fa-solid fa-circle-half-stroke"></i>
                            <p>Dark theme</p>
                        </div>
                        <div class="myoder">
                            <i class="fa-regular fa-life-ring"></i>
                            <p >Help</p>
                        </div>
                        <div class="wishlist">
                            <i class="fa-regular fa-circle-left"></i>
                            <p> log out</p>
                        </div>
                    </div> -->
                </section>
            </section>

    </div>

    <section class="banner">
        <img id="amd" src="/img/img/bannerspecial.svg" alt="">
        <img src="/img/img/hero-right.webp" alt="" id="img">
        <section class="text">
            <section class="text1">

                <h1>
                    In this season, find the best 🔥<br>
                    Exclusive collection for everyone</h1>
                <button>Explore now <i class="fa-solid fa-magnifying-glass"></i></button>
            </section>
        </section>
    </section>

    </header>
    <main>
        <div class="arrow">

            <h2>
                Discover more. Good things are waiting for you

            </h2>

            <div class="arrow_right">
                <button onclick="lui()"><</button>
                <button>></button>
                      
            </div>
        </div>
        <section class="product">
            <div class="product1" style="background-color: rgb(244, 242, 223); ">
                <div class="product_text">
                    <p>Explore new arrivals</p>
                    <h2>
                        Shop the latest
                        <br>
                        from top brands
                    </h2>
                    <button>Show me all</button>
                </div>
                <div class="product_img">
                    <img class="image" src="img/img/images.jfif" alt="">
                </div>
            </div>
            <div class="product1" style="background-color: rgb(243, 231, 231);">
                <div class="product_text">
                    <p>Explore new arrivals</p>
                    <h2>
                        Shop the latest
                        <br>
                        from top brands
                    </h2>
                    <button>Show me all</button>
                </div>
                <div class="product_img">
                    <img class="image" src="img/img/chosen2.1.png" alt="">
                </div>
            </div>
            <div class="product1" style="background-color: rgb(230, 236, 245);">
                <div class="product_text">
                    <p>Explore new arrivals</p>
                    <h2>
                        Shop the latest
                        <br>
                        from top brands
                    </h2>
                    <button>Show me all</button>
                </div>
                <div class="product_img">
                    <img class="image" src="img/img/images1.jfif" alt="">
                </div>
            </div>
            <div class="product1" style="background-color: rgb(244, 242, 223); ">
                <div class="product_text">
                    <p>Explore new arrivals</p>
                    <h2>
                        Shop the latest
                        <br>
                        from top brands
                    </h2>
                    <button>Show me all</button>
                </div>
                <div class="product_img">
                    <img class="image" src="img/img/3.webp" alt="">
                </div>
            </div>
        </section>
        <h2>New Arrivals. REY backpacks & bags</h2>
        <div class="product2">
            <div class="product_new">
                <div class="product_img2">
                    <a href="sanpham.php?id=<?php echo $arr[0]['id'] ?>"> <img src="<?php echo $arr[0]['image'] ?>" alt=""></a>
                    <div class="sz">
                        <button>
                            XS
                        </button>
                        <button>S</button>
                        <button>M</button>
                        <button>
                            L
                        </button>
                        <button>XL</button>
                    </div>
                </div>

                <i class="fa-sharp fa-solid fa-heart" style="color: red;"></i>
                <div class="color">
                    <button style="background-color: #435c7a;"></button><button style=" background-color: #8fb5da"></button><button style="background-color: rgb(44, 60, 87);"></button><button style="background-color: rgb(125, 125, 125);"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$42</button>
                    <p>
                        <i class="fa-solid fa-star"></i> 4.9(98 reviews)
                    </p>
                </div>
            </div>
            <div class="product_new">
                <div class="product_img2">
                    <a href="sanpham.php?id=<?php echo $arr[1]['id'] ?>"> <img src="<?php echo $arr[1]['image'] ?>" alt=""></a>
                    <div class="sz">
                        <button class="btn">
                            <i class="fa-solid fa-bag-shopping"></i> Add to bag
                        </button>

                        <button class="btn"><i class="fa-brands fa-slack"></i> Quick view</button>
                    </div>
                </div>
                <i class="fa-sharp fa-solid fa-heart"></i>
                <div class="color1">
                    <button style="background-color: rgb(167, 139, 250);"></button><button style=" background-color:rgb(250, 204, 21)"></button><button style="background-color: rgb(251, 146, 60)"></button><button style="background-color:rgb(26, 177, 86)"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$153</button>
                    <p>
                        <i class="fa-solid fa-star"></i> 4.9(98 reviews)
                    </p>
                </div>
            </div>
            <div class="product_new">
                <div class="product_img2">

                    <a href="sanpham.php?id=<?php echo $arr[2]['id'] ?>"> <img src="<?php echo $arr[2]['image'] ?>" alt=""></a>
                    <div class="sz">
                        <button>
                            XS
                        </button>
                        <button>S</button>
                        <button>M</button>
                        <button>
                            L
                        </button>
                        <button>XL</button>
                    </div>
                </div>
                <i class="fa-sharp fa-solid fa-heart"></i>
                <div class="color">
                    <button style="background-color: #435c7a;"></button><button style=" background-color: #8fb5da"></button><button style="background-color: rgb(44, 60, 87);"></button><button style="background-color: rgb(125, 125, 125);"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$199</button>
                    <p>
                        <i class="fa-solid fa-star"></i>4.9(98 reviews)
                    </p>
                </div>
            </div>
            <div class="product_new">
                <div class="product_img2">
                    <a href="sanpham.php?id=<?php echo $arr[3]['id'] ?>"><img src="<?php echo $arr[3]['image'] ?>" alt=""></a>
                    <div class="sz">
                        <button class="btn">
                            <i class="fa-solid fa-bag-shopping"></i> Add to bag
                        </button>

                        <button class="btn"><i class="fa-brands fa-slack"></i> Quick view</button>
                    </div>
                </div>
                <i class="fa-sharp fa-solid fa-heart"></i>
                <div class="color1">
                    <button style="background-color: rgb(167, 139, 250);"></button>
                    <button style=" background-color:rgb(250, 204, 21)"></button><button style="background-color: rgb(251, 146, 60)"></button><button style="background-color:rgb(26, 177, 86)"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$197</button>
                    <p>
                        <i class="fa-solid fa-star"></i>4.9(98 reviews)
                    </p>
                </div>
            </div>


        </div>
        <hr>

        <div class="item">
            <div class="center_item">
                <div class="item_img">
                    <img src="/img/img/HIW1img.webp" alt="">
                </div>
                <div class="item_text">
                    <button style="background-color: rgb(254, 226, 226); color: rgb(182, 135, 136);">Step 1</button>
                    <h4>Filter & Discover</h4>
                    <p>Smart filtering and suggestions make it easy to find</p>
                </div>
            </div>
            <div class="center_item">
                <div class="item_img">
                    <img src="/img/img/HIW2img.webp" alt="">
                </div>
                <div class="item_text">
                    <button style="background-color:rgb(224, 231, 255); color: rgb(99, 153, 219)">Step 2</button>
                    <h4>Add to bag</h4>
                    <p>Easily select the correct items and add them to the cart</p>
                </div>
            </div>
            <div class="center_item">
                <div class="item_img">
                    <img src="/img/img/HIW3img.webp" alt="">
                </div>
                <div class="item_text">
                    <button style="background-color:rgb(254, 249, 195); color: rgb(180, 189, 148);">Step 3</button>
                    <h4>Fast shipping</h4>
                    <p>The carrier will confirm and ship quickly to you</p>
                </div>
            </div>
            <div class="center_item">
                <div class="item_img">
                    <img src="/img/img/HIW4img.webp" alt="">
                </div>
                <div class="item_text">
                    <button style="background-color: rgb(243, 232, 255); color: rgb(107, 33, 168);">Step 4</button>
                    <h4>Enjoy the product</h4>
                    <p>Have fun and enjoy your 5-star quality products</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="dolla">
            <div class="money">
                <div class="logo">
                    <img src="/img/img/logo.14d0e71d.svg" alt="">
                </div>
                <h1 style="font-size: 3.75rem;">Earn free money
                    with Ciseco</h1>
                <p>With Ciseco you will get freeship & savings combo...</p>
                <div class="money_btn">
                    <button style="background-color: black;">
                        Savings combo
                    </button><button class="btn1" style="color: black;background-color: white;">
                        Discover more
                    </button>
                </div>
            </div>
            <div class="money_img">
                <img src="img/img/rightLargeImg.webp" alt="">
            </div>
        </div>
        <div class="start">
            <h2>Start exploring.</h2>
            <div class="closed">
                <button>Women<i class="fa-solid fa-person-dress"></i></button>
                <button id="man">Man <i class="fa-sharp fa-solid fa-person"></i></button>
                <button>Kids<i class="fa-light fa-child"></i></button>
                <button>Sports<i class="fa-solid fa-headphones"></i></button>
                <button>Beauty <i class="fa-solid fa-crown"></i></button>
                <button>Jewwery<i class="fa-solid fa-gem"></i></button>
            </div>
            <div class="start_img">
                <div class="start_img_top">
                    <div class="st_img">
                        <div class="post_img">
                            <img src="/img/img/explore1.bafb60cf.svg" alt="">
                            <div class="bag">
                                <div class="bag_img">
                                    <img src="/img/img/explore1.png" alt="">
                                    <p>155 product</p>
                                </div>
                                <div class="bag_text">
                                    <p>manùactuar</p>
                                    <h4>Backback</h4>
                                    <button>see collection</button>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="st_img">
                        <div class="post_img">
                            <img src="/img/img/explore2.46138c9a.svg" alt="">
                            <div class="bag">
                                <div class="bag_img">
                                    <img src="/img/img/explore2.png" alt="">
                                    <p>155 product</p>
                                </div>
                                <div class="bag_text">
                                    <p>manùactuar</p>
                                    <h4>Backback</h4>
                                    <button>see collection</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="st_img">
                        <div class="post_img">
                            <img src="/img/img/explore3.8526de42.svg" alt="">
                            <div class="bag">
                                <div class="bag_img">
                                    <img src="/img/img/explore3.webp" alt="">
                                    <p>155 product</p>
                                </div>
                                <div class="bag_text">
                                    <p>manùactuar</p>
                                    <h4>Backback</h4>
                                    <button>see collection</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="start_img_bt">
                    <div class="st_img">
                        <div class="post_img">
                            <img src="/img/img/explore6.9182f851.svg" alt="">
                            <div class="bag">
                                <div class="bag_img">
                                    <img src="/img/img/explore6.png" alt="">
                                    <p>155 product</p>
                                </div>
                                <div class="bag_text">
                                    <p>manùactuar</p>
                                    <h4>Backback</h4>
                                    <button>see collection</button>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="st_img">
                        <div class="post_img">
                            <img src="/img/img/explore5.4a34ab29.svg" alt="">
                            <div class="bag">
                                <div class="bag_img">
                                    <img src="/img/img/explore5.png" alt="">
                                    <p>155 product</p>
                                </div>
                                <div class="bag_text">
                                    <p>manùactuar</p>
                                    <h4>Backback</h4>
                                    <button>see collection</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="st_img">
                        <div class="post_img">
                            <img src="/img/img/explore4.0d4aa2f6.svg" alt="">
                            <div class="bag">
                                <div class="bag_img">
                                    <img src="/img/img/explore4.webp" alt="">
                                    <p>155 product</p>
                                </div>
                                <div class="bag_text">
                                    <p>manùactuar</p>
                                    <h4>Backback</h4>
                                    <button>see collection</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1> Best Sellers. Best selling of the month</h1>
        <div class="product2">
            <div class="product_new">
                <div class="product_img2">
                    <a href="sanpham.html"> <img src="/img/img/seller1.webp" alt=""></a>
                    <div class="sz">
                        <button>
                            XS
                        </button>
                        <button>S</button>
                        <button>M</button>
                        <button>
                            L
                        </button>
                        <button>XL</button>
                    </div>
                </div>

                <i class="fa-sharp fa-solid fa-heart" style="color: red;"></i>
                <div class="color">
                    <button style="background-color: #435c7a;"></button><button style=" background-color: #8fb5da"></button><button style="background-color: rgb(44, 60, 87);"></button><button style="background-color: rgb(125, 125, 125);"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$42</button>
                    <p>
                        <i class="fa-solid fa-star"></i> 4.9(98 reviews)
                    </p>
                </div>
            </div>
            <div class="product_new">
                <div class="product_img2">
                    <a href="sanpham.html"> <img src="/img/img/seller2.webp" alt=""></a>
                    <div class="sz">
                        <button class="btn">
                            <i class="fa-solid fa-bag-shopping"></i> Add to bag
                        </button>

                        <button class="btn"><i class="fa-brands fa-slack"></i> Quick view</button>
                    </div>
                </div>
                <i class="fa-sharp fa-solid fa-heart"></i>
                <div class="color1">
                    <button style="background-color: rgb(167, 139, 250);"></button><button style=" background-color:rgb(250, 204, 21)"></button><button style="background-color: rgb(251, 146, 60)"></button><button style="background-color:rgb(26, 177, 86)"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$153</button>
                    <p>
                        <i class="fa-solid fa-star"></i> 4.9(98 reviews)
                    </p>
                </div>
            </div>
            <div class="product_new">
                <div class="product_img2">

                    <a href="sanpham.html"> <img src="/img/img/seller3.webp" alt=""></a>
                    <div class="sz">
                        <button>
                            XS
                        </button>
                        <button>S</button>
                        <button>M</button>
                        <button>
                            L
                        </button>
                        <button>XL</button>
                    </div>
                </div>
                <i class="fa-sharp fa-solid fa-heart"></i>
                <div class="color">
                    <button style="background-color: #435c7a;"></button><button style=" background-color: #8fb5da"></button><button style="background-color: rgb(44, 60, 87);"></button><button style="background-color: rgb(125, 125, 125);"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$199</button>
                    <p>
                        <i class="fa-solid fa-star"></i>4.9(98 reviews)
                    </p>
                </div>
            </div>
            <div class="product_new">
                <div class="product_img2">
                    <a href="sanpham.html"><img src="/img/img/seller4.webp" alt=""></a>
                    <div class="sz">
                        <button class="btn">
                            <i class="fa-solid fa-bag-shopping"></i> Add to bag
                        </button>

                        <button class="btn"><i class="fa-brands fa-slack"></i> Quick view</button>
                    </div>
                </div>
                <i class="fa-sharp fa-solid fa-heart"></i>
                <div class="color1">
                    <button style="background-color: rgb(167, 139, 250);"></button>
                    <button style=" background-color:rgb(250, 204, 21)"></button><button style="background-color: rgb(251, 146, 60)"></button><button style="background-color:rgb(26, 177, 86)"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$197</button>
                    <p>
                        <i class="fa-solid fa-star"></i>4.9(98 reviews)
                    </p>
                </div>
            </div>


        </div>
        <!-- Cậu nhỏ -->
        <div class="banner2">
            <img src="/img/img/bannerspecial.svg" alt="">
            <div class="responsive">
                <div class="promo2">
                    <img src="/img/img/promo2.webp" alt="" style="width: 664px;">
                </div>
                <div class="promo_text">
                    <div class="promo2_img">
                        <img src="/img/img/logo.14d0e71d.svg" alt="">

                    </div>
                    <div class="pr_text">
                        <h2>Special offer
                            in kids products</h2>
                        <p style="width: 400px;">
                            Fashion is a form of self-expression and autonomy at a particular period and place.
                        </p>
                        <button style="height: 53px; width: 200px; border-radius: 20px; background-color: black; color: white; font-weight: 600;">Discover
                            more</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- lựa chọn -->
        <div class="chosen">
            <h2>Chosen by our experts</h2>
            <div class="downtown">
                <div class="down_img">
                    <div class="down_top">
                        <img src="/img/img/chosen1.webp" alt="">
                    </div>
                    <div class="down_bt">
                        <div class="downbt">
                            <img src="/img/img/chosen1.1.webp" alt="">
                            <img src="/img/img/chosen1.2.png">
                            <img src="/img/img/chosen1.3.webp">
                        </div>
                    </div>
                    <div class="down_text">
                        <div class="down_sp">
                            <h3>Suede Bomber Jacket</h3>
                            <p>
                                oranger <span>4.9(269 reviews)</span>
                            </p>
                        </div>
                        <div class="down_price">
                            <button>$52</button>
                        </div>
                    </div>
                </div>
                <div class="down_img">
                    <div class="down_top">
                        <img src="/img/img/chosen2.webp" alt="">
                    </div>
                    <div class="down_bt">
                        <div class="downbt">
                            <img src="/img/img/chosen2.1.png" alt="">
                            <img src="/img/img/chosen2.2.png">
                            <img src="/img/img/chosen2.3.webp">
                        </div>
                    </div>
                    <div class="down_text">
                        <div class="down_sp">
                            <h3>Suede Bomber Jacket</h3>
                            <p>
                                oranger <span>4.9(269 reviews)</span>
                            </p>
                        </div>
                        <div class="down_price">
                            <button>$52</button>
                        </div>
                    </div>
                </div>
                <div class="down_img">
                    <div class="down_top">
                        <img src="/img/img/chosen3.webp" alt="">
                    </div>
                    <div class="down_bt">
                        <div class="downbt">
                            <img src="/img/img/chosen3.1.png" alt="">
                            <img src="/img/img/chosen3.2.webp">
                            <img src="/img/img/chosen3.3.webp">
                        </div>
                    </div>
                    <div class="down_text">
                        <div class="down_sp">
                            <h3>Suede Bomber Jacket</h3>
                            <p>
                                oranger <span>4.9(269 reviews)</span>
                            </p>
                        </div>
                        <div class="down_price">
                            <button>$52</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop by -->
        <div class="shop">
            <h2>Shop by department</h2>
            <div class="deparment">
                <div class="kits">
                    <div class="kits_img">
                        <img src="img/img/department1.webp" alt="" style="background-color: #E0E7FF;">
                    </div>
                    <div class="kits_text">
                        <h4>Travel kits</h4>
                        <p>20+ categories</p>
                    </div>
                </div>
                <div class="kits">
                    <div class="kits_img">
                        <img src="img/img/department2.webp" alt="" style="background-color: #F1F5F9;">
                    </div>
                    <div class="kits_text">
                        <h4>Beauty product</h4>
                        <p>20+ categories</p>
                    </div>
                </div>
                <div class="kits">
                    <div class="kits_img">
                        <img src="img/img/department3.webp" alt="" style="background-color: #E0F2FE;">
                    </div>
                    <div class="kits_text">
                        <h4>Sport kits</h4>
                        <p>20+ categories</p>
                    </div>
                </div>
                <div class="kits">
                    <div class="kits_img">
                        <img src="img/img/department4.webp" alt="" style="background-color: #FFEDD5;">
                    </div>
                    <div class="kits_text">
                        <h4>peets food</h4>
                        <p>20+ categories</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner3 -->
        <div class="banner2">
            <img src="/img/img/bannerspecial.svg" alt="">
            <div class="responsive">

                <div class="promo_text1">

                    <div class="pr_text">
                        <h2>Don't miss out on
                            special offers</h2>
                        <p style="width: 400px;">
                            Register to receive news about the latest, savings combos,
                            discount codes...
                        </p>
                        <div class="bt_save">
                            <div class="btn_save">
                                <button style="background-color: rgb(243, 232, 255) ; color: rgb(102, 51, 153); font-weight: 600;">01</button><br><button style="background-color: rgb(219, 234, 254);color: rgb(102, 51, 153); font-weight: 600;">02</button><br><button style="background-color: rgb(254, 226, 226);
                                    color: rgb(102, 51, 153); font-weight: 600;">03</button>
                            </div>
                            <div class="btn_text">
                                <p>Saving compbos</p>
                                <p>Freeship</p>
                                <p>Premium magazines</p>
                            </div>
                        </div>
                        <div class="form">
                            <input type="text" name="" id="" placeholder="enter your email">
                        </div>
                    </div>
                </div>
                <div class="promo2">
                    <img src="/img/img/promo3.webp" alt="" style="width: 664px;height: 664px;">
                </div>
            </div>
        </div>
        <!-- tranding now -->
        <div class="tranding_now">
            <h2>What's trending now</h2>
            <p>Discover the most trending products in Ciseco.</p>
            <div class="all_items">
                <div class="all_btn">
                    <button id="all">All items</button>
                    <button>Women</button>
                    <button>Mans</button>
                    <button>Kids</button>
                    <button>Jewels</button>
                </div>
                <div class="filter">
                    <button> <i class="fa-sharp fa-solid fa-filter"></i>Filter</button>
                </div>
            </div>
            <hr>
            <div class="all_money">
                <div class="all_money2">
                    <div class="money_btn1">
                        <button id="all_money1" onclick="_click()">100$-500$</button>
                        <div class="all_price">
                            <h4>Price range</h4>
                            <form action="">
                                <input type="range" name="" id="range" step="1" value="1" onchange="tang(this)">
                            </form>
                            <div class="price_mm">
                                <div class="all_min">
                                    <p>Min price</p>
                                    <form action="">
                                        <input type="number" name="" id="number" min="1" max="500" value="1">
                                    </form>
                                </div>
                                <div class="all_max">
                                    <p>Max price</p>
                                    <input type="number" name="" id="" min="1" max="500" value="500">
                                </div>
                            </div>
                            <div class="all_clear">
                                <button id="clear">clear</button>
                                <button>apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="money_btn1">
                        <button>Categories <i class="fa-solid fa-caret-down"></i></button>

                    </div>
                    <div class="money_btn1">
                        <button>Colors<i class="fa-solid fa-caret-down"></i></button>

                    </div>
                    <div class="money_btn1">
                        <button>size<i class="fa-solid fa-caret-down"></i></button>

                    </div>
                    <div class="money_btn1">
                        <button>on sale</button>

                    </div>



                </div>
                <div class="filter_money">
                    <button>Sort order<i class="fa-solid fa-caret-down"></i></button>
                </div>
            </div>
        </div>
        <!-- new in -->
        <div class="product2">
            <div class="product_new">
                <div class="product_img2">
                    <a href="sanpham.html"> <img src="/img/img/trend1.png" alt=""></a>
                    <div class="sz">
                        <button>
                            XS
                        </button>
                        <button>S</button>
                        <button>M</button>
                        <button>
                            L
                        </button>
                        <button>XL</button>
                    </div>
                </div>

                <i class="fa-sharp fa-solid fa-heart" style="color: red;"></i>
                <div class="color">
                    <button style="background-color: #435c7a;"></button><button style=" background-color: #8fb5da"></button><button style="background-color: rgb(44, 60, 87);"></button><button style="background-color: rgb(125, 125, 125);"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$42</button>
                    <p>
                        <i class="fa-solid fa-star"></i> 4.9(98 reviews)
                    </p>
                </div>
            </div>
            <div class="product_new">
                <div class="product_img2">
                    <a href="sanpham.html"> <img src="/img/img/trend2.png" alt=""></a>
                    <div class="sz">
                        <button class="btn">
                            <i class="fa-solid fa-bag-shopping"></i> Add to bag
                        </button>

                        <button class="btn"><i class="fa-brands fa-slack"></i> Quick view</button>
                    </div>
                </div>
                <i class="fa-sharp fa-solid fa-heart"></i>
                <div class="color1">
                    <button style="background-color: rgb(167, 139, 250);"></button><button style=" background-color:rgb(250, 204, 21)"></button><button style="background-color: rgb(251, 146, 60)"></button><button style="background-color:rgb(26, 177, 86)"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$153</button>
                    <p>
                        <i class="fa-solid fa-star"></i> 4.9(98 reviews)
                    </p>
                </div>
            </div>
            <div class="product_new">
                <div class="product_img2">

                    <a href="sanpham.html"> <img src="/img/img/trend3.webp" alt=""></a>
                    <div class="sz">
                        <button>
                            XS
                        </button>
                        <button>S</button>
                        <button>M</button>
                        <button>
                            L
                        </button>
                        <button>XL</button>
                    </div>
                </div>
                <i class="fa-sharp fa-solid fa-heart"></i>
                <div class="color">
                    <button style="background-color: #435c7a;"></button><button style=" background-color: #8fb5da"></button><button style="background-color: rgb(44, 60, 87);"></button><button style="background-color: rgb(125, 125, 125);"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$199</button>
                    <p>
                        <i class="fa-solid fa-star"></i>4.9(98 reviews)
                    </p>
                </div>
            </div>
            <div class="product_new">
                <div class="product_img2">
                    <a href="sanpham.html"> <img src="/img/img/trend4.png" alt=""></a>
                    <div class="sz">
                        <button class="btn">
                            <i class="fa-solid fa-bag-shopping"></i> Add to bag
                        </button>

                        <button class="btn"><i class="fa-brands fa-slack"></i> Quick view</button>
                    </div>
                </div>
                <i class="fa-sharp fa-solid fa-heart"></i>
                <div class="color1">
                    <button style="background-color: rgb(167, 139, 250);"></button>
                    <button style=" background-color:rgb(250, 204, 21)"></button><button style="background-color: rgb(251, 146, 60)"></button><button style="background-color:rgb(26, 177, 86)"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$197</button>
                    <p>
                        <i class="fa-solid fa-star"></i>4.9(98 reviews)
                    </p>
                </div>
            </div>


        </div>
        <div class="product2">
            <div class="product_new">
                <div class="product_img2">
                    <a href="sanpham.html"> <img src="/img/img/seller2.webp" alt=""></a>
                    <div class="sz">
                        <button>
                            XS
                        </button>
                        <button>S</button>
                        <button>M</button>
                        <button>
                            L
                        </button>
                        <button>XL</button>
                    </div>
                </div>

                <i class="fa-sharp fa-solid fa-heart" style="color: red;"></i>
                <div class="color">
                    <button style="background-color: #435c7a;"></button><button style=" background-color: #8fb5da"></button><button style="background-color: rgb(44, 60, 87);"></button><button style="background-color: rgb(125, 125, 125);"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$42</button>
                    <p>
                        <i class="fa-solid fa-star"></i> 4.9(98 reviews)
                    </p>
                </div>
            </div>
            <div class="product_new">
                <div class="product_img2">
                    <a href="sanpham.html"> <img src="/img/img/seller3.webp" alt=""></a>
                    <div class="sz">
                        <button class="btn">
                            <i class="fa-solid fa-bag-shopping"></i> Add to bag
                        </button>

                        <button class="btn"><i class="fa-brands fa-slack"></i> Quick view</button>
                    </div>
                </div>
                <i class="fa-sharp fa-solid fa-heart"></i>
                <div class="color1">
                    <button style="background-color: rgb(167, 139, 250);"></button><button style=" background-color:rgb(250, 204, 21)"></button><button style="background-color: rgb(251, 146, 60)"></button><button style="background-color:rgb(26, 177, 86)"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$153</button>
                    <p>
                        <i class="fa-solid fa-star"></i> 4.9(98 reviews)
                    </p>
                </div>
            </div>
            <div class="product_new">
                <div class="product_img2">

                    <a href="sanpham.html"><img src="/img/img/seller4.webp" alt=""></a>
                    <div class="sz">
                        <button>
                            XS
                        </button>
                        <button>S</button>
                        <button>M</button>
                        <button>
                            L
                        </button>
                        <button>XL</button>
                    </div>
                </div>
                <i class="fa-sharp fa-solid fa-heart"></i>
                <div class="color">
                    <button style="background-color: #435c7a;"></button><button style=" background-color: #8fb5da"></button><button style="background-color: rgb(44, 60, 87);"></button><button style="background-color: rgb(125, 125, 125);"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$199</button>
                    <p>
                        <i class="fa-solid fa-star"></i>4.9(98 reviews)
                    </p>
                </div>
            </div>
            <div class="product_new">
                <div class="product_img2">
                    <a href="sanpham.html"><img src="/img/img/sp2.webp" alt=""></a>
                    <div class="sz">
                        <button class="btn">
                            <i class="fa-solid fa-bag-shopping"></i> Add to bag
                        </button>

                        <button class="btn"><i class="fa-brands fa-slack"></i> Quick view</button>
                    </div>
                </div>
                <i class="fa-sharp fa-solid fa-heart"></i>
                <div class="color1">
                    <button style="background-color: rgb(167, 139, 250);"></button>
                    <button style=" background-color:rgb(250, 204, 21)"></button><button style="background-color: rgb(251, 146, 60)"></button><button style="background-color:rgb(26, 177, 86)"></button><button style="background-color: rgb(38, 41, 47)"></button>
                </div>
                <div class="product_text">
                    <h3>Leather Gloves</h3>
                    <p>perfect mint green</p>

                </div>
                <div class="price">
                    <button>$197</button>
                    <p>
                        <i class="fa-solid fa-star"></i>4.9(98 reviews)
                    </p>
                </div>
            </div>
        </div>
        <div class="show1">
            <button>Show me more</button>
        </div>


        <!-- The latest news. From the Ciseco blog -->
        <div class="the_news">
            <h2>The latest news. From the Ciseco blog</h2>
            <div class="love">
                <div class="nulla">
                    <div class="nulla_img">
                        <img style="width: 584px;height: 438px;" src="img/img/latest.webp" alt="">
                    </div>
                    <div class="nulla_text">
                        <h3>sagittis vitae et leo duis ut diam quam nulla porttitor</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vero perspiciatis ullam
                            ea? Nihil accusamus similique debitis tempore</p>
                        <div class="avata">
                            <img src="img/img/lastavatar.png" alt="">
                            Kailey Greer May 20, 2021
                        </div>
                    </div>
                </div>
                <div class="lorem">
                    <div class="lorem1">
                        <div class="lorem_text">
                            <h4>sagittis vitae et leo duis ut diam quam nulla porttitor</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolorem voluptatibus
                            </p>
                            <div class="avata">
                                <img src="img/img/lastavatar.png" alt="">
                                Kailey Greer May 20, 2021
                            </div>
                        </div>
                        <div class="lorem_img">
                            <img src="img/img/pexels-photo-12699167.webp" alt="">
                        </div>
                    </div>
                    <div class="lorem1">
                        <div class="lorem_text">
                            <h4>sagittis vitae et leo duis ut diam quam nulla porttitor</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolorem voluptatibus
                            </p>
                            <div class="avata">
                                <img src="img/img/lastavatar.png" alt="">
                                Kailey Greer May 20, 2021
                            </div>
                        </div>
                        <div class="lorem_img">
                            <img src="img/img/pexels-photo-13270364.webp" alt="">
                        </div>
                    </div>
                    <div class="lorem1">
                        <div class="lorem_text">
                            <h4>sagittis vitae et leo duis ut diam quam nulla porttitor</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolorem voluptatibus
                            </p>
                            <div class="avata">
                                <img src="img/img/lastavatar.png" alt="">
                                Kailey Greer May 20, 2021
                            </div>
                        </div>
                        <div class="lorem_img">
                            <img src="img/img/pexels-photo-13270364.webp" alt="">
                        </div>
                    </div>


                </div>
            </div>
            <div class="showblog">
                <button>Show all blog article</button>
            </div>

        </div>
        <!-- good news -->
        <div class="goodnews">
            <div class="text_goodnews">
                <h2>Good news from far away 🥇</h2>
                <p>Let's see what people think of Ciseco</p>
            </div>
            <div class="img_goodnews">
                <div class="newimg1">
                    <div class="imgrow1">
                        <img src="/img/img/news1.png" alt="">
                    </div>
                    <div class="imgrow1">
                        <img src="/img/img/news1.webp" alt="">
                    </div>
                    <div class="imgrow1">
                        <img src="/img/img/news3.png" alt="">
                    </div>
                </div>
                <div class="newimg2">
                    <div class="newimg2_1">
                        <img src="/img/img/news.png" alt="">
                    </div>
                    <div class="newimg2_2">
                        <img src="/img/img/quotation.png" alt="">
                    </div>
                    <div class="newimg2_3">
                        <p>
                            Great quality products, affordable prices, fast and friendly delivery. I very recommend.
                        </p>
                        <span>Berta Emili</span>
                        <div class="new_icon">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <div class="newimg2_4">
                        <img src="/img/img/quotation2.png" alt="">
                    </div>
                    <div class="newimg2_5">
                        <img src="/img/img/news5.png" alt="">
                    </div>
                </div>
                <div class="newimg3">
                    <div class="newimg3-1">
                        <img src="/img/img/news3.png" alt="">
                    </div>
                    <div class="newimg3-2">
                        <img src="/img/img/news6.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <hr>


    </main>

    <footer>
        <div class="footer">
            <div class="footer_colum1">
                <img src="/img/img/logo.14d0e71d.svg" alt="">
                <div class="colum1_text">
                    <p><i class="fa-brands fa-facebook" style="color: blue;"></i>facebook</p>
                    <p><i class="fa-brands fa-youtube" style="color:red;"></i>youtube</p>
                    <p><i class="fa-brands fa-telegram" style="color: rgb(50, 170, 224);"></i>Telegram</p>
                    <p><i class="fa-brands fa-twitter" style="color: rgb(90, 153, 236)"></i>twitter</p>
                </div>
            </div>
            <div class="footer_colum2">
                <div class="start1">
                    <p>Getting started</p>
                    <p>Release Notes</p>
                    <p>Upgrade Guide</p>
                    <p>Browser Support</p>
                    <p>Dark Mode</p>
                </div>
                <div class="expolre">
                    <p>Prototyping</p>
                    <p>Design systems</p>
                    <p>Pricing</p>
                    <p>Security</p>
                    <p>Security</p>
                </div>
            </div>
            <div class="footer_colum3">
                <div class="start1">
                    <p>Resources</p>
                    <p>Release Notes</p>
                    <p>Upgrade Guide</p>
                    <p>Browser Support</p>
                    <p>Dark Mode</p>
                </div>
                <div class="expolre">
                    <p>Community</p>
                    <p>Design systems</p>
                    <p>Pricing</p>
                    <p>Security</p>
                    <p>Security</p>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <script src="index.js"></script>
</body>

</html>