<?php
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
        
    
    if(isset($_POST["Rfbtn"])||isset($_POST["Srchbtn"])){

            $jsondata=file_get_contents('../Model/JSON_File/chat.json');
            $json=json_decode($jsondata);
            foreach($json  as $b)
            {
                echo "<div class='schat'>"."<h4>".$first_name1." ".$last_name1.": "."</h4>"."<p>".$b->text."</p>"."</div>";
            }

        }
        
?>



	