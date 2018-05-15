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
					 <i class="fas fa-tachometer-alt"></i> Ταμπλό Ελέγχου / Εισάγεται Νέο Χρήστη
				</li>
			</ol>	
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
			<div class="card"  style="width: 90rem;">
        		<div class="card-header">
			    	<i class="fas fa-money-bill-alt"></i> Εισάγεται Νέο Χρήστη
				</div>
				<div class="card-body text-right">
	    		<form class="form-horizontal" method="post" enctype="multipart/form-data">
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label"> Username: </label>
	    				<div class="col-md-8">
	    					<input type="text" name="admin_name" class="form-control" required>
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label"> Email του Χρήστη: </label>
	    				<div class="col-md-8">
	    					<input type="text" name="admin_email" class="form-control" required>
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label"> Password του Χρήστη: </label>
	    				<div class="col-md-8">
	    					<input type="password" name="admin_pass" class="form-control" required>
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label"> Χώρα του Χρήστη: </label>
	    				<div class="col-md-8">
	    					<input type="text" name="admin_country" class="form-control" required>
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label"> Δουλειά του Χρήστη: </label>
	    				<div class="col-md-8">
	    					<input type="text" name="admin_job" class="form-control" required>
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label"> Επικοινωνία με τον Χρήστη: </label>
	    				<div class="col-md-8">
	    					<input type="text" name="admin_job" class="form-control" required>
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label"> Σχετικά με τον Χρήστη: </label>
	    				<div class="col-md-8">
	    					<textarea name="admin_about" class="form-control" rows="3"> </textarea>
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-2 control-label">Εικόνα του Χρήστη: </label>
	    				<div class="col-md-8">
	    					<input type="file" name="admin_image" class="form-control" required>
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-3 control-label"></label>
	    				<div class="col-md-7">
	    					<input type="submit" name="submit" value="Εισαγωγή Χρήστη" class="btn btn-primary form-control" required>
	    				</div>
	    			</div>
	    		</form>
	    	</div>


	    	<?php

	    	if(isset($_POST['submit'])){

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

	    		$insert_admin = "insert into admins (admin_name,admin_email,admin_pass,admin_image,admin_contact,admin_country,admin_job,admin_about) values ('$admin_name','$admin_email','$admin_pass','$admin_image','$admin_contact','$admin_country','$admin_job','$admin_about')";

	    		$run_admin = mysqli_query($con,$insert_admin);

	    		if($run_admin){

	    			echo "<script>alert('Ένας Χρήστης μόλις Προστέθηκε Επιτυχημένα')</script>";
	    			echo "<script>window.open('index.php?view_users','_self')</script>";
	    		}



	    	}

	    	?>



<?php  }  ?>