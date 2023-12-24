<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    include("./includes/staticfiles.php");
    ?>
</head>

<div>
    <?php
    include("./includes/headers.php");

    ?>


    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Contact Us</h1>
                <i class="far fa-award text-primary px-2"></i>
                <a href="../index.html">Home</a>
                <i class="far fa-award text-primary px-2"></i>
                <a href="">Contact</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-secondary px-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Contact For Any Queries</h1>
                <h5 class="text-primary text-uppercase">MARYTECHENOCK IT Solutions Specialist</h5>
                <p data-animation="fadeInUp" data-delay="">We’re friendly & available to chat. Reach out to us anytime and we’ll happily answer your questions.
                    .</p>
                <form action="./backend/email.php" method="post">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-1" placeholder="John Doe" name="full_name">
                                <label for="form-floating-1">Full Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="form-floating-2" name="email" placeholder="name@example.com">
                                <label for="form-floating-2">Email address</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-3" name="subject" placeholder="Subject">
                                <label for="form-floating-3">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Message" id="form-floating-4" name="message" style="height: 150px"></textarea>
                                <label for="form-floating-4">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100" src="https://www.google.com/maps/embed?pb=place/Harare/@-17.8165686,30.8920472,11z/data=!3m1!4b1!4m6!3m5!1s0x1931a4ee1bdddb35:0xa5143b9be5134f2f!8m2!3d-17.8216288!4d31.0492259!16zL20vMGZuZ2Y?authuser=0&entry=ttu
                        frameborder=" 0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <?php

    include("./includes/subscibehtml.php")
    ?>
    
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <?php

    include("./includes/javascript.php")
    ?>
    </body>

</html>