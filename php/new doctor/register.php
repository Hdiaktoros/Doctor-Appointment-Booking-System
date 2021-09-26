<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Xpert Health - Register</title>
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
    <div class="container"><a class="navbar-brand" href="#page-top">Xpert health</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#Specialties">Specialties</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#Doctors">Doctors</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#Hospital">Hospital</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li>
                <?php
                if(!isset($_SESSION['patient_id']))
                {
                    ?>
                    <li class="nav-item"><a class="nav-link" href="login.php">login</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                    <?php
                }
                else
                {
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-md-6">
                <span id="message"></span>
                <div class="card">
                    <div class="card-header" style="padding:.5rem 9.5rem;">Register</div>
                    <div class="card-body">
                        <form method="post" id="patient_register_form">
                            <div class="form-group">
                                <label>Patient Email Address<span class="text-danger">*</span></label>
                                <input type="text" name="patient_email_address" id="patient_email_address" class="form-control" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" />
                            </div>
                            <div class="form-group">
                                <label>Patient Password<span class="text-danger">*</span></label>
                                <input type="password" name="patient_password" id="patient_password" class="form-control" required  data-parsley-trigger="keyup" />
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient First Name<span class="text-danger">*</span></label>
                                        <input type="text" name="patient_first_name" id="patient_first_name" class="form-control" required  data-parsley-trigger="keyup" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient Last Name<span class="text-danger">*</span></label>
                                        <input type="text" name="patient_last_name" id="patient_last_name" class="form-control" required  data-parsley-trigger="keyup" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient Date of Birth<span class="text-danger">*</span></label>
                                        <input type="text" name="patient_date_of_birth" id="patient_date_of_birth" class="form-control" required  data-parsley-trigger="keyup" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient Gender<span class="text-danger">*</span></label>
                                        <select name="patient_gender" id="patient_gender" class="form-control">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient Contact No.<span class="text-danger">*</span></label>
                                        <input type="text" name="patient_phone_no" id="patient_phone_no" class="form-control" required  data-parsley-trigger="keyup" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient Maritial Status<span class="text-danger">*</span></label>
                                        <select name="patient_maritial_status" id="patient_maritial_status" class="form-control">
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Seperated">Seperated</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Patient Complete Address<span class="text-danger">*</span></label>
                                <textarea name="patient_address" id="patient_address" class="form-control" required data-parsley-trigger="keyup"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <input type="hidden" name="action" value="patient_register" />
                                <input type="submit" name="patient_register_button" id="patient_register_button" class="btn btn-primary" value="Register" />
                            </div>

                            <div class="form-group text-center">
                                <p><a href="login.php">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <br />
                <br />
            </div>
        </div>
    </div>
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
            $('#patient_date_of_birth').datepicker({
                format: "yyyy-mm-dd",
                autoclose: true
            });
            $('#patient_register_form').parsley();
            $('#patient_register_form').on('submit', function(event){
                event.preventDefault();
                if($('#patient_register_form').parsley().isValid())
                {
                    $.ajax({
                        url:"action.php",
                        method:"POST",
                        data:$(this).serialize(),
                        dataType:'json',
                        beforeSend:function(){
                            $('#patient_register_button').attr('disabled', 'disabled');
                        },
                        success:function(data)
                        {
                            $('#patient_register_button').attr('disabled', false);
                            $('#patient_register_form')[0].reset();
                            if(data.error !== '')
                            {
                                $('#message').html(data.error);
                            }
                            if(data.success != '')
                            {
                                $('#message').html(data.success);
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>