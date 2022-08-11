<?php
    include '../Controller/log_out.php';

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
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../Model/css/navbar.css?v<?php echo time(); ?>">
    </head>
    <body>
        <div class="container">
            <nav id="navbar">
                <div class="sname">
                    <?php echo $first_name1." ".$last_name1;?>
                </div>
                <div class="menubar">
                    <ul>
                        <li>
                            <a href="SDashboard.php">Sell Product</a>
                        </li>
                        <li>
                            <a href="profile.php">Profile</a>
                        </li>
                        <li>
                            <a href="request.php">Request</a>
                        </li>
                        <li>
                            <a href="BuyerinMap.php">Buyer in Map</a>
                        </li>
                        <li>
                            <a href="Sellernotification.php">Notification</a>
                        </li>
                        <li>
                            <a href="SellerNotice.php">Notice</a>
                        </li>
                        <li>
                            <a href="SellerReport.php">Report</a>
                        </li>
                        <li>
                            <a href="chat.php">Chat</a>
                        </li>
                    </ul>
                </div>
                <div class="logoutbtn">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="submit" name="logoutbtn" value="Log Out">
                    </form>
                </div>
            </nav>
        </div>
    </body>
</html>