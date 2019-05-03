<?php
require "header.php";
require "includes/dbh.inc.php";
?>
<main>
    <div class="wrapper-main">
        <?php
		
		if(isset($_POST['Go'])) {
							$_POST['Go'] =false;
							$_SESSION['currentPosition']=$_POST['current'];
							$_SESSION['currentDestination']=$_POST['destination'];
							$current =$_SESSION['currentPosition'];
							$destination=$_SESSION['currentDestination'];
							
						}
		 if (isset($_SESSION['userId'])) {
			$sql="SELECT * FROM flights WHERE currentPosition='$current' AND currentDestination='$destination'";
			$results =mysqli_query($conn,$sql);
			echo' 
			<table>
				<tr>
				<th>Fight ID</th>
				<th>Flight Location</th>
				<th>Flight Destination</th>
				<th>Date</td>
				<th>Available Seats</th>
				<th>Cost</th>
				<th>Add to Cart</th>
				</tr>';
			while($row = mysqli_fetch_array($results)) {
				echo'
				<tr>
				<td>'.$row["flightId"].'</td>
				<td>'.$row["currentPosition"].'</td>
				<td>'.$row["currentDestination"].'</td>
				<td>'.$row["date"].'</td>
				<td>'.$row["capacity"].'</td>
				<td>$'.$row["cost"].'USD</td>
				<td><form method="post" action="travelbooking.php" ><input type="text" maxlength="2" pattern="[0-9]{0,3}" title="Must contain numeric characters only"size="2"><input type="submit" name="submit" value="Add to Cart"></form>
				</tr>
				';
				
		}
			
				
			echo'
			</table>
			';
		 }
		 else {
			echo'<p class="login-status">You are logged out!</p>';
		 }
		 
		?>
    </div>
</main>
<?php
require "footer.php";
?>