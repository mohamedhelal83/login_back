<?php
session_start();
if (isset($_SESSION['egypt']) && isset($_SESSION['cairo'])){
    if($_SESSION['egypt']=="mohamed_helal"&& $_SESSION['cairo']=="123456"){
        echo $_SESSION['egypt']."<br>".$_SESSION['cairo'];
        echo "<br>";
        echo "<a href='logout.php'>Logout</a>";
    }else{
        $_SESSION['message']="This account is not authorized to access ";
        header("Location:login.php");
    }
    
}else{
    $_SESSION['message'] = "please login first";
    header("Location:login.php");
}

?>