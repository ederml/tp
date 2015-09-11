<?php

    require_once ('data/_data.php');
    require_once('header.php');


?>

<div class="service-block">
    <div class="container">
        <div class="row">
            <?php foreach(get_catalogue() as $tempid => $catalogue_data) { ?>
                <div class='col-md-4 col-sm-4'><br/><br/>
                <img src="<?php echo $catalogue_data['image']?>"/>
                <p><?php echo $tempid ?><?php echo $catalogue_data['titre'] ?></p>
                <a href="login.php?tempid=<?php echo $tempid ?>"><img class="acheter" src="img/button.jpg"><?php echo $catalogue_data['prix'] ?></a>

                </div>

            <?php } ?>
        </div>
    </div>
</div>


<?php
require_once('footer.php');
?>
