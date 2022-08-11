<?php
    session_start();
    include '../Controller/forgetPass.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forget Password</title>
        <link rel="stylesheet" href="../Model/css/ForgetPassword.css?v<?php echo time(); ?>">
        
    </head>
    <body>
        <section id="container">
            <div class="bodycontainer">
                <div class="forgetpassarea">
                    <div class="findpasstitle">
                        <h1>Find your Account</h1>
                    </div>
                    <div class="findpasstext">
                        <p>
                            Please Enter your e-mail address to find your account.
                        </p>
                    </div>
                    <div class="validation">
                        <?php
						    if($goforward==false)
							    echo "<p style='color:red;font-size:13px;text-align:center;'>User not Found</p>";
					    ?>
                    </div>
                    <div class="formarea">
                        <form name="forgetform" action="" method="post" enctype="multipart/form-data" onsubmit="return validateform()">
                            <div class="forpassform">
                                <div class="forminput">
                                    <input type="email" id="femail" name="femail" placeholder="E-Mail Address" onclick="alert_email()">
                                </div>
                                <div class="formbtn">
                                    <div class="formbtn1">
                                        <button type="button" onclick="location.href='Index.php'">Back</button>
                                    </div>
                                    <div class="formbtn2">
                                        <input type="submit" name="emailfindbtn" value="Search">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script src='../Controller/js/jquery.js?v<?php echo time(); ?>' crossorigin='anonymous'></script>
        <script src='../Controller/js/forget_pass_vali.js?v<?php echo time(); ?>' crossorigin='anonymous'></script>
    </body>

</html>