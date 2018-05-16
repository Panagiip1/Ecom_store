<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}
else {


?>


<br><br>

<div class="row">
	<div class="col-lg-12">
			<ol class="breadcrumb">
				<li class="active">
					 <i class="fas fa-tachometer-alt"></i> Ταμπλό Ελέγχου / Δείτε τους Users
				</li>
			</ol>
			
	</div>
</div>

<div class="row">
  <div class="col-lg-12"> 
        <div class="card"  style="width: 70rem;">
        	<div class="card-header">
			    <i class="fas fa-money-bill-alt"></i> Δείτε τα Προιόντα σας
			</div>
			<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped">
							<thead>
								<tr>
									<th>Username</th>
									<th>Email του Χρήστη</th>
									<th>Εικόνα του Χρήστη</th>
									<th>Χώρα του Χρήστη</th>
									<th>Δουλεία του Χρήστη</th>
									<th>Διαγραφή Χρήστη</th>
								</tr>
							</thead>
							<tbody>

								<?php

								$get_admin = "select * from admins";

								$run_admin = mysqli_query($con,$get_admin);

								while($row_admin = mysqli_fetch_array($run_admin)){

									$admin_id = $row_admin['admin_id'];
									$admin_name = $row_admin['admin_name'];
									$admin_email = $row_admin['admin_email'];
									$admin_image = $row_admin['admin_image'];
									$admin_country = $row_admin['admin_country'];
									$admin_job = $row_admin['admin_job'];
								?>

								<tr>

									<td><?php echo $admin_name; ?></td>	
									<td><?php echo $admin_email; ?></td>	
									<td><img src="admin_images/<?php echo $admin_image;?>" width="60" height="60"></td>	
									<td><?php echo $admin_country; ?></td>
									<td><?php echo $admin_job; ?></td>	
									<td>
										<a href="index.php?user_delete=<?php echo $admin_id; ?>">
										<i class="fas fa-trash-alt"></i> Διαγραφή Χρήστη
										</a>
									</td>
								</tr>

								<?php  }  ?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>



<?php } ?>