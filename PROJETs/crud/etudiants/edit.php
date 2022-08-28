<!--édition de données-->

<?php
require('connect.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $update = "SELECT  *  FROM etudiant WHERE id = ?";
    $ps = $pdo->prepare($update);
    $ps->execute([$id]);
    $etudiant = $ps->fetch();
    $nom = $etudiant['nom'];
    $prenom = $etudiant['prenom'];
    $sexe = $etudiant['sexe'];
}
?>
<!DOCTYPE html>
<html lang="fr">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 
</head>
 
<body>
    <div class="container">
        <form action="update.php" method="post">
            <div class="form-group">
                <input class="form-control" type="hidden" value="<?= $id  ?>" name="id" id="">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" value="<?= $nom  ?>" name="nom" id="">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" value="<?= $prenom  ?>" name="prenom" id="">
            </div>
            <div class="form-group">
                <select class="form-control" name="sexe" id="">
                    <option selected value="M">Masculin</option>
                    <option value="F">Feminin</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
</body>
 
</html>