<?php
	session_start();
	include "koneksi.php";
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Login Form | CodingLab </title>--->
    <link rel="stylesheet" href="style-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <form action="#" method="post">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" placeholder="Masukkan Username" name= "fusername" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Masukkan Password" name="fpassword" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="fmasuk" value="Continue">
        </div>
      </form>
        
  </body>
</html>

<?php
	if (isset($_POST['fmasuk'])) {
		$Username = $_POST['fusername'];
		$Password = $_POST['fpassword'];
		$qry = mysqli_query($db, "SELECT * FROM tabel_login WHERE Username = '$Username' AND Password = md5('$Password')");
		$cek = mysqli_num_rows($qry);
			if ($cek==1) {
				$_SESSION['userweb']=$Username;
				header("location:index.php");
				exit;
			}
			else {
        echo '<script>alert("Maaf username dan password anda salah")</script>';
			}		
	}
?>

