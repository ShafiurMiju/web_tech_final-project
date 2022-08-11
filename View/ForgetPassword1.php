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
                        <h1>Reset Password</h1>
                    </div>
                    <div class="formarea">
                        <form name="forgetform1" action="" method="post" enctype="multipart/form-data" onsubmit="return validateform1()">
                            <div class="forpassform">
                                <div class="forminput">
                                    <input type="password" name="npass" id="npass" placeholder="New Password" onclick="alert_npass()">
                                </div>
                                <div class="forminput">
                                    <input type="password" name="cnpass" id="cnpass" placeholder="Confirm password" onclick="alert_cnpass()" oninput="alert_nomatch()">
                                </div>
                                <div id="validation">
                                    <p>Confirm Password not matched</p>
                                </div>
                                <div class="formbtn">
                                    <div class="formbtn1">
                                        <button type="button" onclick="location.href='Index.php'">Back</button>
                                    </div>
                                    <div class="formbtn2">
                                        <input type="submit" value="Save" name="passSavebtn">
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