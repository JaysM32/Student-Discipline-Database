<?php
session_start();
if(isset($_POST['find-submit'])){
require 'code/databasehandle.code.php';

$classID = $_POST['classID'];
if (empty($classID)) {
  header("Location: ../teachermain2.php?error=emptyfields");
  exit();
}else{

  $sql = "SELECT * FROM accounts WHERE CLASSUsers=?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
    header("Location: ../teachermain2.php?error=sqlconnerror");
    exit();
  }else{
    mysqli_stmt_bind_param($stmt, "s", $classID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    }
//mysqli_stmt_close($stmt);
//mysqli_close($conn);
}
}else{
header("Location: ../teachermain2.php");
exit();
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
<link rel="stylesheet" type="text/css" href="table.css">

<title>Tunas Muda eDisiplinary System</title>
<head>
  <body>
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
  </body>
</head>

<main>
  <br><br>
  <form action="code/student.code.php" method="post"><br><br>
    <h1 align="center"><?php echo'Showing for ClassID: '.$classID; ?></h1><br><br>
		<div class="text">
      <table>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Full Name</th>
          <th>DOB</th>
          <th>Disciplinary Points</th>
        </tr>
      <?php
      $ind = 0;
        while($row = mysqli_fetch_assoc($result)){
          $ind = $ind+1;
          echo '<tr>
            <td>'.$row['IDUsers'].'</td>
            <td>'.$row['UIDUsers'].'</td>
            <td>'.$row['FNUsers'].'</td>
            <td>'.$row['DOBUsers'].'</td>
            <td>'.$row['PSUsers'].'</td>
          </tr>';
        }
      ?>
    </table>
    <br><br>
	</div>
  <div class="container" align="center">
    <label for="find"><b>Enter Student Username TO Change Points</b></label><br>
    <input type="text" name="findstudent" placeholder="Username (Ex. ernest123)" required><br>

    <label for="find"><b>Change Points to ...</b></label><br>
    <input type="text" name="studentpoint" placeholder="Final Points" required><br>

    <button type="submit" name="change-submit">Edit Student's Points</button><br>
    <br><br>
  </div>
</form>
</main>
