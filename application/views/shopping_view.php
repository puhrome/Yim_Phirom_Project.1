<?php

$this->load->view('includes/header');
$this->load->view('includes/shopping_nav');

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

<div class="container" id="wrapper">

    <div class="container-fluid" id="shopping">
        <?php  $cart_check = $this->cart->contents();
        // If cart is empty, this will show below message.
        if(empty($cart_check)) {
            echo '<h1 align="center">Click "Add to Cart" to shop</h1>';
        }
        ?>

        <div class="col-xs-12 col-md-6">
            <!-- PHP CODE for product display from database-->
            <?php
                // "$products" send from "shopping" controller,its stores all product which available in database.
                foreach ($products as $product) {
                $id = $product['serial'];
                $name = $product['name'];
                $description = $product['description'];
                $price = $product['price'];
            ?>
        </div>


        <!-- Start of Product Info-->
        <div class="item_info">
            <!-- Product Image-->
            <div id='image_div'>
                <img class="img-responsive" src="<?php echo base_url() . $product['picture'] ?>"/>
            </div>
            <!-- Product Name-->
            <div class="col-sm-7 col-md-7" id='name'>
                <h2>
                <?php
                echo $name; ?>
                </h2>
            </div>
            <!-- Product Price-->
            <div class="col-md-5 col-md-5" id='price'>
                <h1>$
                <?php
                echo $price; ?>
                </h1>
            </div>
            <!-- Product Description-->
            <div class=" col-sm-12 col-lg-12" id='desc'><h1>Flavor Profile: </h1>
                <h6>
                <?php
                echo $description; ?>
                </h6>
            </div>

            <?php
            // Create form and send values in 'shopping/add' function.
            echo form_open('index.php/shopping/add');
            echo form_hidden('id', $id);
            echo form_hidden('name', $name);
            echo form_hidden('price', $price);
            ?>

            <!--Start of DIV for add button-->
            <div class="container" id='add_button'>
                <?php

                $btn = array(

                        'value'     => 'Add to Cart',
                        'name'      => 'action'
                );

                // Submit Button.
                echo form_submit($btn);
                echo form_close();
                ?>
            </div> <!--End of add_button-->
        </div> <!--End of Item_info-->
        <div class="container" id="cart_checkout">

    <?php }

    ?>

    </div> <!--End of Shopping--->
<div class="row" id="cart_form">
    <?php
    // All values of cart store in "$cart".
    if ($cart = $this->cart->contents()): ?>
        <?php
        // Create form and send all values in "shopping/update_cart" function.
        echo form_open('index.php/shopping/update_cart');
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
            <div class="description">
             <!-- Item Quantity and Price Display-->
                <p><?php
                    echo $i++;?> of <?php
                    echo $item['name']; ?>
                </p>
                <!--Item price-->
                <p>  Item Price:
                $ <?php echo number_format($item['price'], 0); ?></p>

                <h4> <!--Cart Subtotal-->
                <?php $grand_total = $grand_total + $item['subtotal']; ?>Subtotal: $
                <?php echo number_format($item['subtotal'], 0) ?></h4>
            </div>
            <div id="num_input">
                <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty']); ?>
            </div>
<!--                            --><?php
//            // cancel items in cart
//            $path = "Cancel";
//            echo anchor('index.php/shopping/remove' . $item['rowid'], $path); ?>
<!---->
            <?php endforeach; ?>

        <div class="cart_btn">
                <!--Clear Cart-->
                <input id="clear_btn" type="submit" class ='cart_btn' value="Clear Cart" onclick="clear_cart()">

                <!-- submit button.-->
                <input id="update_btn" type="submit" class ='cart_btn' value="Update Cart">
        </div>
                <?php echo form_close(); ?>
        </div>

            <!-- Grand Total-->
            <div id="grand_total">
                <h1>Order Total: $ <?php echo number_format($grand_total, 0); ?></h1>
            </div>
            <div class="col-md-12 cart_btn">
                <!-- "Place order button" on click send "billing" controller  -->
                <input id="total_btn" type="submit" class="cart_btn" value="Place Order" onclick="window.location =
                'shopping/billing_view'">
            </div>
    <?php endif; ?>

    </div> <!--End of DIV Cart-->

    </div> <!-- End of Shopping group-->

</div> <!-- End of Wrapper-->