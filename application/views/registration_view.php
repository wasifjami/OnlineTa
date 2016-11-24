<br>
<br>
<br>
<br>
<div class="container" >
	<div class="row" style = "width:80%; margin: 0 auto">
		<div class="col-xs-12  well well-sm">
			<legend>
				<i class="glyphicon glyphicon-globe"></i></a> Sign up!
			</legend>
			<form action="<?php echo site_url('home/save_registration')?>" method="post" class="form" role="form">
				<div class="row">
					<div class="col-xs-6 col-md-6">
						<input class="form-control" name="firstname" placeholder="First Name" type="text"
						required autofocus />
					</div>
					<div class="col-xs-6 col-md-6">
						<input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-6">
						<input class="form-control" name="email" placeholder="Email" type="text"
						required autofocus />
					</div>
					<div class="col-xs-6 col-md-6">
						<input class="form-control" name="contact" placeholder="Contact" type="text" required />
					</div>
				</div>

				<label for=""> Birth Date</label>
				<div class="row">
					<div class="col-xs-4 col-md-1">
						<input class="form-control" name="day" placeholder="DD" type="text"
						required autofocus />

					</div>
					<div class="col-xs-4 col-md-1">

						<input class="form-control" name="month" placeholder="MM" type="text"
						required autofocus />
					</div>
					<div class="col-xs-4 col-md-2">

						<input class="form-control" name="year" placeholder="YYYY" type="text"
						required autofocus />

					</div>
				</div>
				<label class="radio-inline">
					<input type="radio" name="sex" id="inlineCheckbox1" value="male" />
					Male </label>
				<label class="radio-inline">
					<input type="radio" name="sex" id="inlineCheckbox2" value="female" />
					Female </label>
				<br />
				<br />

				<div class="row">

					<div class="col-xs-6 col-md-6">
						<input class="form-control" name="designation" placeholder="Designation" type="text"
						required autofocus />
					</div>
				</div>

				<div class="row">
					
					<div class="col-xs-6 col-md-6">
						<select name="userType" class="form-control" >
							
							<option value=""> --- Register As --- </option>
							<option value="1">Instructor</option>
							<option value="2">Student</option>
							
							
						</select>
					</div>
				</div>

				
						
				<div class="row">
					
					
					<div class="col-xs-6 col-md-6">
								<input class="form-control" name="username" placeholder="Username" type="text"
												required autofocus />
					</div>
					<div class="col-xs-6 col-md-6">
						<input class="form-control" name="password" placeholder="Password" type="text"
												required autofocus 
				
					</div>
				</div>

				
										



					


				<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
					Sign up
				</button>
			</form>
		</div>
	</div>
</div>

<style>
	body {
		padding-top: 30px;
	}
	.form-control {
		margin-bottom: 10px;
	}
</style>