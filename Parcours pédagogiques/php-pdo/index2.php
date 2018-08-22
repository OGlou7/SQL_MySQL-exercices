<?php
try
{
    // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : '.$e->getMessage());
}

  // Affichage
$Villes = $bdd->query('SELECT * FROM Météo');

// ADD
if (isset($_POST["submit"])) {
  $add= $bdd->prepare('INSERT INTO Météo(ville, haut, bas) VALUES (:ville, :haut, :bas)');
  $add->bindParam(':ville', $ville);
  $add->bindParam(':haut', $haut);
  $add->bindParam(':bas', $bas);
  $ville=$_POST['ville'];
  $haut=$_POST['haut'];
  $bas=$_POST['bas'];
  $add->execute();
  header("refresh:0");
};

//Delete
 if (isset($_POST["button"])) {
   foreach ($_POST["checkbox"] as $todel) {
     $remove= $bdd->prepare('DELETE FROM Météo WHERE ville=:ville');
     $remove->bindParam(':ville', $ville);
     $ville=$todel;
     $remove->execute();
     header('refresh:0');
   }
 };
 ?>


 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
 <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="pdo.css">
     <title>Ex1-PDO</title>
 </head>
 <body>
 				<form action="index2.php" method="post">
 					<label>Ville:</label> <input type="text" name="ville" id="ville" value="">
 					<label>T° max:</label> <input type="number" name="haut" id="haut" value="">
 					<label>T° min:</label> <input type="number" name="bas" id="bas" value="">
 					<input type="submit" name="submit" value="submit">
         <table>
             <tr>
                 <th>Ville</th>
                 <th>Haut</th>
                 <th>Bas</th>
             </tr>
             <<?php
             while($donnees=$Villes->fetch()) {
              ?>
              <tr>
                <td>
                  <input type="checkbox" name="checkbox[]" value="<?php
                   echo $donnees['ville'];?>">
                </td>
                <td>
                  <?php
                    echo $donnees['ville'];
                   ?>
                </td>
                <td>
                  <?php
                  echo $donnees['haut'];
                   ?>
                </td>
                <td>
                  <?php
                  echo $donnees['bas'];
                   ?>
                </td>
              </tr>
            <?php
            }
            ?>
         </table>
         <input type="submit" name="button" value="delete">
     </form>
 </body>
 </html>
