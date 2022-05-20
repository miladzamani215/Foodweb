<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فست فود بچه های کوچه پشتی</title>
    <!--Font Awesome CDN link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
    <!--coustom css file-->
    <link rel="stylesheet" href="data/css/style.css">
<body>
    <!--Header section start-->
    <header class="header">

        <a href="#" class="logo"><i class="fas fa-utensils"></i> food</a>
        
        <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="#About">About</a>
            <a href="#Popular">Popular</a>
            <a href="#Menu">Menu</a>
            <a href="#Order">Order</a>
            <a href="#Blogs">Blogs</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="cart-btn" class="fas fa-shopping-cart"></div>
            <div id="login-btn" class="fas fa-user"></div>
        </div>
    </header>
    <!--Header section end-->
    <!--serch box contaner-->
    <section class="serch-box-contaner">
        
        <form action="">
            <input type="search" placeholder="search here..." id="search-box">
            <label for="search box" class="fa fa-search"></label>
        </form>

    </section>
    <!--shoping cart section-->
    <section class="shoping-cart-contaner">
        <div class="producs-contaner">
            <h3 class="title">
                Your Producs
            </h3>

            <div class="shoping-box">
                <div class="box">
                    <i class="fas fa-times"></i>
                    <img src="data/image/menu-4.png" alt="" class="producs-image">
                    <div class="content">
                        <h3>dellicuse food</h3>
                        <span>Quantity :</span>
                        <input type="nomber" value="1">
                        <br>
                        <span>Price :</span>
                        <span class="Price">
                            $40.00
                        </span>
                    </div>
                </div>
                <div class="box">
                    <i class="fas fa-times"></i>
                    <img src="data/image/menu-3.png" alt="" class="producs-image">
                    <div class="content">
                        <h3>dellicuse food</h3>
                        <span>Quantity :</span>
                        <input type="nomber" value="1">
                        <br>
                        <span>Price :</span>
                        <span class="Price">
                            $40.00
                        </span>
                    </div>
                </div>
                <div class="box">
                    <i class="fas fa-times"></i>
                    <img src="data/image/menu-2.png" alt="" class="producs-image">
                    <div class="content">
                        <h3>dellicuse food</h3>
                        <span>Quantity :</span>
                        <input type="nomber" value="1">
                        <br>
                        <span>Price :</span>
                        <span class="Price">
                            $40.00
                        </span>
                    </div>
                </div>
                <div class="box">
                    <i class="fas fa-times"></i>
                    <img src="data/image/menu-1.png" alt="" class="producs-image">
                    <div class="content">
                        <h3>dellicuse food</h3>
                        <span>Quantity :</span>
                        <input type="nomber" value="1">
                        <br>
                        <span>Price :</span>
                        <span class="Price">
                            $40.00
                        </span>
                    </div>
                </div>

            </div>
        </div>
        <!--shoping cart total-->
        <div class="shoping-cart-total">
            <h3 class="title">
                Cart Total
            </h3>
            <div class="box">
                <h3 class="subtotal">
                    Subtotal :
                    <span>$200</span>
                </h3>
                <h3 class="total">
                    Total:
                    <span>$200</span>
                </h3>
                <a href="#" class="btn">proceed to checkout</a>
            </div>
        </div>
    </section>
    <!--login form-->
    <section class="login-form-contaner <?php if($_GET["a"] == "loginfaild"){ echo "active";} ?>">

        <form action="admin/index.php?c=login&&a=loginform" method="post">
            <h3>
                Login Form
            </h3>
            <input type="text" name="frm[user]" placeholder="email or username..." class="box">
            <input type="password" name="frm[password]" placeholder="your password..." class="box">
            <div class="remember">
                <input type="checkbox" name="frm[remember]" id="remember">
                <label for="remember">Remember Me</label>
            </div>
            <input type="submit" name="btn" value="Login Now" class="btn">
            <p> Forgote your password? <a href="#">Click Here...</a> </p>
            <p>Dont Have An Account? <a href="#">Creat One</a> </p>
        </form>

    </section>