<?php

require_once ('data/_data.php');
require_once('header.php');


?>

<div class="content-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php foreach(get_detail() as $tempid => $detail_data) { ?>
                    <br/><br/>
                    <img src="<?php echo $detail_data['image'] ?>"/>
                    <h1><?php echo $tempid ?><?php echo $detail_data['titre'] ?></h1>
                    <p><?php echo $tempid ?><?php echo $detail_data['description'] ?></p>

                <?php } ?>
        </div>
    </div>
</div>


<?php
require_once('footer.php');
?>
