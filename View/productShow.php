<?php
$servername="localhost";
$username="root";
$password="";
$dbname="web_project_final";
?>
				

<?php
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	$q="SELECT * from product";
	$result=$conn->query($q);
	$output='<div class="pTable"><table border="1" width=100%><tr><th>ID</th><th>Name</th><th>Price</th><th>Quantity</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.= "<tr><td>{$row["id"]} </td><td>{$row["name"]} </td><td>{$row["price"]}</td><td>{$row["quantity"]}</td></tr>";
		}
		$output.='</table></div>';
	}
	else
		echo "No User Found";
	
	
}
$conn->close();
echo $output;
?>