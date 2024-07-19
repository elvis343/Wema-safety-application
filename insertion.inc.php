<?php 

session_start();

//Register User
if (isset($_POST['regu'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $type = $_POST['type'];
 $mod = $_POST['mod'];
 $uid = $_SESSION['username']; 
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {
    if($mod == 1){
  $sql = "INSERT INTO `users`(`Fullname`, `Phone_Number`, `Email_Address`,`User_Type`, `Password`) VALUES ('$fname','$phone','$email','User',md5('$password'))";
     mysqli_query($conn, $sql);
  header("Location: index.html?userregistration=success");
 } if ($password == $passwordconfirm) {
    if($mod == 2){
  $sql = "INSERT INTO `users`(`Fullname`, `Phone_Number`, `Email_Address`,`User_Type`, `Password`, `Contact_ID`) VALUES ('$fname','$phone','$email','Contact',md5('$password'),'$uid')";
     mysqli_query($conn, $sql);
  header("Location: index1.php?emergencycontactregistration=success");
 }else{
  $sql = "INSERT INTO `users`(`Fullname`, `Phone_Number`, `Email_Address`, `User_Type`, `Password`) VALUES ('$fname','$phone','$email','$type',md5('$password'))";
     mysqli_query($conn, $sql);
  header("Location: index.php?userregistration=success");
  }
}else{
  echo "Passwords do not match.";
 }
}
}

//Add An Assistance Request
if (isset($_POST['addra'])) {
 $et = $_POST['et'];
 $uid = $_SESSION['username'];
 $rp = $_POST['rp']; 
 $sp = $_POST['sp'];
 $lo = $_POST['lo']; 
 $la = $_POST['la']; 

 require_once 'dbconnection.inc.php';

  $sql = "INSERT INTO `assistance`(`Emergency_Type`, `User_ID`, `Report`, `Safety_Preferences`, `Long`, `Lat`) VALUES ('$et','$uid','$rp','$sp','$lo','$la')";
     mysqli_query($conn, $sql);
  header("Location: index1.php?addassitancerequest=success");
}

//Add Feedback
if (isset($_POST['addf'])) {
 $uid = $_SESSION['username'];
 $aid = $_POST['aid'];
 $cont = $_POST['cont']; 

 require_once 'dbconnection.inc.php';

  $sql = "INSERT INTO `feedback`(`User_ID`, `Assistance_ID`, `Content`) VALUES ('$uid','$aid','$cont')";
     mysqli_query($conn, $sql);
  header("Location: index1.php?addfeedback=success");
}

//Delete Functions

        if($_REQUEST['action'] == 'deleteU' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `users` WHERE `User_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index.php?deleteuser=success");
        }

        if($_REQUEST['action'] == 'completeA' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "UPDATE `assistance` SET `Status` = 'Completed' WHERE `Assistance_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index.php?completerequest=success");
        }

        if($_REQUEST['action'] == 'cancelA' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "UPDATE `assistance` SET `Status` = 'Cancelled' WHERE `Assistance_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index.php?cancelrequest=success");
        }

        if($_REQUEST['action'] == 'deleteA' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `assistance` WHERE `Assistance_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index1.php?deleteassitancerequest=success");
        } 

        if($_REQUEST['action'] == 'deleteF' && !empty($_REQUEST['id'])){ 
        require_once 'dbconnection.inc.php';
        $deleteItem = $_REQUEST['id'];
        $sql = "DELETE FROM `feedback` WHERE `Feedback_ID` = '$deleteItem'";
        mysqli_query($conn, $sql); 
        header("Location: index1.php?deletefeedback=success");
        } 

//Update User
if (isset($_POST['upu'])) {
 $uid = $_POST['uid'];
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];
 $phone = $_POST['phone'];
 $mod = $_POST['mod'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {
  if ($mod == 1) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index.php?updateadministrator=success");
  }else if ($mod == 2) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index1.php?updateuser=success");
  }else if ($mod == 3) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: index2.php?updateemergencycontact=success");
  }
 }else{
  echo "Passwords do not match.";
 }
}

 ?>