<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Helping Hands</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>

    <?php include('navbar.php'); ?>

    <!--  ************************* Page Title Starts Here ************************** -->

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Contact Us</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Contact US</li>
                </ul>
            </div>
        </div>
    </div>



    <!--  ************************* Contact Us Starts Here ************************** -->


    <div style="margin-top:0px;" class="row no-margin">
        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6815.294975811373!2d75.63794393836658!3d31.341107086854368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1639804405229!5m2!1sen!2sin" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


    </div>

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">


                <div style="padding:20px" class="col-sm-7">
                    <h2>Contact Form</h2> <br>
                    <form action="contact_data.php" method="post">
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                            <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm" required></div>
                        </div>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Email Address </label><span>:</span></div>
                            <div class="col-sm-8"><input type="email" name="email" placeholder="Enter Email Address" class="form-control input-sm" required></div>
                        </div>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                            <div class="col-sm-8"><input type="number" name="number" placeholder="Enter Mobile Number" class="form-control input-sm" required></div>
                        </div>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                            <div class="col-sm-8">
                                <textarea rows="5" name="message" placeholder="Enter Your Message" class="form-control input-sm" required></textarea>
                            </div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                            <div class="col-sm-8">
                                <button class="btn btn-primary btn-sm">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">
                        <h2 style="margin-top:0px;">Address</h2>
                        APEEJAY Institute <br>
                        Rama Mandi Road(Jal) <br>
                        Punjab, IND <br>
                        Phone: +91 7814820178 <br>
                        Email: <a href="mailto:souravsabi423@gail.com" class="text-muted">souravsabi423@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!--  ************************* Footer Starts Here ************************** -->

    <?php include('footer.php') ?>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>