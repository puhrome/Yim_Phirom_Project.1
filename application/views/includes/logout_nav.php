<?php

$this->load->view('includes/header');
$this->load->view('includes/logout_nav');

?>

<!-- Navigation for Logout Page-->

<div class="container-fluid">
    <nav class="navbar navbar-collapse" id="myNav">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#" id="logo"><img src="/assets/images/aco_logo_03.png" class="img-responsive" width="50px" height="50px"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/index.php/main">Home</a></li>
                    <li><a href="/index.php/main/login">Sign In</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>  <!--End of Navigation for logout page-->

<body>  <!-- Start of HTML body-->