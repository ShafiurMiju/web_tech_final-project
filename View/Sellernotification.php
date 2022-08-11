<?php
    session_start();
    include '../Controller/show_notification_xml.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Notification</title>
        <link rel="stylesheet" href="../Model/css/notification.css?v<?php echo time(); ?>">

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
                   <div class="notificationarea">
                       <div class="notificationheading">
                           <h2>All Notification</h2>
                       </div>
                       <div class="notification">
                           <div class="singlenotification">
                               <div class="notificationimg">
                                   <img src="image/profilepic.jpg">
                               </div>
                               <div class="notificationbody">
                                   <p><b><?php echo $xml1->buyer; ?></b> <?php echo $xml1->message; ?></p>
                                   <p>9:48 AM</p>
                               </div>
                           </div>
                           <div class="singlenotification">
                               <div class="notificationimg">
                                   <img src="image/profilepic.jpg">
                               </div>
                               <div class="notificationbody">
                                   <p><b><?php echo $xml2->buyer; ?></b> <?php echo $xml2->message; ?></p>
                                   <p>9:48 AM</p>
                               </div>
                           </div>
                           <div class="singlenotification">
                            <div class="notificationimg">
                                <img src="image/profilepic.jpg">
                            </div>
                            <div class="notificationbody">
                                <p><b><?php echo $xml3->buyer; ?></b> <?php echo $xml3->message; ?></p>
                                <p>1 days ago</p>
                            </div>
                        </div>
                        <div class="singlenotification">
                            <div class="notificationimg">
                                <img src="image/profilepic.jpg" >
                            </div>
                            <div class="notificationbody">
                                <p><b><?php echo $xml4->buyer; ?></b> <?php echo $xml4->message; ?></p>
                                <p>2 days ago</p>
                            </div>
                        </div>
                       </div>
                   </div>
                </div>
            </section>
        </div>
    </body>
</html>