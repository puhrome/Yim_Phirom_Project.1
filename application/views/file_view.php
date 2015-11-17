<?php

$this->load->view('includes/header');
$this->load->view('includes/navigation');

?>

<div class="container" id="image_upload">
    <?php echo form_open_multipart('/uploads');?>
    <?php echo "<input type='file' name='userfile'/>"; ?>
    <?php echo "<input type='submit' name='submit' value='upload' /> ";?>
    <?php echo form_close()?>
</div>