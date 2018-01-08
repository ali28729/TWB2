	<?php

	$da=$_SESSION['timer'];
	echo "$da";
	?>

	<div class="wrapper" >
    	<center>
        <div class="header header-filter" id="admin-back" >
             <div class="container">
             	<center>
                <div class="row" >
					<div class="col-md-12">
						<h1 class="title">Admin Panel</h1>
	                    
					</div>
                </div>
                </center>
            </div>
            </div>

        </div>
        </center>
		<div class="main main-raised">
				<div class="section text-center">
	                <h2 class="title">Here be stories:</h2>
						<div class="container">
						<table id="admin">
							<tr>
								<td>
									<center>
									<b>
									<?php echo"$da";?>
									</b>
									</center>
								</td>
								<td>
									<center>
									<b>
									Title
									</b>
									</center>
								</td>
								<td>
									<center>
									<b>
									Text
									</b>
									</center>
								</td>
								<td>
									<center>
									<b>
									Genre
									</b>
									</center>
								</td>
								<td>
									<center>
									<b>
									FavCount
									</b>
									</center>
								</td>
								<td>
									<center>
									<b>
									Delete
									</b>
									</center>
								</td>
							</tr>
							<?php

						// run query
						$query = mysql_query("SELECT * FROM posts");

						// set array
						$array = array();


						// look through query
						while($row = mysql_fetch_assoc($query)){


						  echo "<tr>";

						  echo "<td><center>";
						  echo $row['ID'];
						  echo "</center></td>";

						  echo "<td><center>";
						  echo $row['Title'];
						  echo "</center></td>";

						  echo "<td><center>";
						  echo $row['Text'];
						  echo "</center></td>";

						  echo "<td><center>";
						  echo $row['Genre'];
						  echo "</center></td>";

						  echo "<td><center>";
						  echo $row['FavCount'];
						  echo "</center></td>";

						  echo "<td><center>";
						  echo '<a href="delete-post.php?id=' . $row['ID'] . ' "><i class="fa fa-trash"></i></a>';
						  echo "</center></td>";
						    
						  echo "</td>";
						  	
						  echo "</tr>";


							}
							?>

						</table>

						<h2 class="title">Here be our awesome users:</h2>
						<div class="container">
						<table id="admin">
							<tr>
								<td>
									<center>
									<b>
									User ID
									</b>
									</center>
								</td>
								<td>
									<center>
									<b>
									Email
									</b>
									</center>
								</td>
								<td>
									<center>
									<b>
									Password
									</b>
									</center>
								</td>
								<td>
									<center>
									<b>
									DoB
									</b>
									</center>
								</td>
								<td>
									<center>
									<b>
									Gender
									</b>
									</center>
								</td>
								<td>
									<center>
									<b>
									Delete
									</b>
									</center>
								</td>
							</tr>
							<?php

						// run query
						$query = mysql_query("SELECT * FROM user");

						// set array
						$array = array();


						// look through query
						while($row = mysql_fetch_assoc($query)){


						  echo "<tr>";

						  echo "<td><center>";
						  echo $row['ID'];
						  echo "</center></td>";

						  echo "<td><center>";
						  echo $row['Email'];
						  echo "</center></td>";

						  echo "<td><center>";
						  echo $row['Pass'];
						  echo "</center></td>";

						  echo "<td><center>";
						  echo $row['DOB'];
						  echo "</center></td>";

						  echo "<td><center>";
						  echo $row['Gender'];
						  echo "</center></td>";

						  echo "<td><center>";
						  echo '<a href="delete-user.php?email=' . $row['Email'] . ' "><i class="fa fa-trash"></i></a>';
						  echo "</center></td>";
						    
						  echo "</td>";
						  	
						  echo "</tr>";


							}
							?>

						</table>
	        </div>

		</div>

	    

	</div>
				