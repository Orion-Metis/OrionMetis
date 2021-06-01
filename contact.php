<?php include("contactform.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OrionMetis - Contact</title>
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="tm-header">
        <div class="container-fluid">
            <div class="tm-header-inner">
                <a href="index.html" class="navbar-brand tm-site-name"><img id="logo" src="img/logo_original.png" /></a>

                <!-- navbar -->
                <nav class="navbar tm-main-nav">

                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                        &#9776;
                    </button>

                    <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="products.html" class="nav-link">Products</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">About</a>
                            </li>
                            <li class="nav-item active">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                </nav>
                <a href="#"><img id="isologo" src="img/iso_certification_small.png" /></a>

            </div>
        </div>
    </div>

    <!--<div class="tm-contact-img-container">

    </div>-->
    <section class="tm-section">
        <div class="container-fluid">
            <div class="row tm-2-rows-sm-swap">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12 col-xl-12 tm-2-rows-sm-down-2 tm-page-header">
                    <h4>Contact Us</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    <section class="tm-margin-t-mid tm-map-section">
                        <div class="earth3dmap-com">
                            <iframe id="iframemap" src="https://maps.google.com/maps?key=AIzaSyA22-EA8BziByHPMB7CFHB5AM4LcVz9zeA&q=OrionMetis&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="500" frameborder="0" scrolling="no"></iframe><div style="color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right; padding: 10px;"></div>
                        </div>

                    </section>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                    <section>
                        <p class="tm-form-description">Please contact us for TDS (Technical Data Sheet) and MSDS (Material Safety Data Sheet)</p>
                       <form class="tm-contact-form" role="form" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            <?php echo "<p class='text-danger'>$errName</p>";?>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                            <?php echo "<p class='text-danger'>$errEmail</p>";?>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="8" name="message" placeholder="Message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                            <?php echo "<p class='text-danger'>$errMessage</p>";?>
                        </div>
                        <div class="form-group">
                            <?php echo $result; ?>
                        </div>
                       <div class="form-group">
                            <input id="submit" name="submit" type="submit" value="Send" class="tm-btn">
                        </div>
                    </form>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <footer class="tm-footer">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-5">
                    <h4 class="tm-margin-b-20 tm-gold-text">Orion Metis</h4>
                    <p>
                        204, 2nd Floor, 2nd Main Road, Mahalakshmi Layout, <br />Bengaluru, Karnataka 560086
                    </p>
                    <img src="img/make-in-india-logo.png" />
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <h4 class="tm-margin-b-20 tm-gold-text">Useful links</h4>
                    <nav>
                        <ul>
                            <li><a href="#customer"><i class="fa fa-stop"></i>Our Clients</a></li>
                            <li><a href="about.html"><i class="fa fa-stop"></i>About Us</a></li>
                            <li><a href="products.html"><i class="fa fa-stop"></i>Our Products</a></li>
                            <li><a href="contact.html"><i class="fa fa-stop"></i>Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="contact-info">
                        <div class="tm-margin-b-20 tm-gold-text">
                            <h4>Contact Information</h4>
                        </div>
                        <ul>
                            <li><span>Phone:</span>(080) 23596521, 23596539</li>
                            <li><span>Mobile:</span>(+91) 9886894854, (+91) 94803333700</li>
                            <li><span>Email:</span><a href="mailto:orionmetis@gmail.com">orionmetis@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 tm-copyright-col">
                    <p class="tm-copyright-text">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear())</script> - <a href="https://orionmetis.co.in/">OrionMetis</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- load JS files -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>
</body>
</html>