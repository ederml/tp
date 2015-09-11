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
                    <img src="<?php echo $detail_data['image']?>"/>
                    <p><?php echo $tempid ?><?php echo $detail_data['titre'] ?></p>
                    <p><?php echo $tempid ?><?php echo $detail_data['description'] ?></p>

                    <a href="login.php?tempid=<?php echo $tempid ?>"><img class="acheter" src="img/button.jpg"><?php echo $detail_data['prix'] ?></a>

                </div>

            <?php } ?>
        </div>
    </div>
</div>


<?php
require_once('footer.php');
?>
