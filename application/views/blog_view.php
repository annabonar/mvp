<div id="mainarea">
    <h2>List of typefaces</h2>
        <?php foreach($posts as $post): ?> 
        <div class="box">             
    	   <h3><?php echo $post['title']; ?></h3>              
    	   <p>Size: <?php echo $post['size']; ?>px || 
    	   	Type: <?php echo $post['type']; ?> || 
    		  <a href="<?php echo $post['viewfont']; ?>" target="_blank">View Font</a>
        	</p>
            
       
            <p class="right">
                
                <a href="/~ccit1559/codeigniter/index.php/admin/update/<?php echo $post['id']; ?>">
                    <span class='fakebutton'>Edit</span>
                </a>
                
            
                <a href="/~ccit1559/codeigniter/index.php/admin/delete/<?php echo $post['id']; ?>">
                    <span class='fakebutton'>Delete</span>
                </a>
        
            </p>

   	    </div>

     <?php endforeach ?>