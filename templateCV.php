<?php
session_start();
?>
<html>
<head>
    <title>Générateur de CV</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/cv.css" type="text/css" media="all">
</head>
<body>
<div class="col-sm-12 col-md-12">
    <div class="base">
        <h1>Choisissez votre de template</h1>
        <h6>Cliquez sur l'image afin de générer ce template en PDF</h6>
        <a href="CVPDF1.php"><img src="img/Resume_Template1.1.jpg" class="template_preview"></a>
        <a href="CVPDF2.php"><img src="img/Resume_Template2.2.jpg" class="template_preview"></a>
        <a href="CVPDF3.php"><img src="img/Resume_Template3.3.jpg" class="template_preview"></a>
        <a href="CVPDF4.php"><img src="img/Resume_Template4.4.jpg" class="template_preview"></a>
        <a href="CVPDF5.php"><img src="img/Resume_Template5.5.jpg" class="template_preview"></a>
    </div>
</div>
</body>
</html>