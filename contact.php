<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
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
            <div class="col-lg-6 m-auto text-center border-left border-info border-right p-5 shadow-lg">

                <h1>Contact Us</h1>
                <hr>
                <form action="/examples/actions/confirmation.php" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">

                                <input type="text" class="form-control border-warning" id="inputName"
                                    placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">

                                <input type="email" class="form-control border-warning" id="inputEmail"
                                    placeholder="Enter Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control border-warning" id="inputSubject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group">

                        <textarea class="form-control border-warning" id="inputMessage" rows="5"
                            placeholder="Your Message" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i>
                            Send</button>
                    </div>
                </form>
            </div>

        </div>
    </div>



    <br><br>

    <?php include 'footer.php'; ?>

</body>

</html>