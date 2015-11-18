<?php

$this->load->view('includes/header');
?>
<?php
$grand_total = 0;
// Calculate grand total.
if ($cart = $this->cart->contents()):
    foreach ($cart as $item):
        $grand_total = $grand_total + $item['subtotal'];
    endforeach;
endif;
?>

<?php

$this->load->view('includes/member_nav');
?>

<div class="container input-group" id="bill_info">
    <div class="container-fluid">
        <h1>Checkout</h1>

        <h4>Billing Info</h4>


        <?php echo validation_errors(); ?>

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
        echo anchor ('/index.php/shopping', 'Back');
        echo form_close();
        ?>
    </div>
</div>