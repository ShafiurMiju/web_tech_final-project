<?php
    session_start();

    $servername="localhost";
	$username="root";
	$password="";
	$dbname="web_project_final";

	$conn=new mysqli($servername,$username,$password,$dbname);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="../Model/css/SDashboard.css?v<?php echo time(); ?>">
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
                        <h1>Price list</h1>
                    </div>
                        <div class="selleradd" id="main">
                            <div class="srch">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <input class="srchbox" type="text" name="srch" placeholder="Search Product">
                                    <input id="srch" class="srchbtn" type="submit" name="Srchbtn" value="Search">
                                    
                                </form>
                                
                            </div>
                            <div class="search">
                                <button id="pbtn">Show All Product</button>
                            </div>
                        </div>
                    <div id="productlist">
                        
                        <div class="pricelist">
                            <div class="buyerlist">
                                <form>
                                    <table class="buyer">
                                        <tr>
                                            <td>
                                            <select id="buyer" name="buyer">
                                                <?php 
                                                    $sql = mysqli_query($conn, "SELECT * FROM buyer");
                                                    while ($row = $sql->fetch_assoc()){
                                                        ?>
                                                            <option value="buyerlist"><?php echo $row['first_name']; ?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            
                            <div class="plist">
                                <ul>
                                    <li>
                                    <?php
                                        include '../View/productSearch.php';
                                    ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="plist">
                                    <div class="totallist">
                                        <div class="totalprice">
                                            <p>0 Tk</p>
                                        </div>
                                        <div class="total">
                                            <p>Total</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="sellbtn">
                                <button type="submit">Sell Request</button>
                            </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </section>
        </div>


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
    </body>
</html>