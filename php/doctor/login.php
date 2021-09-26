<?php
//login.php
include('class/Appointment.php');

$object = new Appointment;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Xpert Health - Login</title>
    <meta property="og:title" content="Login">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">

</head>

<body style="background-image:url('assets/img/header.jpg');">
   <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand" href="index.php#page-top">Xpert health</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php#Home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li>
                <?php
                if(!isset($_SESSION['patient_id']))
                {
                    ?>
                <li class="nav-item"><a class="nav-link active" href="login.php">login</a></li>
                <li class="nav-item"><a class="nav-link" href="register.php">register</a></li>
                    <?php
                }
                else{
                ?>
                <li class="nav-item"><a class="nav-link" href="client/dashboard.php">Dashboard</a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<header>

<div class="container-fluid">
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col col-md-4">
		    <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <?php
            if(isset($_SESSION["success_message"]))
            {
                echo $_SESSION["success_message"];
                unset($_SESSION["success_message"]);
            }
            ?>
            <span id="message"></span>
			<div class="card">
				<div class="card-header" style="padding:.5rem 9.5rem;">Login</div>
				<div class="card-body">
					<form method="post" id="patient_login_form">
						<div class="form-group">
							<label>Patient Email Address</label>
							<input type="text" name="patient_email_address" id="patient_email_address" class="form-control" required="" autofocus="" data-parsley-type="email" data-parsley-trigger="keyup" spellcheck="false" data-ms-editor="true">
						</div>
						<div class="form-group">
							<label>Patient Password</label>
							<input type="password" name="patient_password" id="patient_password" class="form-control" required="" data-parsley-trigger="keyup">
						</div>
						<div class="form-group text-center">
							<input type="hidden" name="action" value="patient_login" />
							<input type="submit" name="patient_login_button" id="patient_login_button" class="btn btn-primary" value="Login" style="user-select: auto;" />
						</div>
						<div class="form-group text-center">
							<p><a href="register.php">Register</a></p>
                            <p>Are you an Admin or Doctor?<a href="admin/index.php"><br>login</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
    </header>
   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <script type="text/javascript" src="vendor/parsley/dist/parsley.min.js"></script>
   <script type="text/javascript" src="vendor/datepicker/bootstrap-datepicker.js"></script>
   <!-- Page level plugins -->
   <script src="vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
   <script src="assets/js/script.min.js"></script>
    <script>

       $(document).ready(function(){

           $('#patient_login_form').parsley();

           $('#patient_login_form').on('submit', function(event){

               event.preventDefault();

               if($('#patient_login_form').parsley().isValid())
               {
                   $.ajax({

                       url:"action.php",
                       method:"POST",
                       data:$(this).serialize(),
                       dataType:"json",
                       beforeSend:function()
                       {
                           $('#patient_login_button').attr('disabled', 'disabled');
                       },
                       success:function(data)
                       {
                           $('#patient_login_button').attr('disabled', false);

                           if(data.error !== '')
                           {
                               $('#message').html(data.error);
                           }
                           else
                           {
                               window.location.href="client/dashboard.php";
                           }
                       }
                   });
               }

           });

       });



   </script>
</body>

</html>