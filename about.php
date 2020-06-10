<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'links/link.php'; ?>

    <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */

    .carousel-inner img {
        width: 100%;
        height: 300px;
    }

    .navbar {
        margin-bottom: 50px;
    }

    /* Remove the jumbotron's default bottom margin */

    .jumbotron {
        margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */

    footer {
        background-color: #f2f2f2;
        padding: 25px;
    }

    Edit in JSFiddle Result HTML CSS JavaScript Resources .social-link {
        width: 30px;
        height: 30px;
        border: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #666;
        border-radius: 50%;
        transition: all 0.3s;
        font-size: 0.9rem;
    }

    .social-link:hover,
    .social-link:focus {
        background: #ddd;
        text-decoration: none;
        color: #555;
    }
    </style>
</head>

<body>

    <div class="jumbotron bg-light " style="background-image: url('banner/4.jpg'); background-size: cover;">
        <div class="container text-center text-white" style="text-shadow:5px 5px 5px black;">
            <h1>Online Kids Wear Shop</h1>
            <p>Mission, Vission & Values</p>
        </div>
    </div>

    <nav class="navbar navbar-expand-sm position-sticky fixed-top w-100 p-1" style="background-color:
            darkgreen;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand " style="color:yellow">KIDS WEAR SHOP</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarID">
                <span class="navbar-toggler-icon bg-danger"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarID">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-white btn btn-outline-warning border-0">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="services.php" class="nav-link text-white btn btn-outline-warning border-0">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link text-white btn btn-outline-warning border-0">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link text-white btn btn-outline-warning border-0">About</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav position-relative ml-auto">
                    <li>
                        <a href="signup.php" class="text-white btn btn-outline-primary border-0"><i class="fa
                                    fa-user-circle" aria-hidden="true"></i>
                            Signup</a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 m-auto text-center border p-2 shadow">





                <div class="bg-light">
                    <div class="container-fluid py-1">
                        <div class="row h-100 align-items-center py-5">
                            <div class="col-lg-6">
                                <h1 class="display-4">About us page</h1>
                                <p class="lead text-muted mb-0">Following are the services provided online for
                                    shopping:.</p>
                                <p class="lead text-muted">Developed by <a href="https://bootstrapious.com/snippets"
                                        class="text-muted">
                                        <u>Shilpi Singh</u></a>
                                </p>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block"><img
                                    src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/illus_kftyh4.png"
                                    alt="" class="img-fluid"></div>
                        </div>
                    </div>
                </div>

                <div class="bg-white py-2">
                    <div class="container py-2">
                        <div class="row align-items-center mb-3">
                            <div class="col-lg-6 order-2 order-lg-1"><i
                                    class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                                <h2 class="font-weight-light">Increasing the shopping of market</h2>
                                <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
                            </div>
                            <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img
                                    src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg"
                                    alt="" class="img-fluid mb-4 mb-lg-0"></div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-5 px-5 mx-auto"><img
                                    src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/img-2_vdgqgn.jpg"
                                    alt="" class="img-fluid mb-4 mb-lg-0"></div>
                            <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                                <h2 class="font-weight-light">Order any thing and just enjoy</h2>
                                <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-light py-3">
                    <div class="container py-3">
                        <div class="row mb-4">
                            <div class="col-lg-5">
                                <h2 class="display-4 font-weight-light">Our team</h2>
                                <p class="font-italic text-muted">My team and me have h broad level ideas to do
                                    anything.</p>
                            </div>
                        </div>

                        <div class="row text-center">
                            <!-- Team item-->
                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-white rounded shadow-sm py-5 px-4"><img
                                        src="https://res.cloudinary.com/mhmd/image/upload/v1556834132/avatar-4_ozhrib.png"
                                        alt="" width="100"
                                        class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0">Shilpi Singh</h5><span
                                        class="small text-uppercase text-muted">Company-Owner</span>
                                    <ul class="social mb-0 list-inline mt-3">
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End-->

                            <!-- Team item-->
                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-white rounded shadow-sm py-5 px-4"><img
                                        src="https://res.cloudinary.com/mhmd/image/upload/v1556834130/avatar-3_hzlize.png"
                                        alt="" width="100"
                                        class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0">Shalini Singh</h5><span
                                        class="small text-uppercase text-muted">Company-Pro..</span>
                                    <ul class="social mb-0 list-inline mt-3">
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End-->

                            <!-- Team item-->
                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-white rounded shadow-sm py-5 px-4"><img
                                        src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-2_f8dowd.png"
                                        alt="" width="100"
                                        class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0">Shweta Singh</h5><span class="small text-uppercase text-muted">CEO
                                        - Engineer </span>
                                    <ul class="social mb-0 list-inline mt-3">
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End-->

                            <!-- Team item-->
                            <div class="col-xl-3 col-sm-6 mb-5">
                                <div class="bg-white rounded shadow-sm py-5 px-4"><img
                                        src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-1_s02nlg.png"
                                        alt="" width="100"
                                        class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0">Chanda Khush.</h5><span class="small text-uppercase text-muted">CEO
                                        -
                                        Founder</span>
                                    <ul class="social mb-0 list-inline mt-3">
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End-->

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>







    </div>
    <br><br>

    <?php include 'footer.php'; ?>

</body>

</html>