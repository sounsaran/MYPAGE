<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Logo Icon -->
    <link href="assets/img/c2.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Vendor CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style3.css" rel="stylesheet">
</head>
<body>
    <div class="">
        <!-- MENU -->
        <?php include"Items-page/menu-bar.php" ?>
        <section id="contact"  style="margin-bottom: 50px;">
            <!--  Section Title -->
            <div class="container text-center"  style="margin-top: 90px;">
                <h2>Contact</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="row gy-4">
                            <div class="col-sm-6">
                                <div class="info-item card p-3" data-aos="fade" data-aos-delay="200">
                                    <i class="fa-solid fa-location-dot text-danger" style="font-size: 30px;"></i>
                                    <h3 class="mt-1">Address</h3>
                                    <p>A108 Adam Street</p>
                                    <p>New York, NY 535022</p>
                                </div>
                            </div><!-- End Info Item -->
                            <div class="col-sm-6">
                                <div class="info-item card p-3" data-aos="fade" data-aos-delay="300">
                                    <i class="fa-solid fa-phone text-danger" style="font-size: 30px;"></i>
                                    <h3 class="mt-1">Call Us</h3>
                                    <p>+1 5589 55488 55</p>
                                    <p>+1 6678 254445 41</p>
                                </div>
                            </div><!-- End Info Item -->
                            <div class="col-sm-6">
                                <div class="info-item card p-3" data-aos="fade" data-aos-delay="400">
                                    <i class="fa-regular fa-envelope text-danger" style="font-size: 30px;"></i>
                                    <h3 class="mt-1">Email Us</h3>
                                    <p>info@example.com</p>
                                    <p>contact@example.com</p>
                                </div>
                            </div><!-- End Info Item -->
                            <div class="col-sm-6">
                                <div class="info-item card p-3" data-aos="fade" data-aos-delay="500">
                                    <i class="fa-regular fa-clock text-danger" style="font-size: 30px;"></i>
                                    <h3 class="mt-1">Open Hours</h3>
                                    <p>Monday - Friday</p>
                                    <p>9:00AM - 05:00PM</p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form card p-3" style="height: 100%;" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                </div>
                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-danger">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->
                </div>
            </div>
        </section>
        <?php include"Items-page/Team.php" ?>
        <?php include"Items-page/footer.php" ?>
    </div>
</body>
</html>