<?php

$this->load->view('includes/header');
?>

<?php

$this->load->view('includes/shopping_nav');
?>

<div class="container input-group" id="bill_info">


    <div class="container-fluid">

        <?php
        $grand_total = 0;
        // Calculate grand total.
        if ($cart = $this->cart->contents()):
            foreach ($cart as $item):
                $grand_total = $grand_total + $item['subtotal'];
            endforeach;
        endif;
        ?>

        <h1>Checkout</h1>



        <?php echo validation_errors(); ?>
        <h1>Order Total: $ <?php echo number_format($grand_total, 0); ?></h1>

        <h4>Billing Info</h4>

        <?php
        echo form_open('/index.php/shopping/save_order'); //controller, function
        echo '<h3> Name </h3>';
        echo form_input('name', '', 'name'); //name, value
        echo '<h3> Address </h3>';
        echo form_input('address', '', 'address');
        echo '<h3> Email </h3>';
        echo form_input('email', '', 'email'); //name, value
        echo '<h3> Phone </h3>';
        echo form_input('phone', '', 'phone'); //name, value
        echo form_submit('submit', 'Submit'); //name, value
        echo anchor ('index.php/shopping', 'Back');
        echo form_close();
        ?>


    </div>
</div>
