<?php
  session_start();
  if(isset($_SESSION['email'])){
    header("location: profile.php");
    exit;
  }
	include '../Controller/login_validation.php';
	include '../Controller/cookie.php';
?>
<html>
  <head>
    <title>Log in</title>
    <link rel="stylesheet" href="../Model/css/index.css?v<?php echo time(); ?>">
  </head>
  <body>
    <section id="container">
      <div class="webtitle">
        <p>Plastic & Polythene Collector</p>
      </div>

      <div class="loginarea">
         <div class="avater">
           <img src="image/avatar.png" >
           <?php
							if($Email!="" && $Password!="" && $login==false ){
									echo "<span style='color:red;font-size:20px;text-align:left;padding:10px 0px;'>User Not Found</span>";
              }
						?>
         </div>

         <div class="loginbox">
            <form name="loginform" action="" method="post" enctype="multipart/form-data" onsubmit="return validateform()">
            	<div class="box">
                	<input id="email" class="inputbox" type="email" name="email" placeholder="E-Mail Address"  onclick="alert_email()" oninput="return alert_wrng()" value="<?php echo $remail; ?>">
					
              </div>

              <div class="box">
                	<input id="password" class="inputbox" type="password" name="password" placeholder="Password" onclick="alert_password()" oninput="return alert_wrng()" value="<?php echo $rpass; ?>">
					
              </div>

              <div class="box">
                	<input class="loginbtn" type="submit" name="loginbtn" value="Log in">
              </div>

            </form>
         </div>

         <div class="loginothers">
           <div class="forgetpass">
              <a href="ForgetPassword.php">Forgotten Account?</a>
           </div>

           <div class="newaccount">
              <a href="registration.php">New User? Create a new Account.</a>
           </div>

          </div>
      </div>

      <div class="loginarea2">
        <div class="leftdesign">
          
        </div>
        <div class="otherlogin">
          <p>or log in with</p>
        </div>
        <div class="rightdesign">
          
        </div>

        <div class="otherloginavatar">
          <a href="#"><img src="image/google.png" width="25px" height="25px"></a>
          <a href="#"><img src="image/facebook.png" width="25px" height="25px"></a>
          <a href="#"><img src="image/twitter.png" width="26px" height="26px"></a>
        </div>
      </div>

    </section>
    <footer id="container">
      
    </footer>


    <script src='../Controller/js/jquery.js?v<?php echo time(); ?>' crossorigin='anonymous'></script>
    <script src='../Controller/js/login _vali.js?v<?php echo time(); ?>' crossorigin='anonymous'></script>
  </body>
</html>