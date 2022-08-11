<?php
    $XMLData1 =
    "<?xml version='1.0' encoding='UTF-8'?>
    <notification>
        <buyer>Nafis Ulfat</buyer>
        <message>accept your selling request.</message>
    </notification>";

    $XMLData2 =
    "<?xml version='1.0' encoding='UTF-8'?>
    <notification>
        <buyer>Shafiur Rahman</buyer>
        <message>received your product.</message>
    </notification>";

    $XMLData3 =
    "<?xml version='1.0' encoding='UTF-8'?>
    <notification>
        <buyer>Rakibul Hasan</buyer>
        <message>received your product.</message>
    </notification>";

    $XMLData4 =
    "<?xml version='1.0' encoding='UTF-8'?>
    <notification>
        <buyer>Jededul Azim</buyer>
        <message>reject your selling request.</message>
    </notification>";

    $xml1=simplexml_load_string($XMLData1) or die("Error: Cannot create object");
    $xml2=simplexml_load_string($XMLData2) or die("Error: Cannot create object");
    $xml3=simplexml_load_string($XMLData3) or die("Error: Cannot create object");
    $xml4=simplexml_load_string($XMLData4) or die("Error: Cannot create object");

?>