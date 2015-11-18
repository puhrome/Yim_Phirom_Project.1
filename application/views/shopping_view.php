<?php

$this->load->view('includes/header');
?>
<script type="text/javascript">
    // To conform clear all data in cart.
    function clear_cart() {
        var result = confirm('Are you sure want to clear all bookings?');

        if (result) {
            window.location = "<?php echo base_url(); ?>index.php/shopping/remove/all";
        } else {
            return false; // cancel button
        }
    }
</script>

<?php
$this->load->view('includes/navigation');

?>
<div class="container-fluid" id="cart_img">
<span><i class="shopping-cart"></i></span>
</div>
<div class="container">

    <div class="row">

        <div class="col-sm-12 col-md-6">
            <h1>$18</h1>

            <div class="productbox">
                <img class="img-responsive" src="/assets/images/cupOfBeans.jpeg"/>

                <div class="caption">
                    <?php
                    echo form_button('submit', 'Profile'); //name, value
                    ?>
                    <a href="#" class="btn btn-info btn-xs" role="button">Buy</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6">
            <h1>$18</h1>

            <div class="productbox">
                <img class="img-responsive" src="/assets/images/cupOfBeans.jpeg"/>

                <div class="caption">
                    <?php
                    echo form_button('submit', 'Profile'); //name, value
                    ?>
                    <a href="#" class="btn btn-info btn-xs" role="button">Buy</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6">
            <h1>$18</h1>

            <div class="productbox">
                <img class="img-responsive" src="/assets/images/cupOfBeans.jpeg"/>

                <div class="caption">
                    <?php
                    echo form_button('submit', 'Profile'); //name, value
                    ?>
                    <a href="#" class="btn btn-info btn-xs" role="button">Buy</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <h1>$18</h1>

            <div class="productbox">
                <img class="img-responsive" src="/assets/images/cupOfBeans.jpeg"/>

                <div class="caption">
                    <?php
                    echo form_button('submit', 'Profile'); //name, value
                    ?>
                    <a href="#" class="btn btn-info btn-xs" role="button">Buy</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6">
            <h1>$18</h1>

            <div class="productbox">
                <img class="img-responsive" src="/assets/images/cupOfBeans.jpeg"/>

                <div class="caption">
                        <?php
                        echo form_button('submit', 'Profile'); //name, value
                        ?>
                    <a href="#" class="btn btn-info btn-xs" role="button">Buy</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6">
            <h1>$18</h1>

            <div class="productbox">
                <img class="img-responsive" src="/assets/images/cupOfBeans.jpeg"/>

                <div class="caption">
                    <?php
                    echo form_button('submit', 'Profile'); //name, value
                    ?>
                    <a href="#" class="btn btn-info btn-xs" role="button">Buy</a>
                </div>
            </div>
        </div>
    </div><!--/row-->
</div><!--/container -->

<!-- wrapper -->
<div class="wrapper">
    <h1>Bike Stock</h1>

    <div class="clear"></div>
    <!-- items -->
    <div class="items">
        <!-- single item -->
        <div class="item">
            <img src="http://img.tjskl.org.cn/pic/z2577d9d-200x200-1/pinarello_lungavita_2010_single_speed_bike.jpg" alt="item" />
            <h2>Item 1</h2>

            <p>Price: <em>$449</em>
            </p>
            <button class="add-to-cart" type="button">Add to cart</button>
        </div>
        <!--/ single item -->
        <!-- single item -->
        <div class="item">
            <img src="http://img.tjskl.org.cn/pic/z2577d9d-200x200-1/pinarello_lungavita_2010_single_speed_bike.jpg" alt="item" />
            <h2>Item 1</h2>

            <p>Price: <em>$449</em>
            </p>
            <button class="add-to-cart" type="button">Add to cart</button>
        </div>
        <!--/ single item -->
        <!-- single item -->
        <div class="item">
            <img src="http://img1.exportersindia.com/product_images/bc-small/dir_55/1620613/cannondale-jekyll-1-2011-mountain-bike-309779.jpg" alt="item" />
            <h2>Item 1</h2>

            <p>Price: <em>$449</em>
            </p>
            <button class="add-to-cart" type="button">Add to cart</button>
        </div>
        <!--/ single item -->
    </div>
    <!--/ items -->
</div>
<!--/ wrapper -->


