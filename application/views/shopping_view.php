<?php

$this->load->view('includes/header');

?>


<?php
$this->load->view('includes/shopping_nav');

?>
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


    <?php  $cart_check = $this->cart->contents();

    // If cart is empty, this will show below message.
    if(empty($cart_check)) {
        echo '<h1 align="center">Click "Add to Cart" to shop</h1>';
    }  ?>

    <?php
    // All values of cart store in "$cart".
    if ($cart = $this->cart->contents()): ?>
        <tr id= "main_heading">
            <td>Serial</td>
            <td>Name</td>
            <td>Price</td>
            <td>Qty</td>
            <td>Amount</td>
            <td>Cancel Product</td>
        </tr>
        <?php
        // Create form and send all values in "shopping/update_cart" function.
        echo form_open('/shopping/update_cart');
        $grand_total = 0;
        $i = 1;

        foreach ($cart as $item):
            //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
            //  Will produce the following output.
            // <input type="hidden" name="cart[1][id]" value="1" />

            echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
            echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
            echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
            echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
            echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
            ?>
            <?php echo $i++; ?>
            <?php echo $item['name']; ?>

            $ <?php echo number_format($item['price'], 2); ?>
            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
            <?php $grand_total = $grand_total + $item['subtotal']; ?>
            $ <?php echo number_format($item['subtotal'], 2) ?>


            <?php
            // cancle image.
            $path = "<h1 class=' fa fa-crosshairs'>Cancel</h1>";
            echo anchor('/shopping/remove' . $item['rowid'], $path); ?>
            <?php endforeach; ?>

            <!-- Grand Total-->
            <h1>Order Total: $ <?php echo number_format($grand_total, 2); ?></h1>

            <?php echo form_submit('submit', 'Submit')//submit button. ?>
            <?php echo anchor('shopping/billing_view', 'Checkout'); ?>

            <?php echo form_close(); ?>

            <!-- "Place order button" on click send "billing" controller  -->

    <?php endif; ?>

<div id="products_e" align="center">

    <h3 id="head" align="center">Products</h3>
    <?php

    // "$products" send from "shopping" controller,its stores all product which available in database.
    foreach ($products as $product) {
        $id = $product['serial'];
        $name = $product['name'];
        $description = $product['description'];
        $price = $product['price'];
        ?>

        <div id='product_div'>
            <div id='image_div'>
                <img src="<?php echo base_url() . $product['picture'] ?>"/>
            </div>
            <div id='info_product'>
                <div id='name'><?php echo $name; ?></div>
                <div id='desc'>  <?php echo $description; ?></div>
                <div id='rs'><b>Price</b>:<big style="color:green">
                        $<?php echo $price; ?></big></div>
                <?php

                // Create form and send values in 'shopping/add' function.
                echo form_open('index.php/shopping/add');
                echo form_hidden('id', $id);
                echo form_hidden('name', $name);
                echo form_hidden('price', $price);

                ?> </div>
            <div id='add_button'>
                <?php
                $btn = array(
                    'class' => 'fg-button teal',
                    'value' => 'Add to Cart',
                    'name' => 'action'
                );

                // Submit Button.
                echo form_submit($btn);
                echo form_close();
                ?>
            </div>
        </div>

    <?php } ?>


<?php
$this->load->view('includes/footer');

?>
