<?php


$connection = mysqli_connect('localhost', 'root', '', 'etudiantgit');
if(isset($_POST['send'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];
$request = "insert into etudiantgrt(nom, prenom, matricule) values('$nom', '$prenom', '$matricule')";
mysqli_query($connection, $request);
header('location:formulaire.php');

}else{
    echo('entrez les valeurs');
}

?>
