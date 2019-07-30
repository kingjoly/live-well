<?php include ("header.php"); ?>

<div class="container main-container">

    <div class="row" my-4>
        <div class="col-lg-8">
            
            <marquee behavior="scroll" direction="left"><h3>Welcome to Althealth</h3></marquee>

            <!-- carousal -->

            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/slide1.jpg" class="d-block w-100" alt="AltHealth Slider">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Uncompromised</h5>
                                <p>Get the needed boost.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slide2.jpg" class="d-block w-100" alt="AltHealth Slider">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Pure Strength</h5>
                                <p>Build stable muscles.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slide4.jpg" class="d-block w-100" alt="AltHealth Slider">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Uncompromised</h5>
                                <p>Ever lastingness.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!--Recent Products -->

            <div class="row">
                <h2 class="mt-2 text-danger">Recent Product</h2>
            </div>
            <div class="row my-4">

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Supplement 1</h5>
                            <img src="images/supp1.jpg" alt="" class="img-fluid"/>
                            <h3>R100.00</h3>
                            <button class="btn btn-success btn-sm">Add to Cart</button>
                            <button class="btn btn-danger btn-sm">View</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Supplement 2</h5>
                            <img src="images/supp2.jpg" alt="" class="img-fluid"/>
                            <h3>R170.00</h3>

                            <button class="btn btn-success btn-sm">Add to Cart</button>
                            <button class="btn btn-danger btn-sm">View</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Supplement 2</h5>
                            <img src="images/supp3.jpg" alt="" class="img-fluid"/>
                            <h3>R207.00</h3>
                            <button class="btn btn-success btn-sm">Add to Cart</button>
                            <button class="btn btn-danger btn-sm">View</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner -->
            <div class="row my-2">
                <img src="images/banner.jpg" alt=""/>
            </div>

            <!-- On Sale Products -->

        </div>

        <?php include ("sidebar.php"); ?>

    </div>



</div>

<?php include ("footer.php"); ?>