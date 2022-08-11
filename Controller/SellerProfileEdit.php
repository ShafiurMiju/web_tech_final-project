<?php
$servername="localhost";
$username="root";
$password="";
$dbname="web_project_final";

$email=$_SESSION['email'];

$conn=new mysqli($servername,$username,$password,$dbname);

	$q="SELECT * FROM seller WHERE email='$email'";

	$result=$conn->query($q);        

	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			$first_name=$row["first_name"];
			$last_name=$row["last_name"];
			$email=$row["email"];
			$phone_number=$row["phone_number"];
			$address=$row["address"];
			$upzilla=$row["upzilla"];
			$district=$row["district"];
			$dob=$row["dob"];
			$gender=$row["gender"];
		}
	}



	$efirstName=$elastName=$epnumber=$eaddress=$edob="";
	$edstrct="";
	$eupzla="";
	$egender="";

	if(isset($_POST["esavebtn"]))
	{
		if($_POST["efname"]!="")
			$efirstName=$_POST["efname"];
		if($_POST["elname"]!="")
			$elastName=$_POST["elname"];
		if($_POST["edstrct"]!="")
			$edstrct=$_POST["edstrct"];
		if($_POST["eupzlla"]!="")
			$eupzla=$_POST["eupzlla"];
		if($_POST["epnumber"]!="")
			$epnumber=$_POST["epnumber"];
		if($_POST["eaddress"]!="")
			$eaddress=$_POST["eaddress"];
		if($_POST["egender"]!="")
			$egender=$_POST["egender"];
		if($_POST["edob"]!="")
			$edob=$_POST["edob"];
		
	}

	if(isset($_POST["esavebtn"])){
		if($conn->connect_error){
			die("Connection error");
		}
		else{
			if($efirstName!="" && $elastName!="" && $epnumber!="" && $eaddress!="" && $edob!="" && $edstrct!="" && $eupzla!="" && $egender!=""){
				$efname=$_POST["efname"];
				$elname=$_POST["elname"];
				$epnumber=$_POST["epnumber"];
				$eaddress=$_POST["eaddress"];
				$eupzlla=$_POST["eupzlla"];
				$edstrct=$_POST["edstrct"];
				$egender=$_POST["egender"];
				$edob=$_POST["edob"]; 
	
				$q1 = "UPDATE seller SET first_name='$efname', last_name='$elname', phone_number='$epnumber', district='$edstrct', upzilla='$eupzlla',
				 address='$eaddress', gender='$egender', dob='$edob' WHERE email='$email'";
		
	
				//$result1=$conn->query($q1);
	
				/*if($result1){
					header("location: ../View/profile.php");
				}
				else{
					echo("data not update");
				}*/


				if ($conn->query($q1) === TRUE) {
					echo "Record updated successfully";
					header("location: ../View/profile.php");
				} else {
					echo "Error updating record: " . $conn->error;
				}
			}
				
		}
	}


	

?>

