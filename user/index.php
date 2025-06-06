<!DOCTYPE html>
<html lang="en">

    <?php
        include ('head.php');
        include ('navbar.php');
    ?>

    <body>

            <!-- Hero Header Start -->
            <div class="hero-header overflow-hidden px-5">
                <div class="rotate-img">
                    <img src="img/sty-1.png" class="img-fluid w-100" alt="">
                    <div class="rotate-sty-2"></div>
                </div>
                <div class="row gy-5 align-items-center">
                    <div class="col-lg-6" data-wow-delay="0.1s">
                        <h1 class="display-4 text-dark mb-4">Turn your Dreams into Reality</h1>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5">Order Now</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/img/try-2.png" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
            </div>
            <!-- Hero Header End -->

    <main id="main">
    <!-- Start ORDER Section -->
    <section  class="pricing">
        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">
                <h2>Products</h2>
                <p>Select the product you want to order.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <!-- Product Card 1 -->
                    <div class="card text-center p-4 product-card" style="display: flex; flex-direction: column; height: 100%;">
                        <img src="assets/img/about-1.png" class="card-img-top product-img" alt="Product Image">
                        <div class="card-body" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <h5 class="card-title">Malaki</h5>
                            <p class="card-text">Malaki</p>
                            <h5 class="card-text">$50.00</h5>
                            <div class="text-center" style="margin-top: auto;">  <!-- Center the button -->
                                <button class="btn btn-primary order-btn col-10" type="button">Order</button>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Card 1 -->
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <!-- Product Card 2 -->
                    <div class="card text-center p-4 product-card" style="display: flex; flex-direction: column; height: 100%;">
                        <img src="assets/img/about-1.png" class="card-img-top product-img" alt="Product Image">
                        <div class="card-body" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <h5 class="card-title">Product Name 2</h5>
                            <p class="card-text">Description of the second product goes here.</p>
                            <h5 class="card-text">$60.00</h5>
                            <div class="text-center" style="margin-top: auto;">  <!-- Center the button -->
                                <button class="btn btn-primary order-btn col-10" type="button">Order</button>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Card 2 -->
                </div>
            </div>
        </div>
    </section>
    <!-- End ORDER Section -->
    </main>
        


        <?php
        include('footer.php');
        ?>
    </body>

</html>