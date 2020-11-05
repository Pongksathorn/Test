<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>Register</title>
</head>

<body>

	<div id="container">


		<div id="body">
			
			<br>



			<div class="container ">
				
				
				<br><br><br>

				<div class="container  " align="left">
					<div class="card shadow" style="padding:20px;">
						<p></p>
						<form class="text-center  border-dark p-5" action="<?php echo site_url('test/insertdata'); ?>" method="POST">
							<h1><b><strong> ลงทะเบียน </strong></b></h1>
							<br>
							<div class="col">
								<h3> ขบวน</h3>
								<input type="text" id="Car_id" name="Car_id" class="form-control" placeholder="">
							</div>
							<br>
							<h3>ต้นทาง</h3>
							<div class="col">
								<label>สถานี</label>
								<input type="text" id="ds" name="ds" class="form-control" placeholder="">
							</div>
							<div class="col">
								<label>เวลาออก</label>
								<input type="text" id="outds" name="outds" class="form-control" placeholder="">
							</div>
							<br>
							<h3>ห้วยราช</h3>
							<div class="col">
								<label>ถึง</label>
								<input type="text" id="tohuy" name="tohuy" class="form-control" placeholder="">
							</div>
							<div class="col">
								<label>ออก</label>
								<input type="text" id="outhuy" name="outhuy" class="form-control" placeholder="">
							</div>
							<br>
							<h3>ปลายทาง</h3>
							<div class="col">
								<label>สถานี</label>
								<input type="text" id="terminal" name="terminal" class="form-control" placeholder="">
							</div>
							<div class="col">
								<label>ถึงเวลา</label>
								<input type="text" id="toterminal" name="toterminal" class="form-control" placeholder="">
							</div>
							<div class="col">
								<br>
								<h3>หมายเหตุ</h3>
								<input type="text" id="note" name="note" class="form-control" placeholder="">
							</div>
							<br>
							<button type="submit" class="btn " style="background-color:blue">ลงทะเบียน</button>
						</form>
					</div>


				</div>
			</div>
		</div>

	</div>

	<br><br><br>
</body>

</html>