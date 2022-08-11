<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="web_project_final";

	$account= false;

	$conn=new mysqli($servername,$username,$password,$dbname);

	$isPost=false;
	$accountC= false;
	$firstName=$lastName=$email=$pnumber=$passwrd=$address=$dob="";
	$dstrct="Select a district";
	$upzla="Select an Upzilla";
	$gender="Select Gender";
	if(isset($_POST["sellerbtn"]))
	{
		$isPost=true;
		if($_POST["fname"]!="")
			$firstName=$_POST["fname"];
		if($_POST["lname"]!="")
			$lastName=$_POST["lname"];
		if($_POST["email"]!="")
			$email=$_POST["email"];
		if($_POST["email"]!="")
			$pnumber=$_POST["email"];
		if($_POST["passwrd"]!="")
			$passwrd=$_POST["passwrd"];
		if($_POST["dstrct"]!="")
			$dstrct=$_POST["dstrct"];
		if($_POST["upzlla"]!="")
			$upzla=$_POST["upzlla"];
		if($_POST["address"]!="")
			$address=$_POST["address"];
		if($_POST["gender"]!="")
			$gender=$_POST["gender"];
		if($_POST["dob"]!="")
			$dob=$_POST["dob"];
		
	}
	
	if(isset($_POST["sellerbtn"])){
		if($conn->connect_error){
			die("Connection error");
		}
		else{
			if($firstName!="" && $lastName!="" && $email!="" && $pnumber!="" && $passwrd!="" && $address!="" && $dob!="" && $dstrct!="Select a district" && $upzla!="Select an Upzilla" && $gender!="Select Gender"){
					$fname=$_POST["fname"];
					$lname=$_POST["lname"];
					$email=$_POST["email"];
					$pnumber=$_POST["pnumber"];
					$password=$_POST["passwrd"];
					$address=$_POST["address"];
					$upzlla=$_POST["upzlla"];
					$dstrct=$_POST["dstrct"];
					$gender=$_POST["gender"];
					$dob=$_POST["dob"]; 

					$q1="SELECT * FROM seller WHERE email='$email'";

					$result1 = mysqli_query($conn, $q1);  
					$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);  
					$count1 = mysqli_num_rows($result1);  
					
					if($count1==1){  
						$account= true;  
					}  
					else{  
						$q="INSERT INTO seller(first_name,last_name,email,phone_number,password,district,upzilla,address,gender,dob) VALUES('".$fname."','".$lname."','".$email."',
						'".$pnumber."','".$password."','".$dstrct."','".$upzlla."','".$address."','".$gender."','".$dob."')";

						$result=$conn->query($q);

						if($result){
							header("location: ../View/index.php");
							$accountC= true;
						}
						else{
							echo("data not inserted");
							$accountC= false;
						}
					}
			}
		}
	}
	
?>