<div id="carousel">
			    
			    <?php
			    $image_query = "select projectimage,imagedesc from projectimages where projectid = 1";
			    //echo $image_query;
			    $image_query_result = mysql_query($image_query);
			    $noofrows=mysql_numrows($image_query_result);
			    if($noofrows>0)
			    {
			    $i = 1;
			    while($image_row = mysql_fetch_array($image_query_result))
			    {
				$url = $image_row[0];
				$item_id = "item-".$i;
				echo "<img src='$url' id='$item_id'/>";
				$i++; 
			    }
			    }
			    else
			    {
			      echo "<center><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><h3>No Images Found</h3></center>";
			    }
			    ?>
			        
			</div>
			<div class="carousel-links">
			    <a href="#" id="prev">Prev</a> | <a href="#" id="next">Next</a>    
			</div>
		    </p>
		</div>