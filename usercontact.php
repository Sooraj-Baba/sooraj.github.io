<?php
session_start();
if(!isset($_SESSION['NameOfUser']))
header('location:index.php');
?>
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
                        <a href="userhome.php" class="nav-link text-white btn btn-outline-warning border-0">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="userproduct.php"
                            class="nav-link text-white btn btn-outline-warning border-0">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="userservices.php"
                            class="nav-link text-white btn btn-outline-warning border-0">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="usercontact.php"
                            class="nav-link text-white btn btn-outline-warning border-0">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="userabout.php" class="nav-link text-white btn btn-outline-warning border-0">About</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav position-relative ml-auto">
                    <li class="nav-item">
                        <a class="text-white btn btn-success text-uppercase border-0 "><i class="fa
                                    fa-user" aria-hidden="true"></i> <?php echo $_SESSION['NameOfUser'] ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="text-white btn btn-outline-danger border-0 pl-3"><i class="fa
                                    fa-sign-out" aria-hidden="true"></i>Logout
                        </a>
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

                                <input type="text" class="form-control border-info" id="inputName"
                                    placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">

                                <input type="email" class="form-control border-info" id="inputEmail"
                                    placeholder="Enter Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control border-info" id="inputSubject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group">

                        <textarea class="form-control border-info" id="inputMessage" rows="5" placeholder="Your Message"
                            required></textarea>
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