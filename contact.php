<?php include 'head.php';
include 'nav.php';
include 'header.php';
?>
<section class="form">
	<aside>
		<h3>Reach me At!</h3>
		<p>
			<a href="tel:9084425795">(908)442-5795</a>
				<br/><br/>
			<a href="mailto:willsmith12289@gmail.com">willsmith12289@gmail.com</a>
			<address>
				717 West Sidney Rd.<br/>
				Pittstown NJ, 08867
			</address>
		</p>
	</aside>
	<div id="form">
		<div id="titles">
			<p>Name: </p>
			<p>Email: </p>
			<p>Phone: </p>
			<p>Comments:</p>
		</div>
		<form method="post" action="contact.php">
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
				<textarea>
					
				</textarea>
			</p>
			<p>
				<input type="submit" name="btnSubmit" id="btnSubmit" value="Send"></input>
			</p>
		</form>
	</div>
	
</section>
<?php include 'footer.php';
?>