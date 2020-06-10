<?php
session_start();
if(!isset($_SESSION['NameOfUser']))
header('location:index.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User_home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'links/link.php'; ?>
    <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */

    .carousel-inner img {
        width: 100%;
        height: 300px;
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
            <a href="#" class="navbar-brand p-1 "
                style="color:yellow; text-shadow:1px 1px 1px white; border-radius:8px;">KIDS
                WEAR
                SHOP</a>
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
    <div class="">
        <div id="demo" class="carousel slide " data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href=""><img src="banner2/b3.jpg" alt="Los Angeles"></a>
                </div>
                <div class="carousel-item">
                    <a href=""><img src="banner2/b4.jpg" alt="Chicago"></a>
                </div>
                <div class="carousel-item">
                    <a href=""><img src="banner2/b5.jpg" alt="New York"></a>
                </div>
                <div class="carousel-item">
                    <a href=""> <img src="banner2/b6.jpg" alt="New York"></a>
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
    <div class="container-fluid">
        <br>
        <h3 class="text-center shadow ">ORDER YOUR SELECTED PRODUCTS</h3>
        <br>
        <br>
        <div class="row">

            <?php
                include 'connection.php';
                     $idss = $_GET['shilpi'];

                $getit = "SELECT * FROM producttwo WHERE id={$idss}";

                $ques = mysqli_query($conn,$getit);
                $check = mysqli_num_rows($ques);

                   if($check == true){

                       while( $getpro = mysqli_fetch_array($ques)){

                                $getid = $getpro['id'];

                      ?>

            <div class="col-lg-6 m-auto text-center">
                <form action="">
                    <div class="card m-auto">
                        <table class="table table-responsive border">
                            <tr>
                                <th>
                                    Product Picture
                                </th>
                                <th>
                                    Product Name
                                </th>
                                <th>
                                    Product Price
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <img class="card-img-top img-fluid w-50" style="height: 110px;"
                                        src="<?php echo $getpro['productimg'];?>" alt="Card image cap">
                                </td>


                                <td>
                                    <?php echo $getpro['proname']; ?>
                                </td>
                                <td>
                                    <?php echo $getpro['inrmain']; ?>
                                </td>
                            <tr>
                                <th>
                                    Total Price;
                                </th>
                                <td>
                                    <?php echo $getpro['inrmain']; ?>
                                </td>
                            </tr>
                            </tr>

                        </table>
                        <div class="btn-group">
                            <a href="finalorder2.php?shilpi=<?php echo $getpro['id'];  ?>"
                                class="w-50 btn btn-success">ORDER NOW</a>
                            <a href="userhome.php?shilpi=<?php echo $getpro['id'];?>"
                                class="w-50 btn btn-danger float-left" id="cancle">CANCLE ORDER</a>
                        </div>
                        <script>
                        $(document).ready(function() {
                            $('#cancle').click(function() {
                                alert('Order cancle successfuly');
                            });
                        });
                        </script>
                    </div>
                </form>
            </div>









            <?php
        }
    
}
?>
        </div>
    </div>

    <br><br>

    <?php include 'footer.php'; ?>

</body>

</html>