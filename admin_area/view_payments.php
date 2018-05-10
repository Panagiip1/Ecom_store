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
									<th>Κωδικός Πληρωμής</th>
									<th>Ημερομηνία Πληρωμής</th>
									<th>Διαγραφή Πληρωμής</th>
								</tr>
							</thead>
							<tbody>

								<?php

								$i = 0;

								$get_payments = "select * from payments";

								$run_payments = mysqli_query($con,$get_payments);

								while($row_payments = mysqli_fetch_array($run_payments)){

									$payment_id = $row_payments['payment_id'];
									$invoice_no = $row_payments['invoice_no'];
									$amount = $row_payments['amount'];
									$ref_no = $row_payments['ref_no'];
									$code = $row_payments['code'];
									$payment_date = $row_payments['payment_date'];

									
									$i++;

								?>

									<tr>
										<td> <?php echo $i; ?></td>
										<td bgcolor="yellow"> <?php echo $invoice_no;  ?></td>
										<td> <?php echo $amount; ?>€</td>
										<td><?php echo $ref_no; ?></td>
								
										
										<td><?php echo $code; ?></td>
										<td><?php echo $payment_date; ?></td>

										<td>
											<a href="index.php?payment_delete=<?php echo $payment_id; ?>">
												<i class="fas fa-trash-alt"></i> Διαγραφή
										</td>
									</tr>

								<?php  } ?>

							</tbody>
				</div>
			</div>
	</div>
</div>

<?php } ?>