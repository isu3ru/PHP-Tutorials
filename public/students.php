<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Students Registration</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1>Student Registration</h1>
			</div>
			<div class="col-md-12">
				<form action="../includes/process.php" method="POST">
					<div class="row">
						<div class="form-group col-md-4">
							<label for="first_name">First Name : </label>
							<div class="controls">
								<input type="text" id="first_name" name="first_name" class="form-control">
							</div>
						</div>

						<div class="form-group col-md-4">
							<label for="last_name">last Name : </label>
							<div class="controls">
								<input type="text" id="last_name" name="last_name" class="form-control">
							</div>
						</div>

						<div class="form-group col-md-4">
							<label for="district">District : </label>
							<div class="controls">
								<select name="district" id="district" class="form-control">
									<option value="KNY">Kandy</option>
									<option value="CMB" selected>Colombo</option>
									<option value="VUN">Vavuniya</option>
									<option value="ANU">Anuradhapura</option>
									<option value="MTL">Matale</option>
									<option value="GMP">Gampaha</option>
								</select>
							</div>
						</div>

						<!-- .form-group.col-md-4*3>label+.controls>input.form-control#[name=] -->
						<!--  ABOVE LINE WIL GENERATE THE FOLLOWING CODE -->
						<!-- <div class="form-group col-md-4">
							<label for=""></label>
							<div class="controls"><input type="text" class="form-control" id="" name=""></div>
						</div>
						<div class="form-group col-md-4">
							<label for=""></label>
							<div class="controls"><input type="text" class="form-control" id="" name=""></div>
						</div>
						<div class="form-group col-md-4">
							<label for=""></label>
							<div class="controls"><input type="text" class="form-control" id="" name=""></div>
						</div> -->
						
						<div class="form-group col-md-4">
							<label for="admission_number">Admission Number : </label>
							<div class="controls">
								<input type="text" class="form-control" id="admission_number" name="admission_number">
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="age">Age : </label>
							<div class="controls">
								<input type="number" class="form-control" id="age" name="age" min="1" max="19" value="1">
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="date_of_birth">Date of Birth : </label>
							<div class="controls">
								<input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
							</div>
						</div>
						<div class="form-group col-md-12">
							<label for="address">Address : </label>
							<textarea name="address" id="address" cols="30" rows="4" class="form-control"></textarea>
						</div>
					</div>

					<div class="form-group col-md-12">
						<label for="gender_male">Gender : </label>
						<div class="controls">
							<label for="gender_male" class="radio">
								<input type="radio" name="gender" id="gender_male" value="male" checked=""> Male
							</label>
							<label for="gender_female" class="radio">
								<input type="radio" name="gender" id="gender_female" value="female"> Female
							</label>
						</div>
					</div>

					<div class="form-group col-md-12">
						<label for="accept_agreement" class="checkbox">
							<input type="checkbox" name="accept_agreement" id="accept_agreement" value="1">
							I accept the agreement and privacy policy of the institute.
						</label>
					</div>

					<div class="form-group">
						<div class="controls">
							<button type="submit" class="btn btn-primary" id="save_student" name="save_student">Save Student</button>

							<button class="btn btn-warning" id="update_student" name="update_student">Update Student</button>

						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>