<?php
if (!isset($_COOKIE['history'])) {
    $arr = array();
    setcookie('history', json_encode($arr), time() + (86400 * 3), '/');
} else {
    $urls = json_decode($_COOKIE['history'],true);
//    print_r(array_values($urls));
}
if (!isset($_COOKIE['trend'])) {
    $dc = array();
    setcookie("trend", json_encode($dc), time() + (86400 * 30), '/');
} else {
    $items = json_decode($_COOKIE['trend'],true);
//    print_r(array_values($items));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PC314 - Products</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/shop-homepage.css" rel="stylesheet">

</head>

<body>

<div><br></div>

<!-- Navigation -->
<?php
include "header.php";
?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Across Market</h1>
            <div class="list-group">
                <a href="market_most_visit.php" class="list-group-item">Market Most Visited</a>
                <a href="market_top_rated.php" class="list-group-item">Market Top Rated</a>
                <a href="user_cross_market.php" class="list-group-item">Your Browsing History</a>
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <a href="apl_mbp.php"><img class="d-block img-fluid" src="resource/mbp.jpeg"
                                                      alt="First slide"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="apl_mba.php"><img class="d-block img-fluid" src="resource/mba.jpg"
                                                      alt="Second slide"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="apl_imp.php"><img class="d-block img-fluid" src="resource/imacpro.jpeg"
                                                      alt="Third slide"></a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="alw_51m.php"><img class="card-img-top" src="resource/51m.webp" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="alw_51m.php">ALIENWARE AREA-51m</a>
                            </h4>
                            <h5>$2199.99</h5>
                            <p class="card-text">Up to 9th Generation Intel® Core™ i9-9900K (8-Core, up to 5.0Ghz
                                w/Turbo Boost)</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="alw_m15.php"><img class="card-img-top" src="resource/m15.webp" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="alw_m15.php">ALIENWARE m15 R3</a>
                            </h4>
                            <h5>$2,549.99</h5>
                            <p class="card-text">Up to 10th Gen Intel® Core™ i9-10980HK (8-Core, up to 5.3GHz w/ Turbo
                                Boost 2.0)</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="alw_m17.php"><img class="card-img-top" src="resource/m17.webp" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="alw_m17.php">ALIENWARE m17 R3</a>
                            </h4>
                            <h5>$3,549.99</h5>
                            <p class="card-text">Up to 10th Gen Intel® Core™ i9-10980HK (8-Core, up to 5.3GHz w/ Turbo
                                Boost 2.0)</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="alw_r8.php"><img class="card-img-top" src="resource/r8.webp" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="alw_r8.php">ALIENWARE AURORA R8</a>
                            </h4>
                            <h5>$849.99</h5>
                            <p class="card-text">Up to Intel® Core™ i9 9900K (8-Core/16-Thread, Overclocked up to 4.7GHz
                                across all cores)</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="alw_arr.php"><img class="card-img-top" src="resource/arr.webp" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="alw_arr.php">ALIENWARE AURORA</a>
                            </h4>
                            <h5>$819.99</h5>
                            <p class="card-text">Up to 9th Gen Intel® Core™ i9 9900K (8-Core, Overclocked up to 4.7GHz across all cores)</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="alw_ryzen.php"><img class="card-img-top" src="resource/ryzen.webp" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="alw_ryzen.php">ALIENWARE AURORA RYZEN™ R10</a>
                            </h4>
                            <h5>$1029.99</h5>
                            <p class="card-text">Up to AMD Ryzen™ 9 3950X (16-Core, 64MB L3 Cache, Max Boost Clock of 4.7GHz)</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php
include "footer.php"
?>

</body>

</html>
