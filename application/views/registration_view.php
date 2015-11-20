<?php

$this->load->view('includes/header');
$this->load->view('includes/navigation');

?>

<div class="container input-group" id="login_form">
    <div class="container-fluid">

        <h1>Hello,</h1>

        <h4>Sign Up</h4>

                <?php echo validation_errors(); ?>

                <?php echo form_open('/index.php/user/registration');

                echo '<p> Username </p>';
                echo form_input('username', ''); //name, value
                echo '<p> Email </p>';
                echo form_input('email', '');
                echo '<p> Password </p>';
                echo form_password('password', '');
                echo form_submit('submit', 'Create'); //name, value
                echo form_close();

                ?>

        </div>

    </div>
</div>
