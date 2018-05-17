<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}
else {


?>

<?php

if(isset($_GET['user_profile'])){

$edit_id = $_GET['user_profile'];
$get_admin = "select * from admins where admin_id='$edit_id'";
$run_admin = mysqli_query($con,$get_admin);
$row_admin = mysqli_fetch_array($run_admin);

$admin_id = $row_admin['admin_id'];
$admin_name = $row_admin['admin_name'];
$admin_email = $row_admin['admin_email'];
$admin_pass = $row_admin['admin_pass'];
$admin_image = $row_admin['admin_image'];
$admin_country = $row_admin['admin_country'];
$admin_job = $row_admin['admin_job'];
$admin_contact = $row_admin['admin_contact'];
$admin_about = $row_admin['admin_about'];
}

?>

<br><br>

<div class="row">
	<div class="col-lg-12">
			<ol class="breadcrumb">
				<li class="active">
					 <i class="fas fa-tachometer-alt"></i> Ταμπλό Ελέγχου / Τροποποίηση Προφίλ
				</li>
			</ol>	
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
			<div class="card"  style="width: 90rem;">
        		<div class="card-header">
			    	<i class="fas fa-money-bill-alt"></i> Τροποποίηση Προφίλ
				</div>
				<div class="card-body text-right">
	    		<form class="form-horizontal" method="post" enctype="multipart/form-data">
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label"> Username: </label>
	    				<div class="col-md-8">
	    					<input type="text" name="admin_name" class="form-control" required value="<?php echo $admin_name; ?>">
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label"> Email του Χρήστη: </label>
	    				<div class="col-md-8">
	    					<input type="text" name="admin_email" class="form-control" required value="<?php echo $admin_email; ?>">
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label"> Password του Χρήστη: </label>
	    				<div class="col-md-8">
	    					<input type="password" name="admin_pass" class="form-control" required value="<?php echo $admin_pass; ?>">
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label"> Χώρα του Χρήστη: </label>
	    				<div class="col-md-8">
	    					<input type="text" name="admin_country" class="form-control" required value="<?php echo $admin_country; ?>">
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label"> Δουλειά του Χρήστη: </label>
	    				<div class="col-md-8">
	    					<input type="text" name="admin_job" class="form-control" required value="<?php echo $admin_job; ?>">
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label"> Επικοινωνία με τον Χρήστη: </label>
	    				<div class="col-md-8">
	    					<input type="text" name="admin_job" class="form-control" required value="<?php echo $admin_contact; ?>">
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label"> Σχετικά με τον Χρήστη: </label>
	    				<div class="col-md-8">
	    					<textarea name="admin_about" class="form-control" rows="3" value="<?php echo $admin_about; ?>" > </textarea>
	    					
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label">Εικόνα του Χρήστη: </label>
	    				<div class="col-md-8">
	    					<input type="file" name="admin_image" class="form-control" required>
	    					<br>
	    					<img src="admin_images/<?php echo $admin_image;  ?>" width="70" height="70" style="float:left">
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-3 control-label"></label>
	    				<div class="col-md-7">
	    					<input type="submit" name="update" value="Ανανέωση Χρήστη" class="btn btn-primary form-control" required>
	    				</div>
	    			</div>
	    		</form>
	    	</div>


	    	<?php

	    	if(isset($_POST['update'])){

	    		$admin_name = $_POST['admin_name'];
	    		$admin_email = $_POST['admin_email'];
	    		$admin_pass = $_POST['admin_pass'];
	    		$admin_country = $_POST['admin_country'];
	    		$admin_job = $_POST['admin_job'];
	    		$admin_contact = $_POST['admin_contact'];
	    		$admin_about = $_POST['admin_about'];

	    		$admin_image = $_FILES['admin_image']['name'];
	    		$temp_admin_image = $_FILES['admin_image']['tmp_name'];

	    		move_uploaded_file($temp_admin_image,"admin_images/$admin_image");

	    		$update_admin = "update admins set admin_name='$admin_name',admin_email='$admin_email',admin_pass='$admin_pass',admin_image='$admin_image',admin_contact='$admin_contact',admin_job='$admin_job',admin_about='$admin_about' where admin_id='$admin_id'";

	    		$run_admin = mysqli_query($con,$update_admin);

	    		if($run_admin){

	    			echo "<script>alert('Ο Χρήστης έχει Ανανεωθεί, ξανακάντε login')</script>";
	    			echo "<script>window.open('login.php','_self')</script>";

	    			session_destroy();
	    		}

	    	}

	    	?>



<?php  }  ?>