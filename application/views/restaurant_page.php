<!--
restaurant_page.php will be a template for all of the restaurant pages 
(i.e., all of the restaurant pages' format will be the same, the only difference is the content).
-->
<div class="move">

	<div class="infoSectionChild">

		<div id="pace"><?php echo $info[0]['name']; ?> ▼</div>
		
		<br>

		<img class="restPageImg" src="<?php echo $info[0]['image']; ?>">
				
		<br><br>

		<?php echo $info[0]['description']; ?>
		
		<br><br>
		
		<g>Hours:</g><br>
		<n><?php echo $info[0]['hours']; ?></n>
		
		<br><br>

		<g>Location:</g><br>
		<n><?php echo $info[0]['location']; ?></n>

		<br><br>
		
		<g>Average rating:</g><br>
		<n><?php echo round($average_rating[0]['rating'], 2); ?></n>
		
		<br> <br>

		<g>Recommendations:</g><br>
		<n><?php echo $num_rec; ?></n>

		<br>

		<a href="http://phoenix.sheridanc.on.ca/~ccit1563/mvp/index.php/mvp/review/<?php echo $rest_id; ?>">

		<button type="submit" id="addReviewButton">Add A Review</button>
		</a>

		<div class="reviewsSection">
			<g>Reviews ▼</g>

			<?php foreach($reviews as $review): ?>
				<div class="reviewDiv">
					<n><b>Name:</b></n> <?php echo $review['name']; ?>
					<br>
					<n><b>Date posted:</b></n> <?php echo $review['date']; ?>
					<br>
					<n><b>Review: </n></b><?php echo $review['review']; ?>
					<br>
					<n><b>Rating:</n></b> <?php echo $review['rating']; ?>
					<br>			
					<n><b>Would You Recommend?</n></b> <?php echo $review['recommend']; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>