<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="web_project_final";

	$conn=new mysqli($servername,$username,$password,$dbname);

    $isPost=false;
    $match=true;
    $wrong=false;
    $change=false;
	$CPass=$NPass=$CNPass="";

	$Email=$_SESSION['email'];

	if(isset($_POST["changepassbtn"]))
	{
		$isPost=true;
		if($_POST["cpassword"]!="")
			$CPass=$_POST["cpassword"];
		if($_POST["npassword"]!="")
			$NPass=$_POST["npassword"];
		if($_POST["cnpassword"]!="")
			$CNPass=$_POST["cnpassword"];
	}

    if(isset($_POST["changepassbtn"])){
        if($_POST["cpassword"]!=""&&$_POST["npassword"]!=""&&$_POST["cnpassword"]!=""){

			if($conn->connect_error){
				die("Connection failed:".$conn->connect_error);
			}

			else{
				if($NPass!=$CNPass){
					$match= false;
				}
				
				else{
					$q="SELECT * FROM seller WHERE email='$Email' AND password='$CPass'";

					$result = mysqli_query($conn, $q);  
					$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
					$count = mysqli_num_rows($result);  
					
					if($count==1){  
						$q1="UPDATE seller SET password='$CNPass' WHERE email='$Email'";
						if ($conn->query($q1) === TRUE) {
							header("location:index.php");
						} else {
							echo "Error updating record: " . $conn->error;
						}
					}  
					else{  
						$wrong=true;
					}
				}
			}

		}
	}
?>