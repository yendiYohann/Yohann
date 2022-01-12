<?php
session_start();
try{
    $bdd = new PDO('mysql:host=localhost;dbname=Exercices','root','');
}
catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}
try{
    $id= $_GET["id"];
    $_SESSION["id"] = $id;
    //echo $_SESSION['id'];
}
catch(Exception $e){
    echo "Error: " . $e->getMessage();
}
try{
    $reponse = $bdd->query("SELECT * FROM Personnes where id = $id");
    
}
catch(PDOException $e){
    echo "Error".$e->getMessage();
}
$donnees = $reponse->fetch()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Modifier.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Modifier</title>
</head>
<body>
    <center>
    <form action="Traitement_modifier.php" method="post">
        <input type="text" id="Nom" name="Nom1" placeholder="Nom" value="<?php echo $donnees["Nom"] ; ?>"required pattern="[a-z][z-a]" title="Vous devez utiliser des lettres"><br/><br/>
            <input type="text" id="Prenom" name="Prenom1" placeholder="Prenom" value="<?php echo $donnees["prenom"] ; ?>" required="required"><br/><br/>
            <input type="mail" id="mail" name="Mail1" placeholder="Mail" value="<?php echo $donnees["Mail"] ; ?>" required="required"><br/><br>
            <input type="password" id="Password" name="Password1" placeholder="Password" required="required"><br/><br/>
            <input type="radio" id="homme" name="sex1" value="masculin" required="required">Man
            <input type="radio" name="sex1" id="femme" value="feminin" required="required">Woman<br/><br/>
            <select name="Liste_Ecole1" id="Liste" value="<?php echo $donnees["Liste_Ecole"] ; ?>">
                <optgroup label="Lomé" required="required">
                    <option value="Mariame">Mariame</option>
                    <option value="Lasource">Lasource</option>
                </optgroup>
                <optgroup label="Atapkame">
                    <option value="NDA">NDA</option>
                    <option value="Saint Albert ">Saint Albert</option>
                </optgroup>
            </select><br/><br/>
            <textarea name="Commentaire1" id="message" cols="30" rows="10" value="<?php echo $donnees["commentaire"] ; ?>" placeholder="Entrer un commentaire"></textarea><br/><br/>
            <input type="file" id="file" name="file1" value="<?php echo $donnees["files"] ; ?>"><br/><br/>
            <input type="checkbox" name="check1" id="check" value="Oui" required="required" checked="checked">Je suis majeur<br/><br/>
            <input type="submit" id="Envoi" name="submit1" value="Enregistrer" class="btn btn-primary">
            <input type="reset" id="reset" value="Reset" class="btn btn-danger"> </br><br>
    </form>
    <a href="Site_web.php" id="h2">Annulé</a>
    </center>
</body>
</html>