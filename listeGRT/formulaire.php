<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTE GRT</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
</head>
<body>
  <div class="titre">
LISTE DEFINITIVE <span>GIT(GRT )</span> NIVEAU 3
</div>
<style>
  .titre{
  text-align: center;
  font-weight: bolder;
  font-size: 25px;
  }
  span{
   color:green;
   font-weight: bolder;
  }
</style>
<br>
<div class="soustitre">
  veillez remplir vos informations si et seulement si vous etez étudiant en <span>GIT(GRT)</span>  niveau 3 a l'Ecole Nationale Superieure de Douala, ensuite clicquez sur le bouton <span>"envoyez"</span>  et vous serrez enrégistré automatiquement.
</div>
<style >
.soustitre{
  text-align:center;
}
</style>
<div class="row">
    <form class="col s12" method="POST"  action="target.php" >
      <div class="row">
        <div class="input-field col s6">
        <label for="nom">Nom complet</label> <br>
          <input placeholder="Entrez votre nom complet" id="nom" name="nom" type="text" class="validate"> 
          
        </div></div>
        
          
        
        <div class="row">
        <div class="input-field col s6">
        <label  for="matricule">Matricule</label> <br>
          <input placeholder="Entrez votre matricule" id="matricule" type="text" name="matricule" class="validate">
          
        </div></div>
      <input class="btn btn-success" type="submit"  id="boutton" value="Envoyer" name="send">
      
      
      
     
   

</form>
</div>
    <!--
    <form  method="POST" action="target.php"  >
   <p> <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">
    </p>
    <P>
        <label for="prenpm">Prenom</label>
        <input type="text" name="prenom" id="prenom">
    </P>
    <p>
    <label for="matricule">Matricule</label>
        <input type="text" name="matricule" id="matricule">
    </p>
    <p>
        <input type="submit" value="envoyer" name="send" >
    </p>
    </form>
    -->
  
   
<!--     if(!empty($_POST)){
    isset($_POST["nom"], $_POST["prenom"], $_POST["matricule"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["matricule"])
    $name = strip_tags($_POST["nom"]);
    $prename = strip_tags($_POST["prenom"]);
    $number = strip_tags($_POST["matricule"]);
}
else{
    die("Le formulaire es incomplet");
}
//on se connacte a la base de donnee
require_once "../../includes/connect.php";

//on ecrit la requette
$sql = "INSERT INTO 'etudiant-glo'('nom', 'prenom', 'matricule') VALUES (:nom, :prenom, :matricule)" ;
//on prepare la requette
$query = $db -> prepare($sql);
//on injecte les valeurs
$query -> bindValue(':nom' $name, PDO::PARAM_SPR);
$query -> bindValue(':prenom' $prename, PDO::PARAM_SPR);
$query -> bindValue(':matricule' $number, PDO::PARAM_SPR);
//on execute la requette
$query -> execute()
if(!$query -> execute()){
    die ("une erreur es survenue")
}
//on recupere l'ID DU NO     -->

</body>
</html>