<?php
//PURE PHP CODE
session_start();

if (isset($_POST['login-submit'])){
  require 'databasehandle.code.php';

  $mailUID = $_POST['mailUID'];
  $pswd = $_POST['pswd'];

  if (empty($mailUID) ||empty($pswd)) {
    header("Location: ../index.php?error=emptyfields&mailUID=".$mailUID);
    exit();
  }else{
    $sql = "SELECT * FROM accounts WHERE UIDUsers=? OR EMAILUsers=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
      header("Location: ../index.php?error=sqlconnerror");
      exit();
    }else{
      mysqli_stmt_bind_param($stmt, "ss", $mailUID, $mailUID );
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pswdcek = password_verify($pswd, $row['PSWDUsers']);
        if ($pswdcek == false) {
          header("Location: ../index.php?error=wrongpassword");
          exit();
        }else if($pswdcek == true){
          $_SESSION['userID'] = $row['IDUsers'];
          $_SESSION['userUID'] = $row['UIDUsers'];
          $acctypecek = $row['ATUsers'];
          if ($acctypecek == "student"){
            header("Location: ../student.php?login=success");
            exit();
          }elseif ($acctypecek == "admin") {
            header("Location: ../teachermain.php?login=success");
            exit();
          }
        }
      }else{
        $sql = "SELECT * FROM Teachers WHERE UIDUsers=? OR EMAILUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
          header("Location: ../index.php?error=sqlconnerror");
          exit();
        }else{
          mysqli_stmt_bind_param($stmt, "ss", $mailUID, $mailUID );
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if ($row = mysqli_fetch_assoc($result)) {
            $pswdcek = password_verify($pswd, $row['PSWDUsers']);
        if ($pswdcek == false) {
          header("Location: ../index.php?error=wrongpassword");
          exit();
        }else if($pswdcek == true){
          $_SESSION['userID'] = $row['IDUsers'];
          $_SESSION['userUID'] = $row['UIDUsers'];
          $acctypecek = $row['ATUsers'];
          if ($acctypecek == "teacher") {
            header("Location: ../teachermain.php?login=success");
            exit();
          }else if ($acctypecek == "admin"){
            header("Location: ../teachermain.php?login=success");
            exit();
          }
        }
      }else{ //check the problem here, not finished
        header("Location: ../index.php");
        exit();
      }  }
    }
}
}
}
