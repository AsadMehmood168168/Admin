<!DOCTYPE html>
<html lang="en">
    <head>
	    <title>Admin Register</title>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
	    <link rel="icon" type="image/png" href="Images/icons/favicon.ico"/>
        <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
	    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
	    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="css/util.css">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
        <script>
            function MyFunction() {
                var signUp = document.getElementById("SignUpForm");
                var login = document.getElementById("loginForm");
                if (signUp.style.display === "none") {
                    signUp.style.display = "block";
                    login.style.display  = "none";
                } 
                else if (login.style.display === "none") {
                    login.style.display = "block";
                    signUp.style.display = "none";
                }
            }
            function passwordValidate(){
                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("ret-password").value;
                if (password != confirmPassword) {
                    alert("Passwords do not match.");
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>
        <div class="limiter">
		    <div class="container-login100">
			    <div class="wrap-login100">

				    <div class="login100-form-title" style="background-image: url(Images/background.jpg);">
					    <span class="login100-form-title-1">
							<p class="login100-form-title-1">
                                Maxwell Science Publication Corp.
                            </p>
						    Admin Registration
					    </span>
				    </div>
                    {!! Form::open(['class' => 'login100-form validate-form','action' => 'AdminController@store','method' => 'POST']) !!}
                        {{-- <form class="login100-form validate-form"> --}}
					    <div class="wrap-input100 validate-input m-b-26" data-validate="Name is required">
						    <span class="label-input100">Name</span>
						    <input class="input100" type="text" required = "required" name="name" placeholder="Name">
						    <span class="focus-input100"></span>
					    </div>

                        <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						    <span class="label-input100">Email</span>
						    <input class="input100" type="email" required = "required" name="email" placeholder="asad@gmail.com">
						    <span class="focus-input100"></span>
					    </div>

					    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						    <span class="label-input100">Password</span>
						    <input class="input100" id = "password" type="password" name="password" placeholder="Enter password">
						    <span class="focus-input100"></span>
					    </div>

                        <div class="wrap-input100 validate-input m-b-18" data-validate = "Re Password is required">
						    <span class="label-input100">ReType Password</span>
						    <input class="input100" id = "ret-password" type="password" name="retypepassword" placeholder="ReType Password">
						    <span class="focus-input100"></span>
					    </div>

					    <div class="container-login100-form-btn">
						    <button type="submit" class="login100-form-btn">Register Account</button>
					    </div>
				        {{-- </form> --}}
                    {!! Form::close() !!}
			    </div>
		    </div>
	    </div>
        <!--===============================================================================================-->
	    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
	    <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
	    <script src="vendor/bootstrap/js/popper.js"></script>
	    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
	    <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
	    <script src="vendor/daterangepicker/moment.min.js"></script>
	    <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
	    <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
	    <script src="js/main_1.js"></script>
    </body>
</html>