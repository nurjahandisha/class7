<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTRATION FORM</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<style type="text/css">
	#ui{
		background-color:#333;
		padding: 30px;
		margin-top:60px ;
		border-radius: 10px;
	}
	#ui label {
		color: #fff;
	}
	#ui h1{
		color: #fff;


	}
</style>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div id="ui">
					<h1 class="text-center">REGISTRATION FORM</h1>
					<form action="text.php" method="post"class="form-group">

						<div class="row">
							<div class="col-lg-6">
								<label>First Name:</label>
								<input type="text" name="fname" class="form-control" placeholder="Enter Your first name..">
								 <?php
                            if (isset($_SESSION['errors']['fname'])) {
                            ?>
                                <span class="text-danger">
                                    <?php

                                    echo $_SESSION['errors']['fname'];
                                    ?>
                                </span>
                            <?php
                            }
                            ?>
							</div>
							<div class="col-lg-6">
								<label>Last Name:</label>
								<input type="text" name="lname" class="form-control" placeholder="Enter Your Last name..">
								 <?php
                            if (isset($_SESSION['errors']['fname'])) {
                            ?>
                                <span class="text-danger">
                                    <?php

                                    echo $_SESSION['errors']['lname'];
                                    ?>
                                </span>
                            <?php
                            }
                            ?>
							</div>
							
							
						</div>
						<div>
							<br>
						</div>
						<label>E-mail</label>
						<input type="email" name="email" class="form-control" placeholder="Enter Your E-mail..">
						<div class="row">
							<div>
								<br>
							</div>
							<div class="col-lg-6">
								<label>Password:</label>
								<input type="password" name="fname" class="form-control" placeholder="Enter Your first password..">
								
							</div>
							<div class="col-lg-6">
								<label>Re-type password:</label>
								<input type="password" name="lname" class="form-control" placeholder="Re-type password again..">
								
							</div>
							<div>
								<br>
							</div>

						

					<select class="form-control">
							<option>Choose Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>other</option>
						</select>
						<div>
							<br>
						</div>
						<input type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-lg ">
						
					</form>
					
				</div>
			</div>
			<div class="col-lg-3"></div>
			
		</div>
		
	</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>