	<?php

	//$id=$_SESSION['uid'];
	$query = mysql_query("SELECT * FROM userprofile where ID='3'");

	$array = array();

	while($row = mysql_fetch_assoc($query)){
		$fname=$row['Fname'];
		$sname=$row['Sname'];
		$location=$row['Location'];
		$bio=$row['About'];
		$profileimg = base64_encode($row['Ppic']);

	}
						// look through query
	
	?>

	<div class="wrapper">
		<div class="header header-filter" style="background-image: url('../assets/img/bg.jpg');">
		</div>
		<div class="main main-raised">
			<div class="profile-content">
	            <div class="container">
	                <div class="row">
	                    <div class="profile">
	                    	<center>
	                        <div class="avatar">
	                        	<?php
	                        	echo '<img src="data:image/jpeg;base64,'. $profileimg.'" height="100px" alt="profile Image" class="img-circle img-raised/>';
	                        	?>
	                        <div class="name">
	                            <h3 class="title"><?php echo"$fname $sname"; ?></h3>
								<h6><?php echo"$location"; ?></h6>
	                        </div>
	                        </center>
	                    </div>
					</div>
					
	                <div class="description text-center">
                        <p><?php echo"$bio"; ?></p>
					</div>
					
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="profile-tabs">
			                    <div class="nav-align-center">
									<ul class="nav nav-pills" role="tablist">
										<li class="active">
											<a href="#mystories" role="tab" data-toggle="tab">
												<i class="material-icons">account_circle</i>
												My Stories
											</a>
										</li>
				                        <li>
				                            <a href="#favourites" role="tab" data-toggle="tab">
												<i class="material-icons">favorite</i>
				                                Favorites
				                            </a>
				                        </li>
				                    </ul>

				                    <div class="tab-content gallery">
										<div class="tab-pane active" id="mystories">
				                            <div class="row">					
				                            	<?php
												$query = mysql_query("SELECT * FROM posts where UID='3' ");
												$array = array();
												while($row = mysql_fetch_assoc($query)){
													$blobimg = base64_encode($row['Pic']);
													echo "<div class='col-md-12'>";
													echo "<div class='thumbnail'>";
														echo "<a href=''>";
															echo '<img src="data:image/jpeg;base64,'. $blobimg.'" class="img-rounded"
															 />';
																echo "<div class='caption'>";
																		echo "<p><b>".$row["Title"]."</b></p>";							
																echo "</div>";	
															echo "<div class=\"caption card-footer\">";
																echo "<ul class=\"list-inline\">";
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
										
										<div class="tab-pane active" id="favourites">
				                            <div class="row">					
				                            	<?php
												$query = mysql_query("SELECT * FROM posts where ID= 
													(SELECT PID FROM favorites where UID='1') ");
												$array = array();
												while($row = mysql_fetch_assoc($query)){
													$blobimg = base64_encode($row['Pic']);
													echo "<div class='col-md-12'>";
													echo "<div class='thumbnail'>";
														echo "<a href=''>";
															echo '<img src="data:image/jpeg;base64,'. $blobimg.'" class="img-rounded"
															 />';
																echo "<div class='caption'>";
																		echo "<p><b>".$row["Title"]."</b></p>";							
																echo "</div>";	
															echo "<div class=\"caption card-footer\">";
																echo "<ul class=\"list-inline\">";
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
							</div>
						</div>
	                </div>

	            </div>
	        </div>
		</div>
	</div>
	
