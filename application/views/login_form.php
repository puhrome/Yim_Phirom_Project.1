<?php

$this->load->view('includes/header');
$this->load->view('includes/navigation');

?>

<div class="container input-group" id="login_form">
    <div class="container-fluid">

        <?php if(isset($account_created)) {; ?>
            <?php echo $account_created;?>

        <?php }else{ ?>
            <h1>Hello,</h1>
        <?php } ?>

        <h4>Login</h4>

        <?php echo validation_errors(); ?>

        <?php
        echo form_open('/index.php/login/login_validation'); //controller, function
        echo '<h3> Username </h3>';
        echo form_input('username', '', 'Enter Username'); //name, value
        echo '<h3> Password </h3>';
        echo form_password('password', '');
        echo form_submit('submit', 'Login'); //name, value
        echo anchor ('index.php/user/create', 'Create Account');
        echo form_close();
        ?>

    </div>
</div>