<?php
    session_start();
    include '../Controller/SellerProfileEdit.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_SESSION['email']; ?></title>
        <link rel="stylesheet" href="../Model/css/SProfileEdit.css?v<?php echo time(); ?>">
    </head>
    <body>
        <div class="aboutyou">
            <div class="profilepic">
                <img src="image/profilepic.jpg">
            </div>
            <div class="profileinfo">
                <form action="" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <th>
                                <p>First Name: </p>
                            </th>
                            <td>
                                <input type="text" name="efname" value="<?php echo $first_name; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>Last Name: </p>
                            </th>
                            <td>
                                <input type="text" name="elname" value="<?php echo $last_name; ?>">
                            </td>
                        </tr>
                    <tr>
                            <th>
                                <p>Phone Number: </p>
                            </th>
                            <td>
                                <input type="text" name="epnumber" value="<?php echo $phone_number; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>Address: </p>
                            </th>
                            <td>
                                <input type="text" name="eaddress" value="<?php echo $address; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>District: </p>
                            </th>
                            <td>
                                <input type="text" name="edstrct" value="<?php echo $district; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>Upzilla/Thana: </p>
                            </th>
                            <td>
                                <input type="text" name="eupzlla" value="<?php echo $upzilla; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>Gender: </p>
                            </th>
                            <td>
                                <input type="text" name="egender" value="<?php echo $gender ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>Date of Birth: </p>
                            </th>
                            <td>
                                <input type="text" name="edob" value="<?php echo $dob; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input class="esavee" type="submit" name="esavebtn" value="SAVE">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>