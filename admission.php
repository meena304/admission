<?php
include "header.php";
include "dbcon.php";
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$x = "SELECT * FROM adm_form WHERE id = $id";
	$result = mysqli_query($con,$x);
	$i = mysqli_num_rows($result);
	if($i == 1)
	{
		$_SESSION['id'] = $id;
		header('location:info.php') ;
	}

	$x = "SELECT * FROM form WHERE id = $id";
	$result = mysqli_query($con,$x);
	$a = mysqli_fetch_array($result);

}
?>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="cards c">
					<div class="card-group">
						<div class="card">

							<img src="image/adm.webp" class="img-fluid" style="height: 83vh">
						</div>

						<div class="card">
							<div class="card-body">
								<h2>Admission Form</h2>
						        <br>
						        <form class="form-group" method="post" style="overflow-y: scroll; height: 60vh">

						        	<div class="form-control">

						        		<input type="text" name="name" value="<?php echo $a['name'] ?>" required>
							        </div>

							        <div class="form-control">
								
								        <input type="text" name="email" value="<?php echo $a['email'] ?>" required>
							        </div>

							        <div class="form-control">
								
								        <input type="text" name="mob_num"  value="<?php echo $a['mob_num'] ?>" required>
							        </div>

							        <div class="form-control">
								        <input type="text" name="f_name" placeholder="Your Father Name" required>
							        </div>

							        <div class="form-control">
								        <input type="text" name="m_name" placeholder=" Your Mother Name" required>
							        </div>

							        <div class="form-control">
								        <input type="text" name="marks_10" placeholder="10th Marks" required>
							        </div>

							        <div class="form-control">
								        <input type="text" name="marks_12" placeholder="12th Marks" required>
							        </div>

							        <div>
								        <select name="college" class="form-control">
								      	    <option>Select College</option>
									        <option value="ITM">ITM</option>
									        <option value="MITS">MITS</option>
									        <option value="RJIT">RJIT</option>
								        </select>
							        </div>

							        <div>
								        <select name="gender" class="form-control">
									        <option>Select Gender</option>
									        <option value="Male">Male</option>
									        <option value="Female">Female</option>
									        <option value="Other">Other</option>
								        </select>
							        </div>
							
							        <div>
								        <h6>Address</h6>
								        <textarea  class="form-control" name="address" required>
									
								        </textarea>
							        </div>

							        <input type="submit" name="confirm" value="confirm" class="btn btn-primary m-auto w-100">
						        </form>
					        </div>
				        </div>
				    </div>
				</div>

				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
</section>

</body>
</html>

<?php
include "dbcon.php";


if(isset($_POST['confirm']))
{


    $a = $_POST['name'];
	$b = $_POST['email'];
	$c = $_POST['mob_num'];
	$d = $_POST['f_name'];
	$e = $_POST['m_name'];
	$f = $_POST['marks_10'];
	$g = $_POST['marks_12'];
	$h = $_POST['college'];
	$i = $_POST['gender'];
	$j = $_POST['address'];

	$data = "INSERT INTO adm_form(name, email, mob_num, f_name, m_name, marks_10, marks_12, college,gender,address,id)VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j', '$id')";
	$result = mysqli_query($con,$data);
	if($result)
	{
		// $_SESSION['id'];
		// header('location:info.php');
		echo 'yes';
	}
}

?>