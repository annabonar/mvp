<!--
restaurant_page.php will be a template for all of the restaurant pages 
(i.e., all of the restaurant pages' format will be the same, the only difference is the content).
-->

<div class="infoSection">
	<div class="infoSectionChild">
		<!--
		<?php foreach($info as $i): ?>
			<?php echo $i['name']; ?>
			<br><br>
			<?php echo $i['description']; ?>
			<br><br>
			<?php echo $i['hours']; ?>
			<br><br>
			<?php echo $i['location']; ?>
		<?php endforeach; ?>
		-->

		<?php echo $info[0]['name']; ?>
		
		<br><br>
		
		<?php echo $info[0]['description']; ?>
		
		<br><br>
		
		<?php echo $info[0]['hours']; ?>
		
		<br><br>

		<?php echo $info[0]['location']; ?>

	</div>
	<div class="infoSectionChild">
		Average rating: <?php echo $average_rating[0]['rating']; ?>
		<br>
		<?php echo $num_rec; ?>
		<br>
		still need: [view on map button].
	</div>
</div>

<div class="reviewsSection">
	<h2>Reviews</h2>
	<a href="http://phoenix.sheridanc.on.ca/~ccit1563/mvp/index.php/mvp/review/<?php echo $rest_id; ?>">
		<button type="submit" id="addReviewButton">Add A Review</button>
	</a>

	<?php foreach($reviews as $review): ?>
		<div class="reviewDiv">
			Name: <?php echo $review['name']; ?>
			<br>
			Review: <?php echo $review['review']; ?>
			<br>
			Rating: <?php echo $review['rating']; ?>
			<br>			
			Would You Recommend? <?php echo $review['recommend']; ?>
		</div>
	<?php endforeach; ?>

</div>