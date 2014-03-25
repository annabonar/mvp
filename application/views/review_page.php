<?php echo form_open('mvp/review') ?>
	Add Your Review

	<br><br>
	
	Name: 
		<input type="text" name="name" placeholder="Name" size="25">
	
	<br><br>
	
	Email: 
		<input type="text" name="email" placeholder="Email" size="25">
	
	<br><br>

	Restaurant: Under construction
	
	<br><br>

	Review:
		<textarea name="review" cols=40 rows="4" wrap="soft" placeholder="Write your review here"></textarea>
	
	<br><br>

	Rating:
		<input type="radio" name="rating" value="1"> 1 (Poor)
		<input type="radio" name="rating" value="2"> 2 ()
		<input type="radio" name="rating" value="3"> 3 ()
		<input type="radio" name="rating" value="4"> 4 ()
		<input type="radio" name="rating" value="5"> 5 (Excellent)

	<br><br>

	Would you recommend?:
		<input type="radio" name="recommend" value="yes"> Yes
		<input type="radio" name="recommend" value="no"> No

	<br><br>

	Picture: Under Construction

	<br><br>

	Capcha: Under Construction

	<br><br>

	<input type=submit value="Submit review">
</form>
