<!--?php
    include("connection.php");
    
    if(isset($_POST['submit']))
    {
        //receive all input from wholesale form
        $wfname = mysqli_real_escape_string($conn, $_POST['wfname']);
        $wlname = mysqli_real_escape_string($conn, $_POST['wlname']);
        $wphone = mysqli_real_escape_string($conn, $_POST['wphone']);
        $waddress = mysqli_real_escape_string($conn, $_POST['waddress']);
        $wemail = mysqli_real_escape_string($conn, $_POST['wemail']);
        $wname = mysqli_real_escape_string($conn, $_POST['wname']);
        $wmessage = mysqli_real_escape_string($conn, $_POST['wmessage']);
    
        $sql = "INSERT INTO wholesaleorder(wfname,wlname,wphone,waddress,wemail,wname,wmessage) VALUES ('".$wfname."','".$wlname."','".$wphone."','".$waddress."','".$wemail."','".$wname."','".$wmessage."')";
    
        //$qry  = mysqli_query($conn, $sql);
      
        if(!mysqli_query($conn,$sql))
        {
            echo "<script language='javascript'>
            alert ('Sorry, your message has not been sent. Please contact our team support for further action.');
            window.location='wholesale.php';</script>";
        }
        else
        {
            echo "<script language='javascript'>
            alert ('Thank you for sending us a messager. Our team will contact you for further action.');
            window.location='wholesale.php';</script>";
        }
    }
