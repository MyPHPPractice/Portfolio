<?php
$name = $_POST['txtName'];
$email = $_POST['txtEmail'];
$phone = $_POST['numPhone'];
$msg = $_POST['msg'];
$msg = wordwrap($msg, 70);
$msgBody = $name." ".$phone." ".$email." ".$msg;
$from = "From: $email \r\n";

if (isset($_POST['btnSubmit'])) {
	mail("willsmith12289@gmail.com", "Contact Form", $msgBody, $from);
	$confirm = "Thanks, $name I will get back to you asap";
}


?>
<section id="contact" class="form">
	<h3>Contact Me</h3>
	<div>
		<div id="titles">
			<p>Name: </p>
			<p>Email: </p>
			<p>Phone: </p>
			<p>Comments:</p>
		</div>
		<form method="post" action="#contact">
			<p>
				<input type="text" name="txtName"></input>
			</p>
			<p>
				<input type="text" name="txtEmail"></input>
			</p>
			<p>
				<input type="number" name="numPhone"></input>
			</p>
			<p>
				<textarea name="msg">
					
				</textarea>
			</p>
			<p>
				<input type="submit" name="btnSubmit" id="btnSubmit" value="Send"></input>
			</p>
			<span>
			<?php 
				echo ($confirm);
			?>
			</span>
		</form>
	</div>
	
</section>