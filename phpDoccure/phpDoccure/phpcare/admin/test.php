

<?php

include("files.php");
include("connection.php");

?>

	<!--popup modal starts here-->
	
	<?php
	
		
		if(isset($_GET['id']))
		{
			
			$id2 = $_GET['id'];
			$sql = "select appointments.id as id,patients.name as patient_id,doctors.name as doctor_id,doctors.image as 				doctor_img,appointments.date as date,appointments.time as time,appointments.day as day from appointments 			inner join patients on appointments.patient_id = patients.id
					INNER JOIN doctors on appointments.doctor_id = doctors.id
					where appointments.id = '$id2'";
			
			$result = $conn->query($sql);
			if($result -> num_rows > 0)
			{
				while($row = $result -> fetch_assoc())
				{
					$a_id = $row['id'];
					$p_name = $row['patient_id'];
					$d_name = $row['doctor_id'];
					$a_time = $row['time'];
					$a_date = $row['date'];
					$a_day = $row['day'];
					
		}
		}
			 else
			{
				// Handle the case when no rows are found, e.g., show an error message or redirect the user.
				// For example:
				echo "No appointment found with the provided ID.";
			}
		
		}
	
		?>

  


	
<form class="container w-50 border mt-5 p-5" method="post" action="update.php">
	<h2 class="text-center mb-5">Update Appointment Details:</h2>
							<input type="hidden" value="<?php echo $id2 ?>" name="a_id">
						  <div class="form-group">
							<label for="exampleInputEmail1" class="pe-2">Doctor Name:</label>
							<?php echo $d_name ?>
						  </div>
						  <div class="form-group">
							<label for="exampleInputEmail1" class="pe-2">Patient Name:</label>
							<?php echo $p_name ?>
						  </div>
						  <div class="form-group">
							<label for="exampleInputEmail1">Appointment Time:</label>
							<input type="time" class="form-control" name="a_time" value="<?php echo $a_time ?>">
						  </div>
						<div class="form-group">
							<label for="exampleInputEmail1">Appointment Date:</label>
							<input type="date" class="form-control" name="a_date" value="<?php echo $a_date ?>">
						  </div>
							<div class="form-group">
							<label for="exampleInputEmail1" class="me-2 ">Appointment Day:</label>
							<select class="w-25" name="a_day">
								<option selected><?php echo $a_day ?></option>
								<option>Monday</option>	
								<option>Tuesday</option>	
								<option>Wednesday</option>	
								<option>Thursday</option>	
								<option>Friday</option>	
								<option>Satday</option>	
								<option>Sunday</option>	
							</select>
						  </div>
							
						  <button type="button" class="btn btn-danger float-end ms-2"><a href="appointments.php" class="text-white">Cancel</a></button>
							<button type="submit" class="btn btn-secondary float-end">Update</button>
						</form>

	

