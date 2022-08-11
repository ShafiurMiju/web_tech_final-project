<?php
    session_start();
	include '../Controller/SPassChange_validation.php';
    include '../Controller/SellerProfileEdit.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_SESSION['email']; ?></title>
        <link rel="stylesheet" href="../Model/css/SPassChange.css?v<?php echo time(); ?>">
    </head>
    <body>
        <div class="container">
            <nav id="navbar">
            <?php
                include 'navbar.php';
            ?>
            </nav>
            <section id="sectionbar">
                <div class="ssectionbody">
                    <div class="profilemenubar">
                    <ul>
                            <li>
                                <a href="profile.php">About You</a>
                            </li>
                            <li>
                                <a id="sedit">Edit Profile</a>
                            </li>
                            <li>
                                <a href="SPasswordChange.php">Change Password</a>
                            </li>
                        </ul>
                    </div>
                    <div id="aboutyou">
                    <div class="message">
                        <?php
                            if($change==true){
                                echo "<p style='color:green;font-size:18px;text-align:center;'>Success</p>";
                            }
                            if($wrong==true){
                                echo "<p style='color:red;font-size:18px;text-align:center;'>Current Password not matched</p>";
                            }
                            if($match==false){
                                echo "<p style='color:red;font-size:18px;text-align:center;'>New Password & Confirm Password not matched</p>";
                            }
                        ?>
                    </div>
                    <div class="profileinfoc">
                        <form action="" method="post" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <th>
                                        <p>Current Password: </p>
                                    </th>
                                    <td>
                                        <input type="password" name="cpassword" placeholder='Enter Current Password'>
                                    </td>
                                    <td>
                                        <?php
                                            if($isPost==true&&$_POST["cpassword"]==""){
                                                echo "<p style='color:red;font-size:14px;text-align:center;'>Required</p>";
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>New Password: </p>
                                    </th>
                                    <td>
                                        <input type="password" name="npassword" placeholder='Enter New Password'>
                                    </td>
                                    <td>
                                        <?php
                                            if($isPost==true&&$_POST["npassword"]==""){
                                                echo "<p style='color:red;font-size:14px;text-align:center;'>Required</p>";
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Confirm New Password: </p>
                                    </th>
                                    <td>
                                        <input type="password" name="cnpassword" placeholder='Enter Confirm Password'>
                                    </td>
                                    <td>
                                        <?php
                                            if($isPost==true&&$_POST["cnpassword"]==""){
                                                echo "<p style='color:red;font-size:14px;text-align:center;'>Required</p>";
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input class="esave" type="submit" name="changepassbtn" value="SAVE">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        
                    </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="../Controller/js/jquery.js"></script>
        <script>
            $(document).ready(function(){
                $("#sedit").on("click",function(e){
                    $.ajax({
                        url:"SProfileEdit.php",
                        type:"POST",
                        success:function(data){
                            $("#aboutyou").html(data);
                        }
                    });
                });
            });
        </script>
    </body>
</html>