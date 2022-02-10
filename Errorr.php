<?php
//Récupère l'id de l'url et le met dans une variable
$page = $_GET['page'];

echo $page;

header('refresh: 10; Location: ./'.$page.'.php');

?>
<!doctype html>
<html dir="ltr" lang="fr">
<head>
    <meta charset="utf-8">
    <title>1</title>
</head>
<body>
    <h1>tu as perdu sa mère</h1>
</body>
</html>