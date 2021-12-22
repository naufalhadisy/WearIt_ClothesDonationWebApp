<?php
session_start(); //gets session id from cookies, or prepa
if (!isset($_SESSION['donor_email']) && !isset($_SESSION['receiver_email'])) {

    error_reporting(0);
    include("../config.php");

if ($identifier == 0) {
?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WearIt</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/master.css" rel="stylesheet">
  <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
  <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

            <section class="header">
                <div class="headline">
                    <a>
                        WearIt
                    </a>
                </div>
            </section>

            <section class="s1">
                <div class="main-container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            
                            <a class="navbar-brand" href="index.php">
                                WearIt
                                <img src="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="../php/index.php">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/donation.php">DONATION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/forum.php">FORUM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/feedback.php">FEEDBACK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="login" href="../php/signin.php"><b>SIGN IN</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="login" href="../php/signup.php"><b>SIGN UP</b></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                  <?php } else {
?>                     
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WearIt</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/master.css" rel="stylesheet">
  <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
  <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

            <section class="header">
                <div class="headline">
                    <a>
                        WearIt
                    </a>
                </div>
            </section>

            <section class="s1">
                <div class="main-container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            
                            <a class="navbar-brand" href="index.php">
                                WearIt
                                <img src="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ml-auto">
                                <?php if($identifier == 1) { ?>
                                  
                                  <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="../php/index.php">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="../php/donation.php">DONATION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/forum.php">FORUM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/feedback.php">FEEDBACK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="login" href="../php/signin.php"><b>SIGN IN</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="login" href="../php/signup.php"><b>SIGN UP</b></a>
                                    </li>
                                </ul>
                            
                            <?php } if($identifier == 2){ ?>
                              <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="../php/index.php">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/donation.php">DONATION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="../php/forum.php">FORUM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/feedback.php">FEEDBACK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="login" href="../php/signin.php"><b>SIGN IN</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="login" href="../php/signup.php"><b>SIGN UP</b></a>
                                    </li>
                                </ul>

                            <?php } if($identifier == 3){ ?>    
                              <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="../php/index.php">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/donation.php">DONATION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/forum.php">FORUM</a>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="../php/feedback.php">FEEDBACK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="login" href="../php/signin.php"><b>SIGN IN</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="login" href="../php/signup.php"><b>SIGN UP</b></a>
                                    </li>
                                </ul>
                                
                                <?php }?>

                            </div>
                        </div>
                    </nav>  

<?php
}} elseif(isset($_SESSION['donor_email'])) {       //logged in as DONOR

    include("../config.php");
    $account = $_SESSION["donor_email"];
    $account_result = mysqli_query($con, "select Name from donor where Email = '$account'");

    if($identifier == 0) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WearIt</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/master.css" rel="stylesheet">
  <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
  <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

            <section class="header">
                <div class="headline">
                    <a>
                        WearIt
                    </a>
                </div>
            </section>

            <section class="s1">
                <div class="main-container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            
                            <a class="navbar-brand" href="index.php">
                                WearIt
                                <img src="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="../php/index.php">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/donation.php">DONATION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/forum.php">FORUM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/feedback.php">FEEDBACK</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i> 
                                    <span> 
                                        <?php 
                                            while ($info = $account_result->fetch_assoc()) {
                                                $myvalue = $info['Name'];
                                                $arr = (explode(' ',trim($myvalue)));
                                                echo strtoupper( $arr[0]);
                                            }
                                        ?>
                                    </span> 
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul class="nav">
                                            <li><a href="../donor/donor_profile.php" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="../donor/donor_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                        </ul>
                                    </div>
                                </li>        
                            </ul>
                        </div>
                    </div>
                </nav>
                
                  <?php } else {
?>                     
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WearIt</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/master.css" rel="stylesheet">
  <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
  <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

            <section class="header">
                <div class="headline">
                    <a>
                        WearIt
                    </a>
                </div>
            </section>

            <section class="s1">
                <div class="main-container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            
                            <a class="navbar-brand" href="index.php">
                                WearIt
                                <img src="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ml-auto">
                                <?php if($identifier == 1) { ?>
                                  
                                  <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="../php/index.php">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="../php/donation.php">DONATION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/forum.php">FORUM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/feedback.php">FEEDBACK</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i> 
                                    <span> 
                                        <?php 
                                            while ($info = $account_result->fetch_assoc()) {
                                                $myvalue = $info['Name'];
                                                $arr = (explode(' ',trim($myvalue)));
                                                echo strtoupper( $arr[0]);
                                            }
                                        ?>
                                    </span> 
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul class="nav">
                                            <li><a href="../donor/donor_profile.php" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="../donor/donor_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                        </ul>
                                    </div>
                                </li>        
                            </ul>
                            
                            <?php } if($identifier == 2){ ?>
                              <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="../php/index.php">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/donation.php">DONATION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="../php/forum.php">FORUM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/feedback.php">FEEDBACK</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i> 
                                    <span> 
                                        <?php 
                                            while ($info = $account_result->fetch_assoc()) {
                                                $myvalue = $info['Name'];
                                                $arr = (explode(' ',trim($myvalue)));
                                                echo strtoupper( $arr[0]);
                                            }
                                        ?>
                                    </span> 
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul class="nav">
                                            <li><a href="../donor/donor_profile.php" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="../donor/donor_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                        </ul>
                                    </div>
                                </li>        
                            </ul>

                            <?php } if($identifier == 3){ ?>    
                              <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="../php/index.php">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/donation.php">DONATION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/forum.php">FORUM</a>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="../php/feedback.php">FEEDBACK</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i> 
                                    <span> 
                                        <?php 
                                            while ($info = $account_result->fetch_assoc()) {
                                                $myvalue = $info['Name'];
                                                $arr = (explode(' ',trim($myvalue)));
                                                echo strtoupper( $arr[0]);
                                            }
                                        ?>
                                    </span> 
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul class="nav">
                                            <li><a href="../donor/donor_profile.php" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="../donor/donor_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                        </ul>
                                    </div>
                                </li>        
                            </ul>
                                
                                <?php }?>

                            </div>
                        </div>
                    </nav>                             
<?php 
}}else{       //logged in receiver
    
    include("../config.php");
    $account = $_SESSION["receiver_email"];
    $account_result = mysqli_query($con, "select Name from receiver where Email = '$account'");

    if($identifier == 0) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WearIt</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/master.css" rel="stylesheet">
  <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
  <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

            <section class="header">
                <div class="headline">
                    <a>
                        WearIt
                    </a>
                </div>
            </section>

            <section class="s1">
                <div class="main-container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            
                            <a class="navbar-brand" href="index.php">
                                WearIt
                                <img src="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="../php/index.php">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/donation.php">DONATION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/forum.php">FORUM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/feedback.php">FEEDBACK</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i> 
                                    <span> 
                                        <?php 
                                            while ($info = $account_result->fetch_assoc()) {
                                                $myvalue = $info['Name'];
                                                $arr = (explode(' ',trim($myvalue)));
                                                echo strtoupper( $arr[0]);
                                            }
                                        ?>
                                    </span> 
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul class="nav">
                                            <li><a href="../receiver/receiver_profile.php" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="../receiver/receiver_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                        </ul>
                                    </div>
                                </li>        
                            </ul>
                        </div>
                    </div>
                </nav>
                
                  <?php } else {
?>                     
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WearIt</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/master.css" rel="stylesheet">
  <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
  <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

            <section class="header">
                <div class="headline">
                    <a>
                        WearIt
                    </a>
                </div>
            </section>

            <section class="s1">
                <div class="main-container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            
                            <a class="navbar-brand" href="index.php">
                                WearIt
                                <img src="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ml-auto">
                                <?php if($identifier == 1) { ?>
                                  
                                  <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="../php/index.php">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="../php/donation.php">DONATION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/forum.php">FORUM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/feedback.php">FEEDBACK</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i> 
                                    <span> 
                                        <?php 
                                            while ($info = $account_result->fetch_assoc()) {
                                                $myvalue = $info['Name'];
                                                $arr = (explode(' ',trim($myvalue)));
                                                echo strtoupper( $arr[0]);
                                            }
                                        ?>
                                    </span> 
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul class="nav">
                                            <li><a href="../receiver/receiver_profile.php" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="../receiver/receiver_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                        </ul>
                                    </div>
                                </li>        
                            </ul>
                            
                            <?php } if($identifier == 2){ ?>
                              <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="../php/index.php">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/donation.php">DONATION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="../php/forum.php">FORUM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/feedback.php">FEEDBACK</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i> 
                                    <span> 
                                        <?php 
                                            while ($info = $account_result->fetch_assoc()) {
                                                $myvalue = $info['Name'];
                                                $arr = (explode(' ',trim($myvalue)));
                                                echo strtoupper( $arr[0]);
                                            }
                                        ?>
                                    </span> 
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul class="nav">
                                            <li><a href="../receiver/receiver_profile.php" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="../receiver/receiver_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                        </ul>
                                    </div>
                                </li>        
                            </ul>

                            <?php } if($identifier == 3){ ?>    
                              <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="../php/index.php">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/donation.php">DONATION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/forum.php">FORUM</a>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="../php/feedback.php">FEEDBACK</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i> 
                                    <span> 
                                        <?php 
                                            while ($info = $account_result->fetch_assoc()) {
                                                $myvalue = $info['Name'];
                                                $arr = (explode(' ',trim($myvalue)));
                                                echo strtoupper( $arr[0]);
                                            }
                                        ?>
                                    </span> 
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul class="nav">
                                            <li><a href="../receiver/receiver_profile.php" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="../receiver/receiver_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                        </ul>
                                    </div>
                                </li>        
                            </ul>
                                
                                <?php }?>

                            </div>
                        </div>
                    </nav>                             
<?php 
}} ?>