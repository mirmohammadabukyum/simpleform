<?php include "header.php"?>
<section class="form-registration">
	<div class="container">
		<div class="row justify-content-center mt-3">
			<div class="col-sm-10 text-center">
				<h1 class="mb-2">Register Here</h1>
				<form action="" method="POST" class="mb-5">
					<div class="row">
					<div class="form-group col-sm-6">
						<input type="text" class="form-control" placeholder="First Name">
					</div>
					<div class="form-group col-sm-6">
						<input type="text" class="form-control" placeholder="Last Name">
					</div>
					<div class="form-group col-sm-12">
						<input type="email" class="form-control" placeholder="Email">
					</div>
					<div class="form-group col-sm-12">
						<input type="text" class="form-control" placeholder="Username">
					</div>
					<div class="form-group col-sm-6">
						<input type="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group col-sm-6">
						<input type="password" class="form-control" placeholder="Retype Password">
					</div>
					<div class="form-group col-sm-12 text-left">
						<strong>Select Language:&nbsp;&nbsp;&nbsp;&nbsp;</strong>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="ben" value="Bengali">
							<label class="form-check-label" for="ben">Bengali</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="eng" value="English">
							<label class="form-check-label" for="eng">English</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="chi" value="Chinese">
							<label class="form-check-label" for="chi">Chinese</label>
						</div>
					</div>
					<div class="form-group col-sm-12 text-left">
						<strong>Select Gender:&nbsp;&nbsp;&nbsp;&nbsp;</strong>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="ben" name="gender">
							<label class="form-check-label" for="Male" >Male</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="eng" name="gender">
							<label class="form-check-label" for="Female" name="gender">Female</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="chi" name="gender">
							<label class="form-check-label" for="Others" name="gender">Others</label>
						</div>
						</div>
						<div class="form-group col-sm-12 text-left">
							<label for="dob">Date of Birth:</label>
							<input type="date" class="form-control">
						</div>
						<div class="form-group col-sm-12 text-left">
							<label for="dob">Profile Picture:</label>
							<input type="file" class="form-control-file">
						</div>
					
						<div class="form-group text-left col-sm-3 btn-group mb-5">
							<input type="submit" class="btn btn-primary btn-lg rounded-pill px-4" value="Submit">
							<input type="reset" class="btn btn-danger btn-lg rounded-pill  ml-2 px-4" value="Reset">
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include "footer.php"?>