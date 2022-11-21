<?php
session_start();
require 'code/databasehandle.code.php';

$mailUID = $_SESSION['userUID'];


$sql = "SELECT * FROM accounts WHERE UIDUsers=? OR EMAILUsers=?;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
	header("Location: ../index.php?error=sqlconnerror");
	exit();
}else{
	mysqli_stmt_bind_param($stmt, "ss", $mailUID, $mailUID );
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	$row = mysqli_fetch_assoc($result);
}


?>

<link rel="stylesheet" type="text/css" href="webtitle.css">
<link rel="stylesheet" type="text/css" href="studentmenu.css">
<link rel="stylesheet" type="text/css" href="input.css">
<head>
<title>Tunas Muda eDisiplinary System</title>
		<?php
		    if (isset($_SESSION['userID'])) {
		        echo '<p class="webtitle">Tunas Muda eDisciplinary System</p>
		          <nav>
		            <ul>
			              <li><a href="code/logout.code.php">Logout</a></li>
		            </ul>
		           </nav>';
	            }
		?>
</head>

<main>
	<br><br>
	<form action="" method=""><br><br>
		<div class="imgcontainer">
				<img src="img/logo.png" alt="Avatar" class="avatar1">
		</div>
		<br><br>
		<div class="text">
		<h1 align="center">Welcome to Tunas Muda eDisiplinary System</h1>
		<br>
		<h1 align="center">
			<?php echo "Name: ".$row["FNUsers"];
			 ?>
		</h1>
		<br>
		<h1 align="center">
			<?php echo "Date of Birth: ".$row["DOBUsers"];
			 ?>
		</h1>
		<br>
		<h1 align="center">
			<?php echo "Current Disiplinary Points: <br>".$row["PSUsers"];
			 ?>
		</h1>
	</div>
		<br><br>
	</form>

</main>
