<!DOCTYPE html>
<html lang="en">

    <?php
        include ('head.php');
        include ('navbar.php');
    ?>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

         <!-- Header Start -->
         <div class="container-fluid bg-breadcrumb">
            <ul class="breadcrumb-animation">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Contact</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="text-primary mb-4">Contact Us</h4>
                    <h1 class="display-5 mb-4">Get In Touch With Us</h1>
                    <!-- <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum. -->
                    </p>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center mb-4" style="flex: 1; margin-right: 20px;">
                                <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;">
                                    <i class="fa fa-home fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Addresses</h4>
                                    <p class="mb-0">11Th avenue biglang awa</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-4" style="flex: 1; margin-left: 20px;">
                                <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;">
                                    <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Addresses</h4>
                                    <p class="mb-0">Caloocan City</p>
                                </div>
                            </div>

                            <!-- Mobile Block -->
                            <div class="d-flex align-items-center mb-4" style="flex: 1; margin-right: 20px;">
                                <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;">
                                    <i class="fa fa-phone-alt fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Mobile</h4>
                                    <p class="mb-0">09123456789</p>
                                    <p class="mb-0">09123456789</p>
                                </div>
                            </div>

                            <!-- Email Block -->
                            <div class="d-flex align-items-center mb-4" style="flex: 1;">
                                <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;">
                                    <i class="fa fa-envelope-open fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Email</h4>
                                    <p class="mb-0">bsemc@gmail.com</p>
                                    <p class="mb-0">bsemc@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded h-100">
                        <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.0440499452757!2d120.99215487520945!3d14.65344098583915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b686dd24e859%3A0xe442b57504cbf05f!2sUniversity%20of%20Caloocan%20City%20-%20South%20Campus!5e0!3m2!1sen!2sph!4v1729391468578!5m2!1sen!2sph" 
                        width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <?php
        include('footer.php');
        ?>
    </body>

</html>