<?php
	$isPost=false;
	$accountC= false;
	$chat="";

	if(isset($_POST["Srchbtn"]))
	{
		$isPost=true;
		if($_POST["text"]!="")
			$chat=$_POST["text"];	
	}
	
	if(isset($_POST["Srchbtn"])){
		if($_POST["text"]!=""){
			$new_chat = array(
				"text"=>$_POST["text"],	 
			 );
		   
			 if(filesize('../Model/JSON_File/chat.json') == 0){
				$first_record = array($new_chat);
				$data_to_save = $first_record;
			 }
			 else{
				$old_records = json_decode(file_get_contents('../Model/JSON_File/chat.json'));
				array_push($old_records, $new_chat);
				$data_to_save = $old_records;
			 }
		   
			 $encoded_data = json_encode($data_to_save, JSON_PRETTY_PRINT);
		   
			 if(!file_put_contents('../Model/JSON_File/chat.json', $encoded_data, LOCK_EX)){
				$accountC= false;
			 }else{
				$accountC= true;
			 }
		}
	}
	
?>