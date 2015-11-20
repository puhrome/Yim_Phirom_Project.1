<?php

    $this->load->view('includes/header');
    $this->load->view('includes/main_nav');

?>
<div class="container-fluid" id="home">
    <div class="container" id="head">
        <h1>Arabica Coffee Trade Company</h1>
        <h4>estd. 2015</h4>
    </div>
</div>

<div class="paragraph container-fluid" id="about">
    <h3>About</h3>
    <h4>But first, coffee. Yes, indeed.
        <br>Coffee isn't just fuel on the go anymore.
        <br>It has become a lifestyle.
        <br>Our job is bring the finest of ingredients to your cup.
        <br>We take pride in a community this is evolving.
        <br>We are the Arabica Trade Company.
        </h4>
</div>

<div class="paragraph container-fluid" id="subscribe">
    <div class="container input-group">
        <div class="row">
        <div class="container-fluid">
            <div class="col-md-6">
            <?php echo validation_errors(); ?>

            <?php echo form_open('index.php/register');

            echo '<h1>Subscribe</h1>';?>
            </div>
            <div class="col-md-6">
                <h4>
            <?php
            echo form_submit('submit', 'Sign Me Up'); //name, value
            echo form_close();

            ?></h4>
            </div>
        </div>
        </div>
    </div>
</div>
    <div id="vid">
        <h1>Video Feature</h1>
        <iframe src="https://player.vimeo.com/video/87163631?color=fffefc" width="1000" height="562" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <h3><a href="https://vimeo.com/87163631">Coffeecompany: The Coffee Story (EN)</a> from <a href="https://vimeo.com/fromform">From Form</a> on <a href="https://vimeo.com">Vimeo</a>.</h3>
    </div>

<?php

$this->load->view('includes/footer');


?>