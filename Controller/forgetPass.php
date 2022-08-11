<?php
    $goforward=true;
    $NPass=$CNPass="";
    $isPost=false;
    $isMatch=true;

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="web_project_final";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
	    die("Connection failed:".$conn->connect_error);
    }

    else{
        if(isset($_POST["emailfindbtn"])){
        
            if($_POST["femail"]!=""){
                $Email=$_POST["femail"];
                
                $q="SELECT * FROM seller WHERE email='$Email'";

                $result = mysqli_query($conn, $q);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                
                if($count==1){  
                    $_SESSION['femail'] = $Email;
                    header('location:ForgetPassword1.php');  
                }  
                else{  
                    $goforward=false;
                }
    
            }
        }

        if(isset($_POST["passSavebtn"])){
            $isPost=true;
            $FEmail=$_SESSION['femail'];

            if($_POST["npass"]!=""){
                $NPass=$_POST["npass"];
            }
    
            if($_POST["cnpass"]!=""){
                $CNPass=$_POST["cnpass"];
            }
    
            if($_POST["npass"]!=$_POST["cnpass"]){
                $isMatch=false;
            }
    
            if($_POST["npass"]==$_POST["cnpass"] && $_POST["npass"]!="" && $_POST["cnpass"]!=""){
                $q1 = "UPDATE seller SET password='$CNPass' WHERE email='$FEmail'";
                if ($conn->query($q1) === TRUE) {
					header("location:index.php");
				} else {
					echo "Error updating record: " . $conn->error;
				}
            }
        }

    } 

?>