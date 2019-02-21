
<?php include('includes/constant.php');?>
<?php include('includes/connection.php');?>
<?php include('includes/functions.php'); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Xl Africa</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>


<div class="container-fluid">
 <header>
     <div class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <a class="navbar-brand" href="#">XL africa</a>
        </div>
    <div class="collapse navbar-collapse" id="mynavbar-content">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
           

           
        </ul>
    </div>
    </div>
</div>
     

 </header>
   
<div class="row">
<div class="col-xs-6 col-xs-offset-3 well">
    <form class="form" method="post" action="register.php">

    <?php register(); ?>
      <div class="form-group">
        <label for="nameField">First Name</label>
        <input type="text" class="form-control" id="nameField" name="firstname" placeholder="Your Name" required/>
      </div>
       
   
      <div class="form-group">
        <label for="nameField">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Your Name" required/>
      </div>

       <div class="form-group">
        <label for="nameField">Email</label>
        <input type="email" class="form-control" id="nameField" name="email" placeholder="Your Email" required/>
      </div>

      <div class="form-group">
        <label for="nameField">Password</label>
        <input type="password" class="form-control" id="password" name="passwordone" placeholder="password" required/>
      </div>

       <div class="form-group">
        <label for="nameField">Confirm Password</label>
        <input type="password" class="form-control" id="password" name="passwordtwo" placeholder="password" required/>
      </div>

        <button type="submit" name="register" class="btn btn-primary ">register</button>
          <button type="reset" class="btn btn-default">cancel</button>


       
    </form>
    
    
    

</div>



</div>
    


</div>

   
   
   
   
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
