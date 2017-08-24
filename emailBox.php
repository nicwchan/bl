<div id="emailBox">
	<p>Email Us</p>
	<form action="index1.php" method="post" role="form">
		<input 
			type="text" class="form-group form-control" name="name" id="name" 
			placeholder="Your Name"
			pattern="[A-z\s]{1,30}">
		<input
			type="text" class="form-group form-control" name="email" id="email"
			placeholder="Your email address"
			pattern="[0-9A-z\@\.\_\-]{6,}\.[A-z]{2,}">
		<input
			type="text" class="form-group form-control" name="phone" id="phone"
			placeholder="Your contact number"
			pattern="[0-9]{10}">
		<textarea
			id="message" class="form-group form-control" Name="message" ROWS="4" COLS="20" placeholder="Message..." 
			maxlength="500"></textarea>
		<div class="checkbox">
			<input type="checkbox" value="newsletter" name="receiveNewsletter" checked>
			<span>I would like to receive Brightland's free newsletters through email</span>
		</div>
		<hr>
		<a>Privacy Policy</a>
		<input type="submit" name="submit" class="btn" value="Send">
	</form>
</div>
