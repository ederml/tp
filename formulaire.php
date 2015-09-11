<?php

require_once('header.php');


?>

<div class="form-block">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<form action="mail_send.php" method="post">
						<div class="form-group">
							<label for="email">Name: </label>
							<input required name="name" class="form-control">
						</div>
					<div class="form-group">
						<label for="email">E-mail: </label>
						<input required name="email"  class="form-control">
					</div>
					<div class="form-group">
						<label for="message" >Message:</label>
						<textarea required name="message"   class="form-control"></textarea>
					</div>

					<button type="submit" class="btn btn-default" >Submit</button>
				</form>
			</div>
			<div class="col-md-6 col-sm-6">
				<img class="contact" src="img/banner03.jpg" />
			</div>
		</div>
	</div>
</div>


<?php require_once('footer.php');?>
