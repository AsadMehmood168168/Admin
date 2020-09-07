@extends('AppTemplate.homeTemplate')
<title>Maxwell Sci Admin Login</title>
<style>
  #heading {
    width: 100%;
    background-color: #516f99;
    color: #FFFFFF;
  }
  h2{
    color: #FFFFFF;
  }
  #form-input{
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    border: 1px solid #2d9fd9;
    padding: 2%;
    width: 300px;
  }
  #password{
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    border: 1px solid #2d9fd9;
    padding: 2%;
    width: 300px;
  }
  #ret-password{
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    border: 1px solid #2d9fd9;
    padding: 2%;
    width: 300px;
  }
  .form-card{
    border: 1px solid #2d9fd9;
    width: 400px;
    padding: 2%;
    position: relative;
    background-color:#516f99;
    border-radius: 20px;
  }
  #link{
    border-radius: 5px;
    width: auto;
  }
</style>
<script>
  function MyFunction() 
  {
    var signUp = document.getElementById("SignUpForm");
    var login = document.getElementById("loginForm");
    if (signUp.style.display === "none") {
      signUp.style.display = "block";
      login.style.display  = "none";
    } else if (login.style.display === "none") {
      login.style.display = "block";
      signUp.style.display = "none";
    }
  }
  function passwordValidate(){
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("ret-password").value;
    if (password != confirmPassword) 
    {
      alert("Passwords do not match.");
      return false;
    }
    return true;
  }
  function alphaOnly(event) {
    var key = event.keyCode;
    return ((key >= 65 && key <= 90) || key == 8);
  };
</script>
@section('content')
<div class="jumbotron text-center" id="heading">
  <h1>Maxwell Science Publication's</h1>
  <h3>Admin Panel</h3>
</div>
<div class="container" id = "SignUpForm" style="display: none">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        
      </div>
      <div class="col-sm-9">
        <div class="form-card">
          <h2 style="text-align: center">
            Registration Form
          </h2>
          <br>
          {!! Form::open(['action' => 'AdminController@store','method' => 'POST']) !!}
          <div class="form-group">
            <input type="text"required = "required" name="firstName" id = "form-input" 
            class="form-control" onkeydown="return alphaOnly(event);" placeholder="First Name">
          </div>
          <div class="form-group">
            <input type="text" required = "required" name="lastName" 
            id = "form-input" onkeydown="return alphaOnly(event);" class="form-control" placeholder="Last Name">
          </div>
          <div class="form-group">
            <input type="email" required = "required" name="email" id = "form-input" 
            class="form-control" placeholder="mike@gmail.com">
          </div>
          <div class="form-group">
            <input type="text" required = "required" name="phonoNumber" id = "form-input"  
            class="form-control" data-inputmask="'mask': '0399-9999999'" placeholder="03XX-XXXXXXX">
          </div>
          <script>
            $(":input").inputmask();
          </script>
          <div class="form-group">
            <input type="password" required = "required" name="password" 
            id = "password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
            <input type="password" required = "required" name="retypepassword" 
            id = "ret-password" class="form-control" placeholder="ReType Password">
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-dark" onclick="return passwordValidate()">Sign-Up</button>
          {!! Form::close() !!}
          <a href="" class="text-white bg-dark" id = "link"
          onclick="MyFunction();return false;" style="text-align: center">Already Have an Account (Login)</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container" id = "loginForm">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        
      </div>
      <div class="col-sm-9">
        <div class = "form-card">
          <h2 style="text-align: center">
            Admin Login
          </h2>
          <br>
          {!! Form::open(['action' => 'AdminController@login','method' => 'POST']) !!}
          <div class="form-group">
            <input type="email" required = "required" name="email" 
            id = "form-input" class="form-control" placeholder="mike@gmail.com">
          </div>
          <div class="form-group">
            <input type="password" required = "required" 
            name="password" id = "form-input" class="form-control" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-dark">Login</button>
          {!! Form::close() !!}
          <a href="" class="text-white bg-dark" id = "link"
            onclick="MyFunction();return false;" style="text-align: center">Create an Account
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection