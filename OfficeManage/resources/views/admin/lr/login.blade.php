<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Admin Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body style="background-color: rgb(158, 193, 223)">

	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center mt-5">
						<h1><span style="color: rgb(0, 0, 113);">Work</span>Pro Admin</h1>
					</div>
                 <div style="margin-top: 10%; ">
					<div class="card shadow-lg">
						<div class="card-body p-5">
                                
							    
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST" action="{{route('admin.lr.loginact')}}" class="needs-validation" novalidate="" autocomplete="off">
								@csrf
                                   
								@php
								$message = Session::get('message');

								if($message){
                 echo "$message";
				 Session::put('message',null);
								}
                       
								@endphp
<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Email </label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Enter Email">
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<label class="text-muted" for="role" class="mb-3">Select Role</label>
									<select id="role" name="role" class="form-control" required>
										<option value="" disabled selected>Select your role</option>
										<option value="ceo">CEO</option>
										<option value="admin">Admin</option>
										
									</select>
									<div class="invalid-feedback">
										Please select a role
									</div>
								</div>
								
								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								

								<div class="d-flex align-items-center">
									<button type="submit" class="btn btn-primary">
										Login
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0"></div>
					</div>
                 </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>
</body>
</html>
