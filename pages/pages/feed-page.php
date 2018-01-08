<div class="wrapper">
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main">
		<div id="cont" class="container">
			<div class="row">
		  	<?php
				$query = mysql_query("SELECT * FROM posts");
				$array = array();
				while($row = mysql_fetch_assoc($query)){
					$blobimg = base64_encode($row['Pic']);

					echo "<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3\">";
						echo "<div class=\"thumbnail\" data-toggle=\"modal\" data-target=\"#GSCCModal\"	data-todo='{\"title\":\"".$row['Title']."\",\"image\":\"$blobimg\",\"username\":\"".$row['Genre']."\",\"favcount\":\"".$row['FavCount']."\", \"story\":\"".$row['Text']."\"}'>";
							echo '<img src="data:image/jpeg;base64,'. $blobimg.'"/>';
							echo "<div class=\"caption\" class=\"storycaption\">";
								echo "<h3 id=\"thumbnail-label\">".$row['Title']."</h3>";
								$trimstory =implode(' ', array_slice(explode(' ', $row['Text']), 0, 13));
								echo "<p  name = \"story-caption\" id=\"story-caption\">$trimstory....</p>";
							echo "</div>";
							echo "<div class=\"caption card-footer\">";
								echo "<ul class=\"list-inline\">";
									echo "<li><i class=\"fa fa-user\"></i></li>";
									echo "<li>".$row['FavCount']."</li>";
									echo "<li ><button class=\"like\" type=\"button\" class=\"btn btn-white \"><i class=\"fa fa-heart-o fa-1x\"></i></button></li>";
									echo "<li class=\"suser\" style=\"text-decoration: underline;\">".$row['Genre']."</li>";
								echo "</ul>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				}
			?>  
			</div>
		</div> 
	</div>
</div>


<div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel"></h3>
      </div> 
      <img id="mimg" >
      <div class="modal-body">
        <p name = "mcaption" id="mcaption"></p>
      </div>
      <div class="modal-footer">
      	<ul class="list-inline">
      		<li id="muser"></li>
			<li><i class="fa fa-user"></i></li>
			<li id="mfav"></li>
			<li ><button type="button" class="btn btn-white "><i class="fa fa-heart-o fa-1x"></i></button></li>
	    </ul>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>