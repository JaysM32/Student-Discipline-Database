<?php
session_start();
require 'code/databasehandle.code.php';

$mailUID = $_SESSION['userUID'];


$sql = "SELECT * FROM Teachers WHERE UIDUsers=? OR EMAILUsers=?;";
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
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<script>
  function openSlideMenu(){
    document.getElementById('menu').style.width = '250px';
    document.getElementById('content').style.marginLeft = '250px';
  }
  function closeSlideMenu(){
    document.getElementById('menu').style.width = '0';
    document.getElementById('content').style.marginLeft = '0';
  }
</script>

<link rel="stylesheet" type="text/css" href="webtitle.css">
<link rel="stylesheet" type="text/css" href="styleDDmenu2.css">
<link rel="stylesheet" type="text/css" href="input.css">

<head>
<title>Tunas Muda eDisiplinary System</title>
		<?php
		if (isset($_SESSION['userID'])) {
				echo '<p class="webtitle">Tunas Muda eDisciplinary System</p>

				<div id="content">

					<span class="slide">
						<a href="#" onclick="openSlideMenu()">
							<i class="fas fa-bars"></i>
						</a>
					</span>

					<div id="menu" class="nav">
						<a href="#" class="close" onclick="closeSlideMenu()">
							<i class="fas fa-times"></i>
						</a>

						<nav class="main-nav">
						<ul class="main-nav-ul">

							<li><a href="teachermain.php">Home</a></li>

							<li class="submenu"><a href="teachermain2.php">Find Class</a>

							</li>
							<li><a href="code/logout.code.php">Logout</a></li>
						</ul>
						</nav>
					</div>';
		}
		?>
</head>

<main align="center">
	<form action="code/pickclass.code.php" method="post"><br><br>
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
		</h1><br>
		<h5 align="center"> Note: when adding a new class, input a empty student to create the class</h5>
	</div>
		<br><br>
	</form>

</main>
