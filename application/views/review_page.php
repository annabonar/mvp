<div id="pick">Got A Review?
		<br> Add your <m>Review</m><br>▼
</div>

	<br><br><br><br><br><br><br><br>

<div id="reviews">

	<?php echo form_open('mvp/submit_review/' . $rest_id) ?>

		<input type="hidden" name="rest_id" value="<?php echo $rest_id; ?>">

		Name: 
			<input type="text" name="name" placeholder="Name" size="50">
		
		<br><br>
		
		Email: 
			<input type="text" name="email" placeholder="Email" size="50">
		
		<br><br>

		Restaurant:
			<?php echo $info[0]['name']; ?>

		<br><br>

		Review:
			<textarea name="review" cols=40 rows="4" wrap="soft" placeholder="Write your review here"></textarea>
		
		<br><br>

		Rating:
			<input type="radio" name="rating" value="1"> 1 (Poor)
			<input type="radio" name="rating" value="2"> 2 (Fair)
			<input type="radio" name="rating" value="3"> 3 (Average)
			<input type="radio" name="rating" value="4"> 4 (Good)
			<input type="radio" name="rating" value="5"> 5 (Excellent)

		<br><br>

		Would you recommend?:
			<input type="radio" name="recommend" value="Yes"> Yes
			<input type="radio" name="recommend" value="No"> No

		<br><br>

		<input type="submit" class="submitButton" value="Submit Review">
	</form>
</div>