?>-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bijak Mentari Shop - Product Wholesale</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/BM-logo.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:bijakmentari53@gmail.com">bijakmentari53@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:012-297 2452">012-297 2452</a>
                </div>
                <div>
                    <a class="text-light" href="https://www.facebook.com/bijakmentari53/" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/bijakmentari/?hl=en" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://my.linkedin.com/in/hussain-sabbir-08a8861a6" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                Bijak Mentari
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="shop.html">Our Products</a>
                        </li>-->
						<li class="nav-item">
                            <a class="nav-link" href="wholesale.php">Wholesale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Start Banner Hero -->
    
    <div class="container">
        <div class="row p-3">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                <img class="img-fluid" src="bm_logo.png" alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
                <div class="text-align-left align-self-center">
                    <!--<h1 class="h1 text-success">Welcome to <b>Bijak Mentari</b></h1>-->
                    <h3 class="h2">Shop our Wholesale Items</h3>
                    <h4><b>Buy In a Larger amount </b></h4>
                    <br>
                    <p>
                        Here in Bijak Mentari also allows customers to buy our items in wholesale prices with a larger amount of punches!
                    </p><br>
                    <p class="text-center"><a class="btn btn-success" href="https://shopee.com.my/bijakmentari?shopCollection=30161528#product_list">Shop Now</a></p>
                </div>
            </div>
        </div>
    </div>
            
    <!-- End Banner Hero -->

    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h2 class="text-center">Our Products</h2>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="Cover-img/AQ-songket-hantaran.jpeg">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="alquransongket.php"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="alquransongket.html" class="h3 text-decoration-none">Al-Quran Songket Hantaran</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p>RM39.00 - RM78.99</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="Cover-img/sejadah-mini-gebu.png">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="sejadahminigebu.php"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="sejadahminigebu.html" class="h3 text-decoration-none">Sejadah Mini Gebu</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p>RM9.99</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="Cover-img/buku-iqra-set-lengkap.jpeg">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="iqra.php"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="iqra.html" class="h3 text-decoration-none">Buku Iqra'</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p>RM4.28</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="Cover-img/rehal.png">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="#"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="#.html" class="h3 text-decoration-none">Rehal</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p>RM4.37 - RM21.50</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="Cover-img/SONGKOK-KOPIAH-KAIN SERBAN.png">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="#"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none">Kopiah Tahfiz</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p>RM9.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="Cover-img/TELEKUNG ARAFAH LACE.png">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="#"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="#" class="h3 text-decoration-none">Telekung Arafah Lace</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p>RM12.99</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="Cover-img/Kurta.png">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="#"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="#" class="h3 text-decoration-none">Kurta Bumiputra (Kids)</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p>RM41.99</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="Cover-img/kain batik Khaira.png">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="#"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="#" class="h3 text-decoration-none">Kain Batik Khaira</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p>RM11.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="Cover-img/kain-batik-Terengganu.png">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="#"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="#" class="h3 text-decoration-none">Kain Batik Terengganu</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p>RM17.95</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="Cover-img/Kain pelikat wadi maseela.jpeg">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="#"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="#" class="h3 text-decoration-none">Kain Pelikat Wadi Maseela</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p>RM16.29</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="Cover-img/Kain pelikat Atlas junior.jpeg">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="#"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="#" class="h3 text-decoration-none">Kain Pelikat Atlas Junior</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p>RM17.99</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="Cover-img/KAFTAN BATIK TERENGGANU (2).png">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="#"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="#" class="h3 text-decoration-none">Kaftan Batik Terengganu</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <p>RM24.99</p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!-- End Article -->

    <!-- Start Form -->
    <section class="bg-light py-3">
        <div class="container py-3">
            <div class="row py-3">
                <?php //PHP codes for wholesale form
                    include("connection.php");
                    
                    if(isset($_POST['submit']))
                    {
                        //receive all input from wholesale form
                        $wfname = mysqli_real_escape_string($conn, $_POST['wfname']);
                        $wlname = mysqli_real_escape_string($conn, $_POST['wlname']);
                        $wphone = mysqli_real_escape_string($conn, $_POST['wphone']);
                        $waddress = mysqli_real_escape_string($conn, $_POST['waddress']);
                        $wemail = mysqli_real_escape_string($conn, $_POST['wemail']);
                        $wname = mysqli_real_escape_string($conn, $_POST['wname']);
                        $wmessage = mysqli_real_escape_string($conn, $_POST['wmessage']);
                    
                        $sql = "INSERT INTO wholesaleorder(wfname,wlname,wphone,waddress,wemail,wname,wmessage) VALUES ('".$wfname."','".$wlname."','".$wphone."','".$waddress."','".$wemail."','".$wname."','".$wmessage."')";
                    
                        //$qry  = mysqli_query($conn, $sql);
                    
                        if(!mysqli_query($conn,$sql))
                        {
                            /*echo "<script language='javascript'>
                            alert ('Sorry, your message has not been sent. Please contact our team support for further action.');
                            window.location='wholesale.php';</script>";*/
                            ?>
                            <!--display a success message, once email sent successfully-->
                            <div class="alert alert-success text-center">
                                <?php echo "Failed to send your request. Please contact our team support."?>
                            </div>
                            <?php
                        }
                        else
                        {
                            /*echo "<script language='javascript'>
                            alert ('Thank you for sending us a messager. Our team will contact you for further action.');
                            window.location='wholesale.php';</script>";*/
                            ?>
                            <!--display a success message, once email sent successfully-->
                            <div class="alert alert-success text-center">
                                <?php echo "Your request has been sent successfully. Our team will contact you soon."?>
                            </div>
                            <?php
                        }
                    }
                ?> <!--end of PHP codes--> 
                <h2 class="text-center">Wholesale Details Form</h2>
                <p class="text-center"><i>Please take a moment to fill out the form.</i></p>
                <form class="col-md-9 m-auto" method="post" role="form" action="wholesale.php">
                    <fieldset>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control mt-1" id="fname" name="wfname" placeholder="First Name" required>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control mt-1" id="lname" name="wlname" placeholder="Last Name" required> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control mt-1" id="phone" name="wphone" placeholder="Phone Number" max="10" required>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label for="address">Address</label>
                                <textarea type="text" class="form-control mt-1" id="address" name="waddress" placeholder="Address" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label for="inputemail">Email</label>
                                <input type="email" class="form-control mt-1" id="email" name="wemail" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label for="item">Item</label>
                                <input type="text" class="form-control mt-1" id="item" name="wname" placeholder="Item Name" required>
                            </div>    
                        </div>
                        <div class="mb-3">
                            <label for="inputmessage">Message</label>
                            <textarea class="form-control mt-1" id="message" name="wmessage" placeholder="Leave us a message" rows="8" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col text-end mt-2">
                                <button type="submit" name="submit" id="submit" value="submit" class="btn btn-success btn-lg px-3">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
    <!-- End Form -->

    <!--WhatsApp widget by Elfsight Apps-->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-9fcbb94b-9faa-43ec-b6c0-cd4a597555ac"></div>
        
    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Bijak Mentari Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            B-2-163, GM Klang Wholesale City, Jalan Kasuarina 1, Bandar Botanik, 41200 Klang, Selangor
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:012-297 2452">012-297 2452</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:bijakmentari53@gmail.com">bijakmentari53@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Al-Quran</a></li>
                        <li><a class="text-decoration-none" href="#">Muslim's Wear</a></li>
                        <li><a class="text-decoration-none" href="#">Muslimah's Wear</a></li>
                        <li><a class="text-decoration-none" href="#">Kid's Wear</a></li>
                        <li><a class="text-decoration-none" href="#">Prayer Equipments</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Support</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Shipping & Return</a></li>
                        <li><a class="text-decoration-none" href="policy.html">Privacy Policy</a></li>
                        <li><a class="text-decoration-none" href="https://goo.gl/maps/db6ffFMrPqFUYAFv7">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <!--<li><a class="text-decoration-none" href="#">Contact Us</a></li>-->
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/bijakmentari53/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/bijakmentari/?hl=en"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://my.linkedin.com/in/hussain-sabbir-08a8861a6"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2022 Bijak Mentari 
                            | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>