<!DOCTYPE html>
<html>
<head>

	<title>Sign up Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/login.css">

</head>
<body>

    <div class="bg-image"></div>
	<section>

		<div class="container">
			<div class="d-flex justify-content-center h-100">
				<div class="card">

					<div class="card-header">
						<h3>Sign up</h3>
					</div>

					<div class="card-body">

						<form method="post" >

							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" class="form-control" name="user" placeholder="username">
							</div>

							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><img src="./assets/img/mail.svg"/></span>
								</div>
								<input type="email" class="form-control" name="mail" placeholder="E-mail">
							</div>

              <div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><img src="./assets/img/calendar.svg"/></span>
								</div>
								<input type="date" class="form-control" name="birth" placeholder="Birth-Date">
							</div>

							<div class="form-group">
								<input type="submit" name = "register" value="Sign Up" class="btn float-right login_btn">
							</div>

						</form>

						<?php
							include("register.php");
						?>

					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>
