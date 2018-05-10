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
					 <i class="fas fa-tachometer-alt"></i> Ταμπλό Ελέγχου / Δείτε τις Πληρωμές Σας
				</li>
			</ol>
			
	</div>
</div>


<div class="row">
	<div class="col-lg-12">
			<div class="card"  style="width: 90rem;">
        		<div class="card-header">
			    	<i class="fas fa-money-bill-alt"></i> Δείτε τις Πληρωμές σας
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped">
							<thead>
								<tr>
									<th>Αριθμός Πληρωμής</th>
									<th>Αριθμός Τιμολογίου</th>
									<th>Πληρωμένο Ποσό</th>
									<th>Αριθμός Αναφοράς</th>
									<th>Ημερομηνία Πληρωμής</th>
									<th>Διαγραφή Πληρωμής</th>
								</tr>
							</thead>
							<tbody>
				</div>
			</div>
	</div>
</div>

<?php } ?>