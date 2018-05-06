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
					 <i class="fas fa-tachometer-alt"></i> Ταμπλό Ελέγχου / Εισαγωγή Κατηγορία 
				</li>
			</ol>
	</div>
</div>


<div class="row">
	<div class="col-lg-12">
		<div class="card ">
  			<div class="card-header">
	    		<h4 class="card-title">
	    			<i class="far fa-money-bill-alt"></i> Εισαγωγή Κατηγορίας
	    		</h4>
	    	</div>
	    	<div class="card-body text-right">
	    		<form class="form-horizontal" method="post" enctype="multipart/form-data">
	    			<div class="form-group row">
	    				<label class="col-md-5 control-label"> Τίτλος Κατηγορίας</label>
	    				<div class="col-md-7">
	    					<input type="text" name="cat_title" class="form-control" required>
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-5 control-label"> Περιγραφή Κατηγορίας</label>
	    				<div class="col-md-7">
	    					<textarea type="text" name="cat_desc" class="form-control" rows="3" cols="10"></textarea>
	    				</div>
	    			</div>
	    			<div class="form-group row">
	    				<label class="col-md-5 control-label"></label>
	    				<div class="col-md-7">
	    					<input type="submit" name="submit" value="Εισαγωγή Κατηγορίας" class="btn btn-primary form-control">
	    				</div>
	    			</div>
	    		</form>
	    	</div>
	    </div>
	</div>
</div>

<?php

if(isset($_POST['submit'])){

	$cat_title = $_POST['cat_title'];
	$cat_desc = $_POST['cat_desc'];

	$insert_cat = "insert into categories (cat_title,cat_desc) values ('$cat_title','$cat_desc')";

	$run_cat = mysqli_query($con,$insert_cat);

	if($run_cat){

		echo "<script> alert('Νέα Κατηγορία έχει Εισαχθεί')</script>";
		echo "<script> window.open('index.php?view_cats','_self')</script>";

	}

}


?>


<?php } ?>