<div id="carousel">
			    
			    <?php
			    $image_id_query = "select imageid from projectimages where projectid = $id and visibility=1";
			    $image_id_query_result = mysql_query($image_id_query);
			    if(!$image_id_query_result)
			    {
			         echo "Some error!Please reload the page.";
			    }
			    else{
				 $no_of_images = mysql_numrows($image_id_query_result);
				 //echo $no_of_images;
			         if($no_of_images>0){
			         $i = 1;
			              while($image_row = mysql_fetch_array($image_id_query_result)){
			              //get image details from image id
				      $image_details_query = "select ImageURL,ImageDesc from ImageDetails where IMageID=$image_row[0]";
				      $image_details_result = mysql_query($image_details_query);
				      $image_details = mysql_fetch_array($image_details_result);
				      $url = $image_details[0];
				      $images_desc = $image_details[1];
				      //echo $images_desc;
				      $item_id = "item-".$i;
				      echo "<img src='$url' id='$item_id'/>";
				      $i++; 
			              }
			         }
			         else{
			           echo "<center><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><h3>No Images Found</h3></center>";
			         }
			    }
			    ?>
			        
			</div>
			<div class="carousel-links">
			    <a href="#" id="prev"><i class="icon-chevron-sign-left"></i></a>  <a href="#" id="next"><i class="icon-chevron-sign-right"></i></a>    
			</div>
		    </p>
		</div>