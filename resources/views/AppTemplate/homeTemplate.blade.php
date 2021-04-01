<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <style>
      .main{
        margin-top: 10px;
        width: 100%;
      }
      .bs-example{
        margin: 20px;        
      }
      #linkGroup{
        margin-top : 10px;
        margin-left: 1px;
      }
      #justifyText{
        text-align: justify;
        text-justify: inter-word;
      }
      #input_select{
        width: 72%;
        margin-left: 1.5%;
      }
      [data-role="dynamic-fields"] > .form-group + .form-group {
        margin-top: 0.5em;
      }
      [data-role="dynamic-fields"] > .form-group [data-role="add"] 
      {
        display: none;
      }
      [data-role="dynamic-fields"] > .form-group:last-child [data-role="add"] 
      {
        display: inline-block;
      }
      [data-role="dynamic-fields"] > .form-group:last-child [data-role="remove"] 
      {
        display: none;
      }
    </style>
  </head>
  <body>
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
	      <div class="custom-menu">
		      <button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	            <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>

	      <div class="p-4">
		      <h1><a href="index.html" class="logo">Portfolic <span>Portfolio Agency</span></a></h1>
	          <ul class="list-unstyled components mb-5">

	            <li class="active">
	                <a href="#"><span class="fa fa-home mr-3"></span>Home</a>
	            </li>
	                    
                <li>
	                <a href="/addJournal/create"><span class="fa fa-user mr-3"></span>Add Journal</a>
	            </li>
	                    
                <li>
                    <a href="#"><span class="fa fa-briefcase mr-3"></span> Works</a>
	            </li>
	                    
                <li>
                    <a href="#"><span class="fa fa-sticky-note mr-3"></span> Blog</a>
	            </li>
	                    
                <li>
                    <a href="#"><span class="fa fa-suitcase mr-3"></span> Gallery</a>
	            </li>
	                    
                <li>
                    <a href="#"><span class="fa fa-cogs mr-3"></span> Services</a>
	            </li>
	                    
                <li>
                    <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
	            </li>
	          </ul>

	        <div class="mb-5">
				    <h3 class="h6 mb-3">Subscribe for newsletter</h3>
				    <form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon">
                  <span class="icon-paper-plane"></span>
                </div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
          </div>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					    Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> 
              All rights reserved | This template is made with 
              <i class="icon-heart" aria-hidden="true"></i> by 
              <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
	        </div>
        </div>
      </nav>
      <div id="content" class="p-4 p-md-5 pt-5" style="margin-left: 5%">
        <section>
          @yield('content')
        </section>
      </div>
    </div>
    {{-- Scripts --}}
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
    {{-- Scripts --}}
  </body>
</html>
