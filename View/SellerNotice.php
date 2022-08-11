<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Notice</title>
        <link rel="stylesheet" href="../Model/css/notice.css?v<?php echo time(); ?>">

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
                    <div class="noticearea">
                        <div class="noticeheading">
                            <h2>Notice</h2>
                        </div>
                            <div class="notice">
                                <div class="singlenotice">
                                    <div class="noticedate">
                                        <p>05</p>
                                        <p>JUNE</p>
                                        <p>2022</p>
                                    </div>
                                    <div class="noticebody">
                                        <p class="noticetitle">Nature Conferences- Technologies for Neuroengineering 2022</p>
                                        <p>The meeting will discuss exciting advances in the design, implementation, and clinical translation of technology for interfacing <a href="#">More</a></p>
                                    </div>
                             </div>
                             <div class="singlenotice">
                                <div class="noticedate">
                                    <p>25</p>
                                    <p>MAY</p>
                                    <p>2022</p>
                                </div>
                                <div class="noticebody">
                                    <p class="noticetitle">Nature Conferences- Technologies for Neuroengineering 2022</p>
                                    <p>The meeting will discuss exciting advances in the design, implementation, and clinical translation of technology for interfacing <a href="#">More</a></p>
                                </div>
                         </div>
                         <div class="singlenotice">
                            <div class="noticedate">
                                <p>21</p>
                                <p>MAY</p>
                                <p>2022</p>
                            </div>
                            <div class="noticebody">
                                <p class="noticetitle">Nature Conferences- Technologies for Neuroengineering 2022</p>
                                <p>The meeting will discuss exciting advances in the design, implementation, and clinical translation of technology for interfacing <a href="#">More</a></p>
                            </div>
                     </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>