<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| New Hope Bulacan Agriculture Inc.</title>
    <link rel="stylesheet" href="index.css">

    <!-- style for components -->
    <link rel="stylesheet" href="comp.css">
    <link rel="stylesheet" href="all.css">

    <!-- test -->
    <!-- <link rel="stylesheet" href="test.css"> -->
    <script defer src="index.js"></script>

</head>
<body>
    <?php include 'header.php'; ?>

    <section class="top-banner">
        <div class="banner-image">
            <img src="asset/topbanner2.jpg" alt="Top Banner">
        </div>
    </section>

    <main>

        <!-- Carousel Banner -->
        <section class="carousel-container">
            <div class="carousel">
                <div class="carousel-item">
                    <img src="asset/banner1.jpg" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="asset/banner2.jpg" alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="asset/banner3.jpg" alt="Banner 3">
                </div>
            </div>
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </section>

        <!-- Overview of the company -->
        <section class="Overview">
            <h1>PROFITING THE FARMERS,</h1>
            <h1>BENEFITING THE CONSUMERS</h1>
            <p>New Hope Bulacan Agriculture Inc. is a company that provides quality products and services to help farmers in the Philippines. We are committed to providing the best solutions to help farmers increase their yield and income. Our products are made from natural ingredients and are safe for the environment. We also offer training and seminars to help farmers improve their skills and knowledge. Our goal is to help farmers achieve success and improve their quality of life.</p>
        </section>

        <section class="products-overview">
            <h2>Our Products</h2>
            <div class="product-info">
                <div class="product">
                    <img src="asset/phitem.png" alt="Product 1">
                    <h3>Product 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien.</p>
                    
                </div>
                <div class="product">
                    <img src="asset/phitem.png" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien.</p>
                </div>
                <div class="product">
                    <img src="asset/phitem.png" alt="Product 3">
                    <h3>Product 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien.</p>
                </div>
                <div class="product">
                    <img src="asset/phitem.png" alt="Product 4">
                    <h3>Product 4</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien.</p>
                </div>
            </div>
            <div class="btn-container">
                <a href="#" class="buttonhollow">Search Feeds</a>
            </div>

        </section>

        <section class="services-overview">
                <h2>Our Services</h2>
                <div class="service-info">
                    <div class="service">
                        <img src="asset/deliver.png" alt="Service 1">
                        <h3>Greatness Delivered to Your Door</h3>
                        <p>You've always known what's best for your animals. We just made it a little easier for you to get it...</p>
                        <div class="btn-container">
                            <a href="#" class="buttonhollow">Learn More</a>
                        </div>
                    </div>
                    <div class="service">
                        <img src="asset/phfeeds.png" alt="Service 2">
                        <h3>Greatness Delivered to Your Door</h3>
                        <p>You've always known what's best for your animals. We just made it a little easier for you to get it...</p>
                        <div class="btn-container">
                            <a href="#" class="buttonhollow">Learn More</a>
                        </div>
                    </div>
                    <div class="service">
                        <img src="asset/service3.jpg" alt="Service 3">
                        <h3>Greatness Delivered to Your Door</h3>
                        <p>You've always known what's best for your animals. We just made it a little easier for you to get it...</p>
                        <div class="btn-container">
                            <a href="#" class="buttonhollow">Learn More</a>
                        </div>
                    </div>
                    <div class="service">
                        <img src="asset/service4.jpg" alt="Service 4">
                        <h3>Greatness Delivered to Your Door</h3>
                        <p>You've always known what's best for your animals. We just made it a little easier for you to get it...</p>
                        <div class="btn-container">
                            <a href="#" class="buttonhollow">Learn More</a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="info-sections">
            <section class="info-block">
                <div class="content">
                    <h2>Continuously Innovating Animal Nutrition</h2>
                    <p>We are committed to advancing animal nutrition through innovation. With over 24,000 studies conducted, we provide impactful, accessible solutions for animal owners worldwide.</p>
                </div>
                <div class="image">
                    <img src="asset/5.png" alt="Animal Nutrition Innovation">
                </div>
            </section>

            <section class="info-block reverse">
                <div class="content">
                    <h2>FeedMasters Quality Guarantee</h2>
                    <p>Our FeedGuard® Nutrition System guarantees quality at every production stage, ensuring your animals get the best nutrition possible.</p>
                </div>
                <div class="image">
                    <img src="asset/5.png" alt="Quality Guarantee">
                </div>
            </section>

            <section class="info-block">
                <div class="content">
                    <h2>FeedGuard® Nutrition System</h2>
                    <p>We source only the best ingredients that meet our stringent quality standards to ensure consistent nutrition in every feeding.</p>
                </div>
                <div class="image">
                    <img src="asset/5.png" alt="FeedGuard Nutrition System">
                </div>
            </section>
        </div>

    
        


    </main>

    <?php include 'footer.php'; ?>
</body>
</html>