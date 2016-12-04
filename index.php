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
                <h1>Générateur de CV</h1>
                <form method='post' action='result.php'>
<!--                <form method='post' action='CVPDF.php'>-->
                    <div class="form-group">
                        <label for="nom">Nom:</label><input id="nom" type='text' name='nom' class="form-control" placeholder="Nom" required/>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom:</label><input type='text' name='prenom' class="form-control" placeholder="Prénom" required/>
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label><input type='number' name='age' class="form-control" placeholder="Age" size="2" maxlength="2" required/>
                    </div>
                    <div class="form-group">
                        <label for="tel">Téléphone:</label><input type='text' name='tel' class="form-control" placeholder="N° de téléphone" size="10" maxlength="10" required/>
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse:</label><input name='adresse' class="form-control" placeholder="Adresse" required/>
                    </div>
                    <div class="form-group">
                        <label for="mail">Email:</label><input type="email" name="mail" size="20" maxlength="40" id="email" class="form-control" placeholder="Email" required/>
                    </div>
                    <div class="form-group">
                        <label for="formation">Formation:</label><input name='job' class="form-control" placeholder="Job" required/>
                    </div>
                    <div class="form-group">
                        <label for="skills">Compétences:</label><textarea cols='50' rows='1' name='skills' class="form-control" placeholder="Compétences" required/></textarea>
                    </div>
                    <div class="form-group">
                        <label for="lang">Langues:</label><textarea cols='50' rows='1' name='lang' class="form-control" placeholder="Langues" required/></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exp">Expériences professionnelles:</label><textarea cols='50' rows='1' name='exp' class="form-control" placeholder="Expériences" required/></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                    <button type="reset" class="btn">Recommencer</button><br>
                </form>
        </div>
</body>
</html>