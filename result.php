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
    <div class="base">
        <table border='0' width='100%' cellpadding="10">
            <tr><td>
                    <?php
                    echo $nom = $_POST['nom']."<br>";
                    echo $prenom = $_POST['prenom']."<br>";
                    echo $age = $_POST['age']."<br>";
                    echo $tel = $_POST['tel']."<br>";
                    echo $adresse = $_POST['adresse']."<br>";
                    echo $mail = $_POST['mail']."<br>";
                    $_SESSION = $_POST;
                    ?>
            <td><img src="img/profil.jpg" class="picture"/>
            <tr><td><td>
        </table>
        <table border="0" width='100%' cellpadding="10">
            <tr><td><h3>Formation</h3></tr>
            <tr><td><?php echo $_POST['job']."<br>";?></tr>
            <tr><td><h3>Compétences</h3></tr>
            <tr><td><?php echo $_POST['skills']."<br>";?></tr>
            <tr><td><h3>Langues</h3></tr>
            <tr><td><?php echo $_POST['lang']."<br>";?></tr>
            <tr><td><h3>Expériences professionnelles</h3></tr>
            <tr><td><?php echo $_POST['exp']."<br>";?></tr>
        </table>
        <a href="templateCV.php" class="btn btn-info" role="button">Choisir un Template pour mon CV</a>
<!--        <a href="CVPDF.php" class="btn btn-info" role="button">Choisir un Template pour mon CV</a>-->
    </div>

</body>
</html>