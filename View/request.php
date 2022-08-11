<?php
    session_start();
    $servername="localhost";
	$username="root";
	$password="";
	$dbname="web_project_final";

	$conn=new mysqli($servername,$username,$password,$dbname);
    
    if (isset($_GET['rid'])) {  
        $id=$_GET['rid'];  
        $delete=mysqli_query($conn,"delete from request where rid='$id'");  
        if ($delete) {  
             header("location:request.php");  
             die();  
        }  
   }  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Request</title>
        <link rel="stylesheet" href="../Model/css/request.css?v<?php echo time(); ?>">
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
                <div class="pricetitle">
                        <h1>My Rquest</h1>
                </div>
                <table border="1" cellpadding="0">  
           <tr>  
                <th>#</th>  
                <th>Name</th>  
                <th>Price</th>   
                <th>Operation</th>  
           </tr>  
           <?php   
                $q=mysqli_query($conn,"select * from request");  
                $count=mysqli_num_rows($q);  
                if ($count>0) {  
                     while($result=mysqli_fetch_assoc($q)){  
                          echo "  
                               <tr>  
                                    <td>".$result['rid']."</td>  
                                    <td>".$result['pname']."</td>  
                                    <td>".$result['tprice']."</td>  
                                    <td>  
                                         <a href='?rid=".$result['rid']."' class='opt'>Delete</a>  
                                    </td>  
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
      </table>  
                        
                </div>
            </section>
        </div>
    </body>
</html>