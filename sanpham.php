<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sanpham.css">

    <link rel="stylesheet" href="/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.css">
</head>
<?php
include('connect.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    echo $id;
    $sql="SELECT*FROM image WHERE id=:id";
    $stmt=$conn->prepare($sql);
    $stmt->execute([':id'=>$id]);
    $arr=$stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($arr);

}


?>

<body>
    <div class="container">
        <header>
            <section class="big">
                <section class="logo">
                    <a href="index.html"><img src="/img/img/logo.14d0e71d.svg" alt=""></a>
                </section>

                <ul class="menu_parents">
                    <li><a href="">Men</a></li>
                    <li><a href="">Women</a></li>
                    <li><a href="">beauty</a></li>
                    <li><a href="">Sport</a></li>
                    <li>
                        <a href="" id="tpl">
                            Templates
                            <i class="fa-solid fa-caret-down"></i>
                        </a>

                    </li>

                    <li id="expore"><a href="">expore
                            <i class="fa-solid fa-caret-down">

                            </i>
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
                        </a>

                    </li>
                </ul>
                <section class="seach">

                    <div class="seach_icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                        <i class="fa-solid fa-user"></i>
                    </div>
                </section>
            </section>
        </header>
        <main>
            <div class="main">
                <!-- Heavy Weight Shoes -->
                <div class="main_shoes">
                    <div class="shoes_left">
                        <div class="img_shoes">
                        
                            <img style="width: 640px;height: 720px;" src="<?php echo $arr['image'] ?>" alt="">
                        </div>
                        <div class="img_shoes1">
                            <img style="width: 314px;height: 353px;" src="<?php echo $arr['image'] ?>" alt="">
                            <img style="width: 314px;height: 353px;" src="<?php echo $arr['image'] ?>" alt="">
                        </div>
                    </div>
                    <div class="shoes_right">
                        <div class="shoes_text">
                            <h2> Heavy Weight Shoes</h2>
                            <div class="shoes_place">
                                <button>$112</button>
                                <div class="shoes_newin">
                                   <i style="color: yellow;" class="fa-solid fa-star"></i>
                                    <p>4.9</p>
                                    <a href="">142 reviews</a>
                                    <p>new in</p>

                                </div>
                            </div>
                            <div class="shoes_color">
                                <p>Color:Black</p>
                                <p class="mau">
                                    <button style=" background-color: rgb(58, 84, 111);"></button>
                                    <button style="background-color:rgb(152, 183, 216);"></button>
                                    <button style="background-color: rgb(44, 59, 88);"></button>
                                    <button style="background-color: rgb(117, 117, 117);"></button>
                                    <button style=" background-color:rgb(68, 72, 84) "></button>
                                </p>
                            </div>
                        </div>
                        <div class="shoes_size">
                            <div class="see_chart">
                                <p>Size xs</p>
                                <p style="color: blue;">see sizing chart</p>
                            </div>
                            <div class="color_size">
                                <button style="background-color: rgb(2, 132, 199); color: white;">xs</button>
                                <button>s</button>
                                <button>m</button>
                                <button>l</button>
                                <button>xl</button>
                                <button style="opacity: 0.5; font-weight: 100;">2xl</button>
                                <button style="opacity: 0.5; font-weight: 100;">3xl</button>
                            </div>
                            <div class="size_add">
                                <p style="background-color: rgb(245, 248, 251);">
                                    <button style="border-radius: 50%;">
                                        -
                                    </button>
                                <p>1</p>
                                <button style="border-radius: 50%;">+</button>
                                </p>
                                <button class="size" style="width: 70%;"><i class="fa-solid fa-bag-shopping"></i>add to
                                    cart</button>
                            </div>
                        </div>
                        <hr>
                        <div class="depcrition">
                            <h5>description</h5>
                            <p>Fashion is a form of self-expression and autonomy at a particular period and place and in
                                a specific context, of clothing, footwear, lifestyle, accessories,
                                makeup, hairstyle, and body posture.</p>

                        </div>
                        <div class="depcrition">
                            <h5>fabric+care</h5>
                            <ul>
                                <li>Made from a sheer Belgian power micromesh.</li>
                                <li>74% Polyamide (Nylon) 26% Elastane (Spandex)</li>
                                <li>Adjustable hook & eye closure and straps</li>
                                <li>Hand wash in cold water, dry flat</li>
                            </ul>

                        </div>
                        <div class="depcrition">
                            <h5>how is fits</h5>
                        </div>
                        <div class="depcrition">
                            <h5>faq</h5>
                        </div>
                        <div class="fre">
                            <div class="btn_left">
                                <button style="background-color: rgb(254, 242, 242);">
                                    <i class="fa-solid fa-truck-fast"></i>
                                    <h5>free shipping</h5>
                                    <p>On orders over $50.00</p>
                                </button>

                                <button style="background-color:rgb(240, 249, 255)">
                                    <i class="fa-solid fa-truck-fast"></i>
                                    <h5>Very easy to return</h5>
                                    <p>Just phone number.</p>
                                </button>
                            </div>
                            <div class="btn_right">
                                <button style="background-color: rgb(240, 253, 244);">
                                    <i class="fa-solid fa-globe"></i>
                                    <h5>Nationwide Delivery</h5>
                                    <p>Fast delivery nationwide.</p>
                                </button>
                                <button style="background-color:rgb(255, 251, 235);">
                                    <i class="fa-solid fa-dollar-sign"></i>
                                    <h5>Refunds policy</h5>
                                    <p>60 days return for any reason</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product_shoes">
                    <h3>Product Details</h3>
                    <p>The patented eighteen-inch hardwood Arrowhead deck --- finely mortised in, makes this the
                        strongest and most rigid canoe ever built. You cannot buy a canoe that will afford greater
                        satisfaction.</p>
                    <p>The St. Louis Meramec Canoe Company was founded by Alfred Wickett in 1922. Wickett had previously
                        worked for the Old Town Canoe Co from 1900 to 1914. Manufacturing of the classic wooden canoes
                        in Valley Park, Missouri ceased in 1978.</p>
                    <ul>
                        <li>Regular fit, mid-weight t-shirt</li>
                        <li>Natural color, 100% premium combed organic cotton</li>
                        <li>Quality cotton grown without the use of herbicides or pesticides - GOTS certified</li>
                        <li>Soft touch water based printed in the USA</li>
                    </ul>
                    <hr>
                </div>
                <div class="reviews">
                    <h2><i class="fa-solid fa-star" style="color: black;"></i>4,87 · 142 Reviews</h2>
                    <div class="tacgia">
                        <div class="cody_left">
                            <div class="img_tg">
                                <div class="tg_icon">
                                    <p>
                                        <img src="/img/img/lastavatar.png" alt="">Cody Fisher
                                        May 20, 2021
                                    </p>
                                    <p><i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </p>



                                </div>
                                <p class="tg_text">
                                    Very nice feeling sweater. I like it better than a regular hoody because it is
                                    tailored to be a slimmer fit. Perfect for going out when you want to stay comfy. The
                                    head opening is a little tight which makes it a little.
                                </p>
                            </div>
                            <div class="img_tg">
                                <div class="tg_icon">
                                    <p>
                                        <img src="/img/img/lastavatar.png" alt="">Cody Fisher
                                        May 20, 2021
                                    </p>
                                    <p><i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </p>

                                </div>
                                <p class="tg_text">
                                    Very nice feeling sweater. I like it better than a regular hoody because it is
                                    tailored to be a slimmer fit. Perfect for going out when you want to stay comfy. The
                                    head opening is a little tight which makes it a little.
                                </p>

                            </div>
                        </div>
                        <div class="cody_right">
                            <div class="img_tg">
                                <div class="tg_icon">
                                    <p>
                                        <img src="/img/img/lastavatar.png" alt="">Cody Fisher
                                        May 20, 2021
                                    </p>
                                    <p><i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </p>



                                </div>
                                <p class="tg_text">
                                    Very nice feeling sweater. I like it better than a regular hoody because it is
                                    tailored to be a slimmer fit. Perfect for going out when you want to stay comfy. The
                                    head opening is a little tight which makes it a little.
                                </p>
                            </div>
                            <div class="img_tg">
                                <div class="tg_icon">
                                    <p>
                                        <img src="/img/img/lastavatar.png" alt="">Cody Fisher
                                        May 20, 2021
                                    </p>
                                    <p><i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </p>


                                </div>
                                <p class="tg_text">
                                    Very nice feeling sweater. I like it better than a regular hoody because it is
                                    tailored to be a slimmer fit. Perfect for going out when you want to stay comfy. The
                                    head opening is a little tight which makes it a little.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="show">
                        <button>Show me all 142 review</button>
                    </div>
                    <hr>
                </div>
                <!-- custom -->
                <h2>Customers also purchased</h2>
                <div class="product2">
                    <div class="product_new">
                        <div class="product_img2">
                            <img src="/img/img/seller2.webp" alt="">
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
                            <button style="background-color: #435c7a;"></button><button
                                style=" background-color: #8fb5da"></button><button
                                style="background-color: rgb(44, 60, 87);"></button><button
                                style="background-color: rgb(125, 125, 125);"></button><button
                                style="background-color: rgb(38, 41, 47)"></button>
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
                            <img src="/img/img/sport-6.webp" alt="">
                            <div class="sz">
                                <button class="btn">
                                    <i class="fa-solid fa-bag-shopping"></i> Add to bag
                                </button>

                                <button class="btn"><i class="fa-brands fa-slack"></i> Quick view</button>
                            </div>
                        </div>
                        <i class="fa-sharp fa-solid fa-heart"></i>
                        <div class="color1">
                            <button style="background-color: rgb(167, 139, 250);"></button><button
                                style=" background-color:rgb(250, 204, 21)"></button><button
                                style="background-color: rgb(251, 146, 60)"></button><button
                                style="background-color:rgb(26, 177, 86)"></button><button
                                style="background-color: rgb(38, 41, 47)"></button>
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

                            <img src="/img/img/sp2.webp" alt="">
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
                            <button style="background-color: #435c7a;"></button><button
                                style=" background-color: #8fb5da"></button><button
                                style="background-color: rgb(44, 60, 87);"></button><button
                                style="background-color: rgb(125, 125, 125);"></button><button
                                style="background-color: rgb(38, 41, 47)"></button>
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
                            <img src="/img/img/sport-2.webp" alt="">
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
                            <button style=" background-color:rgb(250, 204, 21)"></button><button
                                style="background-color: rgb(251, 146, 60)"></button><button
                                style="background-color:rgb(26, 177, 86)"></button><button
                                style="background-color: rgb(38, 41, 47)"></button>
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
                                <button
                                    style="height: 53px; width: 200px; border-radius: 20px; background-color: black; color: white; font-weight: 600;">Discover
                                    more</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="hr" style="width: 1200px;margin: 0 auto;">
                    <hr>
                </div>
            </div>
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

</body>

</html>