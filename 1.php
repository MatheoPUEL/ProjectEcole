<?php
session_start();
// Definition du mot de passe juste le mot de passe doit être forcement en minuscule vu que plus tard on transforme l'inputde l'utilisateur en minuscule.

$mot_de_passe = 'test';

//recupère les donnes de l'input
$input = htmlspecialchars($_POST['input']);
//met tt les caractères minuscule

// Verifie si l'input existe et que l'input est bien egala mot de passe.
if(isset($input) AND $input != "") {
    if($input === $mot_de_passe) {
        $validation = "";
        $_SESSION['1pp'];
    }else{

        header("Location: errorr.php?page=1");
    }

}

?>
<!doctype html>
<html dir="ltr" lang="fr">
<head>
    <meta charset="utf-8">
    <title>1</title>
</head>
<body>
    <form method="post">
        <input type="text" name="input">
        <button type="submit" >Valider</button>

        <?php
        if (isset($validation)){
            ?>
            <h3>Le mot de passe est le bon  <a href="">Niveau suivant</a></h3>
            <?php
        }
        ?>
        
    </form>
</body>
</html>