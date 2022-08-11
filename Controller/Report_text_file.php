<?php
	$isPost=false;
	$UserEmail=$Subject=$Message="";

	if(isset($_POST["messagesendbtn"]))
	{
		$isPost=true;
		if($_POST["useremail"]!="")
			$UserEmail=$_POST["useremail"];
		if($_POST["subject"]!="")
			$Subject=$_POST["subject"];
        if($_POST["message"]!="")
			$Message=$_POST["message"];
		
	}
	
	if(isset($_POST["messagesendbtn"])){
		if($UserEmail!="" && $Subject!="" && $Message!="")
		{
			$UEmail=$_POST["useremail"];
			$Sub=$_POST["subject"];
			$Mess=$_POST["message"];

			$report=fopen('../Model/Text_File/report.txt',"a") or die("could not open the file!");

			fwrite($report,"To: ".$UEmail."\n");
			fwrite($report,"Subject: ".$Sub."\n");
			fwrite($report,"Body: ".$Mess."\n");

			fclose($report);
		}
	}
	
?>