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
      @include('AppTemplate.sideBar') 
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
