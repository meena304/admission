<?php
include "header.php";
include "dbcon.php";

if(isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
	$data = "SELECT * FROM adm_form WHERE id = $id ";
	$result = mysqli_query($con,$data);
	$a = mysqli_fetch_array($result);
}
?>


<div class="card c w-75 m-auto">
	<div class="card-body">
		<h4 class="text-center">You already fill the admission form.</h4>
		<hr>
		<br>
		<div class="row">
			<div class="col-md-6">
				<label><b class="mr">Name : </b><?php echo $a['name'] ?></label><br>
				<label><b class="mr">Email : </b><?php echo $a['email'] ?></label><br>
				<label><b class="mr">Mobile Number : </b><?php echo $a['mob_num'] ?></label><br>
				<label><b class="mr">Father's Name : </b><?php echo $a['f_name'] ?></label><br>
				<label><b class="mr">Mother's Name : </b><?php echo $a['m_name'] ?></label><br>
			</div>

			<div class="col-md-6">
				<label><b class="mr">Marks(10th) : </b><?php echo $a['marks_10'] ?></label><br>
			    <label><b class="mr">Marks(12th) : </b><?php echo $a['marks_12'] ?></label><br>
			    <label><b class="mr">College : </b><?php echo $a['college'] ?></label><br>
			    <label><b class="mr">Gender : </b><?php echo $a['gender'] ?></label><br>
			    <label><b class="mr">Address : </b><?php echo $a['address'] ?></label><br>
			</div>
		</div>
	</div>
</div>

</body>
</html>