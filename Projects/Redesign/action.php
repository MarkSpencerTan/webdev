<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<title>Burlington National UFO Center</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="redesign.css" rel="stylesheet">

</head>
<body class ="bgimage">

<!--Nav here-->
<?php include 'header.html';?>

    <!-- Main jumbotron for logo -->
    <div class="jumbotron"></div>
	<!-- Blog Section -->
    <div class="container" id="blogbody">
    
      <div class="blog-header">
        <h1 class="blog-title">Report Submitted</h1>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div id="content">

                <!--This is where the php code was added using DW in code view. The php doesn't show up after it is processed. Check the instructions document for details about how the code should be typed. Notice I have included it in my content id so it is formatted properly. -->
                 <?php 
                    echo 'Thank you for the report, '; 
                    echo "<br />";
                    echo $_POST['fname']; 
                    echo "<br />";
                    echo 'We will contact you through your email@: ';
                    echo $_POST['email']; 
                    echo "<br />";
                    echo 'Or Phone number: ';
                    echo $_POSE['phone'];
                    echo "<br />";
                    echo 'We will dispatch a unit at location: ';
                    echo $_POST['location'] ; 
                    echo "<br />";
                    echo 'Description: ';
                    echo $_POST['description'] ;
                 ?> 
          </div>
        </div><!-- /.blog-main -->
      </div><!-- /.row -->
    </div><!-- /.container -->

<?php include 'footer.html';?>


    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    
</body>
</html>













