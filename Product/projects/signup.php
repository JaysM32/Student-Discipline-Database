<link rel="stylesheet" type="text/css" href="input.css">
<link rel="stylesheet" type="text/css" href="webtitle.css">
<head>
  <?php
   echo '<p class="webtitle">Tunas Muda eDisciplinary System</p>';
  ?>
</head>

<main>
    <form align="center" action="code/signup.code.php" method="post">
      <h1 align="center">Register Account</h1>

      <div class="imgcontainer">
          <img src="img/logo.png" alt="Avatar" class="avatar">
      </div>

        <div class="container">
          <label for="uname"><b>Full Name</b></label><br>
          <input type="text" name="FNUser" placeholder="Full Name"><br>

          <label for="uname"><b>Class</b></label><br>
          <input type="text" name="CLASSUser" placeholder="Class (Ex. 12C)"><br>

				  <label for="uname"><b>Username</b></label><br>
          <input type="text" name="IDUser" placeholder="Username"><br>

          <label for="uname"><b>Date of Birth</b></label><br>
          <input type="text" name="DOBUser" placeholder="DOB (DD/MM/YY)"><br>

          <label for="uname"><b>E-mail</b></label><br>
          <input type="text" name="Email" placeholder="E-mail"><br>

          <label for="uname"><b>Password</b></label><br>
          <input type="password" name="pswd" placeholder="Password"><br>

          <label for="uname"><b>Repeat Password</b></label><br>
          <input type="password" name="pswdr" placeholder="Repeat Password"><br>

          <label for="uname"><b>Teacher Code (Leave blank for Students)</b></label><br>
          <input type="password" name="TCode" placeholder="Teahcer Code"><br>

          <button type="submit" name="signup-submit">Sign Up</button>

          <button type="return" name="return-submit">Return To Log In</button>

    </form>
</main>
