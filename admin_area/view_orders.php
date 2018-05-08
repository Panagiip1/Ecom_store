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
					 <i class="fas fa-tachometer-alt"></i> Ταμπλό Ελέγχου / Δείτε τις Παραγγελίες Σας
				</li>
			</ol>
			
	</div>
</div>


<div class="row">
  <div class="col-lg-12"> 
        <div class="card"  style="width: 70rem;">
        	<div class="card-header">
			    <i class="fas fa-money-bill-alt"></i> Δείτε τις Παραγγελίες Σας
			</div>
			<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped">
							<thead>
								<tr>
									<th>Αριθμός Παραγγελίας</th>
									<th>Email Πελάτη</th>
									<th>Αριθμός Τιμολογίου</th>
									<th>Τίτλος Προιόντος</th>
									<th>Ποσότητα Προιόντος</th>
									<th>Πόλη Πελάτη</th>
									<th>Αριθμός Τηλεφώνου Πελάτη</th>
									<th>Διαγραφή Πελάτη</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


<?php } ?>