<?php
//PURE PHP CODE

if (isset($_POST['signup-submit'])) {
  require 'databasehandle.code.php';

  $fname = $_POST['FNUser'];
  $cname = $_POST['CLASSUser'];
  $username = $_POST['IDUser'];
  $dob = $_POST ['DOBUser'];
  $email = $_POST['Email'];
  $pswd = $_POST['pswd'];
  $pswdr = $_POST['pswdr'];
  $TeacherCode = $_POST['TCode'];
  $AccType = "student";

  if (empty($username) || empty($cname) || empty($fname)||empty($email) ||empty($pswd) ||empty($pswdr)) {
    header("Location: ../signup.php?error=emptyfields");
    exit();
  }else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: ../signup.php?error=invalidEmailIDuser");
    exit();
  }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../signup.php?error=invalidEmail&IDUsers=".$username);
    exit();
  }else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: ../signup.php?error=invalidUsername&email=".$email);
    exit();
  }else if($pswd !== $pswdr ){
    header("Location: ../signup.php?error=passworderro&IDUsers=".$username."r&email=".$email);
    exit();
  }else{
    if ($TeacherCode == "teacher") {
      $AccType = "teacher";
      $cname = "teacher";
      $sql = "SELECT UIDUsers FROM Teachers WHERE UIDUsers=?";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../signup.php?error=sqlconnerror");
        exit();
      }else{
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultcheck = mysqli_stmt_num_rows($stmt);
        if ($resultcheck > 0) {
          header("Location: ../signup.php?error=usertaken");
          exit();
        }else {
          $sql = "INSERT INTO Teachers( UIDUsers, FNUsers,
            CLASSUsers, EMAILUsers, PSWDUsers, ATUsers,
            OPSWDUsers, DOBUsers) VALUES (?,?,?,?,?,?,?,?)";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../signup.php?error=sqlconnerror");
            exit();
          }else {
            $hashpswd = password_hash($pswd, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssssssss", $username,
            $fname, $cname, $email, $hashpswd, $AccType, $pswd, $dob);
            mysqli_stmt_execute($stmt);
            header("Location: ../index.php?signup=success");
            exit();
          }
        }
      }
    }else{
      $AccType = "student";
      $sql = "SELECT UIDUsers FROM accounts WHERE UIDUsers=?";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../signup.php?error=sqlconnerror");
        exit();
      }else{
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultcheck = mysqli_stmt_num_rows($stmt);
        if ($resultcheck > 0) {
          header("Location: ../signup.php?error=usertaken");
          exit();
        }else {
          $sql = "INSERT INTO accounts( UIDUsers, FNUsers, CLASSUsers, EMAILUsers, PSWDUsers, ATUsers, OPSWDUsers, DOBUsers) VALUES (?,?,?,?,?,?,?,?)";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../signup.php?error=sqlconnerror");
            exit();
          }else {
            $hashpswd = password_hash($pswd, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssssssss", $username, $fname, $cname, $email, $hashpswd, $AccType, $pswd, $dob);
            mysqli_stmt_execute($stmt);
            header("Location: ../index.php?signup=success");
            exit();
          }

        }
      }
    }




  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);


}elseif(isset($_POST['return-submit'])){
  header("Location: ../index.php");
  exit();
}else{
  header("Location: ../signup.php");
  exit();
}
