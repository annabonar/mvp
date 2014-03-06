<div id="mainarea">
	<h2>Create a new typeface listing</h2> 		
		<?php echo form_open('admin/create') ?>
		<div class="form">
			<p><label>Name:</label><input type="text" size="30" name="title">
			</p>
			<p><label>Size:</label><input type="text" size="5" name="size">
			</p>
			<p><label>Type:</label><input type="text" name="type">
			</p>
			<p><label>Link:</label><input type="text" size="80" name="viewfont">
			</p>
			<button type="submit" name="submit" value="Create">Create
			</button>
		</div>
		</form>
