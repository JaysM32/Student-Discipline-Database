<?php
if(isset($_POST['change-submit'])){
require 'databasehandle.code.php';
$nstudent = $_POST['findstudent'];
$ustudent = $_POST['studentpoint'];

if (empty($ustudent)) {
  header("Location: ../studentedit.php?error=emptyfields");
  exit();
}else{
  $sql = "SELECT * FROM accounts WHERE UIDUsers=?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
    header("Location: ../studentedit.php?error=sqlconnerror");
    exit();
  }else{
		$update = "UPDATE accounts SET PSUsers = ? WHERE UIDUsers = ?";
		$stmt = mysqli_stmt_init($conn);
		if (mysqli_stmt_prepare($stmt,$update)) {
			mysqli_stmt_bind_param($stmt, "is", $ustudent, $nstudent );
      mysqli_stmt_execute($stmt);
			header("Location: ../teachermain2.php?change=success");
			exit();
		}else{
			header("Location: ../teachermain2.php?change=fail");
			exit();
		}
	}
  }
mysqli_stmt_close($stmt);
mysqli_close($conn);

}else{
header("Location: ../studentedit.php");
exit();
}
