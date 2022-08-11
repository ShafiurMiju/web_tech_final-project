


<?php
$servername="localhost";
$username="root";
$password="";
$dbname="web_project_final";

$srch="";

if(isset($_POST["Srchbtn"])){
	$srch=$_POST["srch"];
}





if($srch==""){

                                            $sql = mysqli_query($conn, "SELECT * FROM product");
                                            while ($row = $sql->fetch_assoc()){
                                        ?>
                                        <form name="pricelist" id="pricelist" method="POST" action="" onsubmit="return tprice()">
                                            <div class="list">
                                                <div class="listcheck">
                                                    <input type="checkbox">
                                                </div>
                                                <div class="pname">
                                                    <p><?php echo $row['name'] ?></p>
                                                </div>
                                                <div class="pprice">
                                                    <input type="text" name="price" id="price" value="<?php echo $row['price']; ?>" disabled>
                                                    <span><?php echo "tk/".$row['quantity']; ?></span>
                                                </div>
                                                <div class="pincrese">
                                                    <input type="number" name="number" id="number" value="0" >
                                                </div>
                                                <div class="ptprice">
                                                    <input type="text" name="tprice" id="tprice" value="0" disabled>
                                                    <span>Tk</span>
                                                </div>
                                            </div>
                                        
                                        <?php
                                            }
                                        
}


if(isset($_POST["Srchbtn"])){
	if($srch!=""){
        $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
        die("Connection failed:".$conn->connect_error);
    }
    else
    {
        $sql = mysqli_query($conn, "SELECT * from product WHERE name LIKE '%$srch%'");
        while ($row = $sql->fetch_assoc()){
        ?>
        <form name="pricelist" id="pricelist" method="POST" action="" onsubmit="return tprice()">
            <div class="list">
                <div class="listcheck">
                    <input type="checkbox">
                </div>
                <div class="pname">
                    <p><?php echo $row['name'] ?></p>
                </div>
                <div class="pprice">
                    <input type="text" name="price" id="price" value="<?php echo $row['price']; ?>" disabled>
                    <span><?php echo "tk/".$row['quantity']; ?></span>
                </div>
                <div class="pincrese">
                    <input type="number" name="number" id="number" value="0" >
                </div>
                <div class="ptprice">
                    <input type="text" name="tprice" id="tprice" value="0" disabled>
                    <span>Tk</span>
                </div>
            </div>
    
        <?php
        }
        
        
    }
    $conn->close();

    }
}

?>

<script src="../Controller/js/jquery.js"></script>
        <script>
            $(document).ready(function(){
                $("#pbtn").on("click",function(e){
                    $.ajax({
                        url:"productShow.php",
                        type:"POST",
                        success:function(data){
                            $("#productlist").html(data);
                        }
                    });
                });
            });


        </script> 