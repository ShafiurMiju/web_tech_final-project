<?php
    $remail=$rpass="";

    $servername="localhost";
	$username="root";
	$password="";
	$dbname="web_project_final";

	$conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
	    die("Connection failed:".$conn->connect_error);
    }
    else{
        $Email=$Password="";
        $login=true;
        
        if(isset($_POST["loginbtn"])){

            if($_POST["email"]!=""){
                $Email=$_POST["email"];
            }

            if($_POST["password"]!=""){
                $Password=$_POST["password"];
            }

            if($_POST["email"]!="" && $_POST["password"]!=""){
                $q="SELECT * FROM seller WHERE email='$Email' AND password = '$Password'";

                $result = mysqli_query($conn, $q);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                
                if($count==1){  
                    $_SESSION['email'] = $Email;
                    setcookie("rememberEmail",$_POST["email"],time()+(86400*100));
                    setcookie("rememberPass",$_POST["password"],time()+(86400*100));
                    header("location:SDashboard.php");  
                }  
                else{  
                    $login=false;
                }  
            }
            
        }
    }
    $conn->close();
?>



	