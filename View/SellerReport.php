<?php
    session_start();
    include '../Controller/Report_text_file.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Report</title>
        <link rel="stylesheet" href="../Model/css/report.css?v<?php echo time(); ?>">

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
                    <div class="reportfullbody">
                         <div class="reportheading">
                             <h2>New Message</h2>
                         </div>
                         <div class="reportbody">
                             <form action="" method="post" enctype="multipart/form-data">
                                 <div class="reportto">
                                     <input type="email" name="useremail" placeholder="To">
                                 </div>
                                 <div class="reportsub">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                                <div class="reportmainbody">
                                    <textarea name="message" name="message" rows="10" cols="30" placeholder="Start writting">

                                    </textarea>
                                </div>
                                <div class="reportsendbtn">
                                    <input type="submit" name="messagesendbtn" value="Send">
                                </div>
                             </form>
                         </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>