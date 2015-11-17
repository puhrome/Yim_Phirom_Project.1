<?php

$this->load->view('includes/header');
$this->load->view('includes/navigation');

?>
<div class="content">
    <div class="container">
        <h4>Hello <span class="uname"><?php echo $username; ?>!</span></h4>
    </div>
    <div class="container" id="gallery">
        <div class="col-md-12">
            <h3>Featured Gallery</h3>

            <div class="well">
                <div id="myCarousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-12"><a href="#x"><img src="/assets/images/cappuccino.jpg" alt="Image" class="img-responsive"></a>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <!--/item-->
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-12"><a href="#x"><img src="/assets/images/coffee_SW_NateMueller.jpg" alt="Image" class="img-responsive"></a>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <!--/item-->
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-12"><a href="#x"><img src="/assets/images/coffee_sw_SonjaLangford4.jpg" alt="Image" class="img-responsive"></a>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <!--/item-->
                    </div>
                    <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

                    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                </div>
                <!--/myCarousel-->
            </div>
            <!--/well-->
        </div>
    </div>

</div><!--<div class="content">-->