<!--
restaurant_page.php will be a template for all of the restaurant pages 
(i.e., all of the restaurant pages' format will be the same, the only difference is the content).
-->

<div class="infoSection">
	<div class="infoSectionChild">
		<?php foreach($info as $i): ?>
			<?php echo $i['name']; ?>
			<br><br>
			<?php echo $i['description']; ?>
			<br><br>
			<?php echo $i['hours']; ?>
			<br><br>
			<?php echo $i['location']; ?>
		<?php endforeach; ?>
	</div>
	<div class="infoSectionChild">
		This is where the average rating, number of people who recommend this restaurant. and the view on map button will go.
	</div>
</div>


<div class="reviewsSection">
	*reviews will go here, UNDER THE INFO SECTION*
</div>