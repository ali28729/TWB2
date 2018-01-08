	<?php

	//$id=$_SESSION['uid'];
	$query = mysql_query("SELECT * FROM userprofile where ID='3'");

	
	 

						// set array
	$array = array();

	while($row = mysql_fetch_assoc($query)){
		$fname=$row['Fname'];
		$sname=$row['Sname'];
		$location=$row['Location'];
		$bio=$row['About'];


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
	                        	<img src="../assets/img/logo.png" height="100px" alt="profile Image" class="img-circle img-raised">
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
												<div class="col-md-6">
													<div class="thumbnail">
														<a href="">
															<img src="../assets/img/my/1.jpg" alt="" class="img-rounded">
															<div class="caption">
																<p><b>This is where the caption will go</b></p>
															</div>
														</a>
													</div>

													<div class="thumbnail">
														<a href="">
															<img src="../assets/img/my/2.jpg" alt="" class="img-rounded">
															<div class="caption">
																<p><b>This is where the stuff wil go</b></p>
															</div>
														</a>
													</div>
												</div>

												<div class="col-md-6">
													<div class="thumbnail">
														<a href="">
															<img src="../assets/img/my/3.jpg" alt="" class="img-rounded">
															<div class="caption">
																<p><b>This is where the stuff wil go</b></p>
															</div>
														</a>
													</div>

													<div class="thumbnail">
														<a href="">
															<img src="../assets/img/my/4.jpg" alt="" class="img-rounded">
															<div class="caption">
																<p><b>This is where the stuff wil go</b></p>
															</div>
														</a>
													</div>
												</div>
				                            </div>
										</div>
										
										<div class="tab-pane text-center" id="favourites">
											<div class="row">
												<div class="col-md-6">
													<div class="thumbnail">
														<a href="">
															<img src="../assets/img/favourites/1.jpeg" alt="" class="img-rounded">
															<div class="caption">
																<p><b>This is where the heading of the story will go</b></p>
															</div>
														</a>
													</div>

													<div class="thumbnail">
														<a href="">
															<img src="../assets/img/favourites/2.jpg" alt="" class="img-rounded">
															<div class="caption">
																<p><b>This is where the heading of the story will go</b></p>
															</div>
														</a>
													</div>
												</div>

												<div class="col-md-6">
													<div class="thumbnail">
														<a href="">
															<img src="../assets/img/favourites/3.jpg" alt="" class="img-rounded">
															<div class="caption">
																<p><b>This is where the heading of the story will go</b></p>
															</div>
														</a>
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
		</div>
	</div>
	
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Story Heading</h4>
				</div>
				<div class="modal-body">
					<img src="link here" alt="">
					<p>The Full Length of the Story Containing all the stuff and shit and what not</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>		  
		</div>
	</div>
