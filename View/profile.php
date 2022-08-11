<?php
    session_start();
    include '../Controller/SellerProfileEdit.php';
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="web_project_final";

    $email=$_SESSION['email'];

    $conn=new mysqli($servername,$username,$password,$dbname);

    $q="SELECT first_name, last_name FROM seller WHERE email='$email'";

    $result=$conn->query($q);        

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $first_name1=$row["first_name"];
            $last_name1=$row["last_name"];
        }
    } 
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $first_name1." ".$last_name1 ;?></title>
        <link rel="stylesheet" href="../Model/css/SProfile.css?v<?php echo time(); ?>">

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
                    <div class="aboutyou" id="aboutyou">
                        <div class="profilepic">
                            <img src="image/profilepic.jpg">
                        </div>
                        <div class="profileinfo">
                            <table>
                                <tr>
                                    <th>
                                        <p>Name: </p>
                                    </th>
                                    <td>
                                        <?php echo $first_name." ".$last_name;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>E-mail: </p>
                                    </th>
                                    <td>
                                        <?php echo $email;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Phone Number: </p>
                                    </th>
                                    <td>
                                        <?php echo $phone_number;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Address: </p>
                                    </th>
                                    <td>
                                        <?php echo $address;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>District: </p>
                                    </th>
                                    <td>
                                        <?php echo $district;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Upzilla/Thana: </p>
                                    </th>
                                    <td>
                                        <?php echo $upzilla;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Gender: </p>
                                    </th>
                                    <td>
                                    <?php echo $gender;?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Date of Birth: </p>
                                    </th>
                                    <td>
                                        <?php echo $dob;?>
                                    </td>
                                </tr>
                            </table>
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