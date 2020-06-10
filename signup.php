<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'links/link.php'; ?>

    <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */

    .carousel-inner img {
        width: 100%;
        height: 470px;
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

    .form-control {
        border-radius: 4px;
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

    <div class="container-fluid mb-1">
        <div class="row">
            <div class="col-lg-7">
                <div id="demo" class="carousel slide " data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="banner/1.jpg" alt="Los Angeles">
                        </div>
                        <div class="carousel-item">
                            <img src="banner/2.jpg" alt="Chicago">
                        </div>
                        <div class="carousel-item">
                            <img src="banner/3.jpg" alt="New York">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>

            <?php

include 'connection.php';

if(isset($_POST['shilpi'])){
    
$us = $_POST['username'];
$em = $_POST['email'];
$mo = $_POST['mobile'];
$ps = $_POST['passw'];

$match = "SELECT * FROM signup WHERE emails = '$em'";
$qus = mysqli_query($conn,$match);
$chk = mysqli_num_rows($qus);

if($chk){

    ?>
            <script>
            alert('Email already registered');
            </script>
            <?php

}else{

$ins = "INSERT INTO signup(user,emails,mobiles,passs) VALUES('$us','$em','$mo','$ps')";
$qu = mysqli_query($conn,$ins);
if($qu){
    ?>
            <script>
            alert('Register Successfully');
            </script>
            <script>
            location.replace('index.php');
            </script>
            <?php
}else{
    ?>
            <script>
            alert('Failled to register');
            </script>
            <?php
}
}

    
}


            ?>

            <div class="col-lg-5 border text-center shadow">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                    <h2>Create Account</h2>
                    <p class="lead">It's free and hardly takes more than 30 seconds.</p>
                    <div class="form-group ">
                        <div class="input-group w-75 m-auto">

                            <input type="text" class="form-control" name="username" placeholder="Username"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="input-group w-75 m-auto">

                            <input type="email" class="form-control" name="email" placeholder="Email Address"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group w-75 m-auto">

                            <input type="text" class="form-control" name="mobile" placeholder="Mobile no."
                                required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group w-75 m-auto">

                            <input type="text" class="form-control" name="passw" placeholder="Password"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary w-75 btn-md" name="shilpi">Sign Up</button>
                    </div>
                    <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms
                            &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
                </form>
                <div class="text-center">Already have an account? <a href="index.php">Login here</a>.</div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <br>
        <h2 class="text-center shadow ">TOP KIDS WEAR ITEM</h2>
        <br>
        <div class="row">

            <div class="col-sm-3">
                <div class="card m-auto">
                    <img class="card-img-top img-fluid" style="height: 290px;" src="Items/2402419a.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-center">Shoes</h5>
                        <span class="float-left">Price -- </span>
                        <strike class="text-danger pl-4 font-italic">INR 700 rs.</strike>
                        <span class="pl-4"> INR 340/--</span>
                        <a href="" class="w-100 btn btn-outline-info">Buy</a>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="card m-auto">
                    <img class="card-img-top img-fluid" style="height: 290px;" src="Items/2425312a (1).jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-center">Shirt</h5>
                        <span class="float-left">Price -- </span>
                        <strike class="text-danger pl-4 font-italic">INR 450 rs.</strike>
                        <span class="pl-4"> INR 240/--</span>
                        <a href="" class="w-100 btn btn-outline-info">Buy</a>
                    </div>

                </div>
            </div>
            <div class="col-sm-3">
                <div class="card m-auto">
                    <img class="card-img-top img-fluid" style="height: 290px;" src="Items/2443204a.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-center">Shoes</h5>
                        <span class="float-left">Price -- </span>
                        <strike class="text-danger pl-4 font-italic">INR 700 rs.</strike>
                        <span class="pl-4"> INR 340/--</span>
                        <a href="" class="w-100 btn btn-outline-info">Buy</a>
                    </div>

                </div>
            </div>



            <div class="col-sm-3 ">
                <div class="card m-auto">
                    <img class="card-img-top img-fluid" style="height: 290px;" src="Items/2427101a.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-center">Shoes</h5>
                        <span class="float-left">Price -- </span>
                        <strike class="text-danger pl-4 font-italic">INR 700 rs.</strike>
                        <span class="pl-4"> INR 340/--</span>
                        <a href="" class="w-100 btn btn-outline-info">Buy</a>
                    </div>

                </div>
            </div>
            <div class="col-sm-3 pt-3">
                <div class="card m-auto">
                    <img class="card-img-top img-fluid" style="height: 290px;" src="Items/2402419a.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-center">Shoes</h5>
                        <span class="float-left">Price -- </span>
                        <strike class="text-danger pl-4 font-italic">INR 700 rs.</strike>
                        <span class="pl-4"> INR 340/--</span>
                        <a href="" class="w-100 btn btn-outline-info">Buy</a>
                    </div>

                </div>
            </div>
            <div class="col-sm-3 pt-3">
                <div class="card m-auto">
                    <img class="card-img-top img-fluid" style="height: 290px;" src="Items/2425312a (1).jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-center">Shirt</h5>
                        <span class="float-left">Price -- </span>
                        <strike class="text-danger pl-4 font-italic">INR 450 rs.</strike>
                        <span class="pl-4"> INR 240/--</span>
                        <a href="" class="w-100 btn btn-outline-info">Buy</a>
                    </div>

                </div>
            </div>
            <div class="col-sm-3 pt-3">
                <div class="card m-auto">
                    <img class="card-img-top img-fluid" style="height: 290px;" src="Items/2443204a.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-center">Shoes</h5>
                        <span class="float-left">Price -- </span>
                        <strike class="text-danger pl-4 font-italic">INR 700 rs.</strike>
                        <span class="pl-4"> INR 340/--</span>
                        <a href="" class="w-100 btn btn-outline-info">Buy</a>
                    </div>

                </div>
            </div>



            <div class="col-sm-3 pt-3">
                <div class="card m-auto">
                    <img class="card-img-top img-fluid" style="height: 290px;" src="Items/2427101a.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-center">Shoes</h5>
                        <span class="float-left">Price -- </span>
                        <strike class="text-danger pl-4 font-italic">INR 700 rs.</strike>
                        <span class="pl-4"> INR 340/--</span>
                        <a href="" class="w-100 btn btn-outline-info">Buy</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br><br>

    <?php include 'footer.php'; ?>

</body>

</html>