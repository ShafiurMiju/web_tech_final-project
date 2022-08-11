<?php
    session_start();
	include '../Controller/chatWrite.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Chat</title>
        <link rel="stylesheet" href="../Model/css/chat.css?v<?php echo time(); ?>">
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
                        <h1>Chat with customer service</h1>
                    </div>
                    <div class="srch">
                        <form action="" method="post" enctype="multipart/form-data">
                            <input class="srchbox" type="text" name="text" placeholder="Typing">
                            <input id="srch" class="srchbtn" type="submit" name="Srchbtn" value="Send">     
                            <input id="srch" class="Rfbtn" type="submit" name="Rfbtn" value="Refresh">     
                         </form>      
                    </div>
                    <div class="chat">
                        <?php
                            include '../Controller/chatRead.php';
                        ?>
                    </div>
                        
                </div>
            </section>
        </div>
    </body>
</html>