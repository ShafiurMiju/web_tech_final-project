<?php
    if (isset($_COOKIE['rememberEmail'])&&isset($_COOKIE['rememberPass'])) {
        $remail=$_COOKIE['rememberEmail'];
        $rpass=$_COOKIE['rememberPass'];
        return true;
    }

?>