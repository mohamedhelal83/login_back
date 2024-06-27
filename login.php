<?php
session_start();
$userErr="";
$passErr="";
$user="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $user = $_POST['user'];
    $password = $_POST['pass'];
    if(empty($user)){
        $userErr="Enter your E-mail";
    }else if (empty($password)){
        $passErr="Enter your password";
    }else{
      $_SESSION['egypt']=$user;
      $_SESSION['cairo']=$password;
      header("Location:profile.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <!-- font awesome  -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- fav icon link  -->
    <link rel="icon" href="img/favicon.ico">
    <!--wow.css-->
    <link rel="stylesheet" href="css/wow.css">
    <!--animate.css-->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- bootstarp css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--mdbootstarp-->
    <link rel="stylesheet" href="css/mdb.min.css">    
    <!-- style css file  -->
    <link rel="stylesheet" href="css/style.css">
    <title>HELAL</title>
</head>
<body>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <?php
            if(isset($_SESSION['message'])){
                echo "<h4 class='text-center alert alert-danger'>".$_SESSION['message']."</h4>";
                unset($_SESSION['message']);
                header("Refresh:5;url=login.php");
            }
            ?>
        <h2 class="text-center">Login Page</h2>
        <form method="post"action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Email</label>
        <input type="text" name="user"class="form-control mb-4" value="<?php echo $user;?>">
        <h4 class="text-center"><?php echo $userErr; ?></h4>
        <label>Password</label>
        <input type="password" name="pass"class="form-control mb-4">
        <h4 class="text-center"><?php echo $passErr; ?></h4>
        <input type ="submit" class="btn btn-success btn-block" value="login">
        </form>

        </div>
    </div>
</div>















       <!--mdb bootstrap.js-->
    <script src ="js/mdb.umd.min.js"></script>
    <!-- font awesome.js -->
    <script src ="js/all.min.js"></script>
    <!-- jquery.js file-->
 <script src="js/jquery.slim.min.js"></script>
 <!--popper.js file-->
 <script src="js/popper.min.js"></script>
 <!--bootstrap.js file-->
 <script src="js/bootstrap.min.js"></script>
 <!--wow.js--> 
 <script src="js/wow.min.js"></script> 
 <script>
    new WOW().init();
  </script>
  <script src="js/main.js"></script>
  </body>
</html>