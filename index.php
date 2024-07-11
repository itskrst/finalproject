<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo4.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover the Taste of Real Coffee</title>
    <link rel="stylesheet" href="style.css">

    

    <!-- icons -->
    <link rel="stylesheet" 
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <header>
        <a href="#" class="logo">
            <img src="logo2.png" alt="Logo">
        </a>
        
        <!-- menu icon -->
        <i class='bx bx-menu' id="menu-icon"></i>

        <!-- link -->
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#customers">Customers</a></li>
        </ul>

        <!-- icons -->
        <div class="header-icon">
            <a href="./cart.php"><i class='bx bx-cart'></i></a>
            <i class='bx bx-search-alt-2' id="search-icon"></i>
        </div>
        <!-- search box -->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search here...">
        </div>
    </header>


<!-- home --> 
<section class="home" id="home">
    <div class="home-text">
        <h1>Start your day <br> with coffee</h1> 
        <p>Begin your day with the regal experience of our renowned coffee. Fit for royalty, each sip transports you to a realm of rich flavors and invigorating aroma. Elevate your mornings with our signature blend, meticulously crafted to awaken your senses and set the tone for a productive day.</p>
        <a href="#" class="btn">Shop Now</a>
    </div>
    <div class="home-img">
        <img src="coffee102.jpg" alt="">
    </div>
</section>

<!-- about section --> 
<section class="about" id="about">
    <div class="about-img">
        <img src="about1.jpg" alt="">
    </div>
    <div class="about-text">
        <h2>Our History</h2>
        <p> We are computer science students tasked with developing a transaction-based website or program utilizing all PHP constructs. We decided to create a coffee shop website where we could share our love for coffee! Our shop is named "Don Carlos," a name chosen to convey a sense of superiority and was dedicated to our dear friend Carlos, who is now in a good place. </p>
        <a href="#" class="btn">Learn more</a>
    </div>    
    </section>

    <!--  products -->  
    <section class="products" id="products">
        <div class="heading">
            <h2>Our popular products</h2>
        </div>

        <div class="products-container">
        <div class="box">
            <img src="americano.jpg" alt="">
            <h3>Americano</h3>
            <div class="content">
                <span>$25</span>
                <a href="./process.php?action=add-cart&title=Americano&price=25">Add to cart</a>
                </div>


            </div>
            <div class="box">
            <img src="cappuccino.webp" alt="">
            <h3>Cappuccino</h3>
            <div class="content">
                <span>$23</span>
                <a href="./process.php?action=add-cart&title=Cappuccino&price=25">Add to cart</a>
                </div>
            </div>


            <div class="box">
    <img src="spanishlatte.webp" alt="Spanish Latte">
    <h3>Spanish Latte</h3>
    <div class="content">
        <span>$27</span>
        <a href="./process.php?action=add-cart&title=SpanishLatte&price=27">Add to cart</a>
    </div>
</div>



        </div>
    </section>

    <!-- customers --> 
    <section class="customers" id="customers">
        <div class="heading">
            <h2>Our customers</h2>
        </div>

        <!-- container --> 
        <div class="customers-container">
            <div class="box">
                <div class="stars">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                </div>
                <p>I recently tried the coffee from this brand, and I must say it’s a game-changer!</p>
                <h2>Andrei Delica</h2>
                <img src="customer1.jpg" alt="">
            </div>


            <div class="box">
                <div class="stars">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                </div>
                <p>The taste is rich, robust, and perfectly balanced. From the first sip, I was hooked. The aroma alone is enough to lift my spirits in the morning. </p>
                <h2>Kit Chua</h2>
                <img src="customer2.jpeg" alt="">
            </div>

            
            <div class="box">
                <div class="stars">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                </div>
                <p>If you’re a coffee lover, this brand is a must-try. Trust me, you won’t be disappointed!</p>
                <h2>Joyce Flores</h2>
                <img src="person3.jpg" alt="">
            </div>



        </div>
    </section>

    <section class="footer">
        <div class="footer-box">
            <h3>Coffee Shop</h3>
            <p>lorem</p>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>
                <a href="#"><i class='bx bxl-tiktok' ></i></a>

            </div>
        </div>
        <div class="footer-box">
            <h3>Support</h3>
            <li><a href="#">Product</a></li>
            <li><a href="#">Help & Support</a></li>
            <li><a href="#">Return Policy</a></li>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Product</a></li>
        </div>

        <div class="footer-box">
            <h3>View Guides</h3>
            <li><a href="#">Features</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Blog Posts</a></li>
            <li><a href="#">Our Branches</a></li>
        </div>

        <div class="footer-box">
            <h3>Contact</h3>
            <div class="contact">
                <span><i class='bx bxs-map'></i>FEU Tech Institute of Technology</span>
                <span><i class='bx bxs-phone'></i>0912345678</span>
                <span><i class='bx bxs-envelope'></i>doncarlos@gmail.com</span>

            </div>
        </div>
    </section>

    <div class="copyright">
        <p>&#169; Don Carlo's All Rights Reserved.</p>
    </div>

</body>
</html>


