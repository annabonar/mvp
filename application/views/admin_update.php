
<div id="mainarea">
	<h2> Edit typeface information</h2> 
		<?php foreach($post as $p): ?> 
		<div class="form">	
			<?php echo form_open('admin/update_post/' . $p['id']) ?>
			<p><label>Name</label><input type="text" name="title" size="30" value="<?php echo $p['title']; ?>">
			</p>
			<p><label>Size</label><input type="text" name="size" size="5" value="<?php echo $p['size']; ?>">
			</p>
			<p><label>Type</label><input type="text" name="type" value="<?php echo $p['type']; ?>">				
			</p>
			<p><label>Link</label><input  name="viewfont" size="80" value="<?php echo $p['viewfont']; ?>">
			</p>
			<button type="submit" name="submit" value="Update">Update
			</button>
		</div>
		</form>
	<?php endforeach ?>