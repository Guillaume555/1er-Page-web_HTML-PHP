<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement du formulaire</title>
</head>
<body>
    <form method="POST" action="">
        <h2>Adresse client</h2>
            Nom : <?php echo $Nom = $_POST['Nom'];?><br>
            Prénom : <?php echo $Prénom = $_POST['Prénom'];?><br>
            Adresse : <?php echo $Adresse = $_POST['Adresse'];?><br>
            Code postal : <?php echo $code_postal = $_POST['code_postal'];?><br>
            Ville : <?php echo $Ville = $_POST['Ville'];?><br>
        <h2>S'abonner</h2>
            Champ caché : <?php echo $_SERVER['HTTP_USER_AGENT'];?>
    </form>
</body>
</html>
