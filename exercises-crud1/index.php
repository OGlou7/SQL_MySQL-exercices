<!-- Exercice 1
Afficher tous les clients. -->
<?php
  $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
  $sql="SELECT * FROM clients";
  $requete = $bdd->prepare($sql);
  $requete->execute();
  $exercice1 = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
  </head>
  <body>
    <h1>Exercice 1</h1>
      <table>
        <tr>
          <th>id</th>
          <th>lastName</th>
          <th>firstName</th>
          <th>birthDate</th>
          <th>card</th>
          <th>cardNumber</th>
        </tr>
    <?php
      foreach ($exercice1 as $key => $value) {?>
        <tr>
          <td><?=$value['id']?></td>
          <td><?=$value['lastName']?></td>
          <td><?=$value['firstName']?></td>
          <td><?=$value['birthDate']?></td>
          <td><?=$value['card']?></td>
          <td><?=$value['cardNumber']?></td>
        </tr>
    <?php
      }
    ?>
    </table>
  </body>
</html>

<!-- Exercice 2
Afficher tous les types de spectacles possibles. -->
<?php
  $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
  $sql="SELECT showTypes.type AS type,genres.genre AS genre FROM showTypes LEFT OUTER JOIN genres ON genres.showTypesId=showTypes.id";
  $requete = $bdd->prepare($sql);
  $requete->execute();
  $exercice2 = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <h1>Exercice 2</h1>
    <table>
      <tr>
        <th>type</th>
        <th>genre</th>
      </tr>
      <?php
      foreach ($exercice2 as $key => $value) {?>
      <tr>
        <td><?=$value['type']?></td>
        <td><?=$value['genre']?></td>
      </tr>
      <?php
      }
      ?>
    </table>
  </body>
</html>


<!-- Exercice 3
Afficher les 20 premiers clients. -->

<?php
  $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
  $sql="SELECT * FROM clients LIMIT 20";
  $requete = $bdd->prepare($sql);
  $requete->execute();
  $exercice3 = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <h1>Exercice 3</h1>
      <table>
        <tr>
          <th>id</th>
          <th>lastName</th>
          <th>firstName</th>
          <th>birthDate</th>
          <th>card</th>
          <th>cardNumber</th>
        </tr>
        <?php
        foreach ($exercice3 as $key => $value) {?>
        <tr>
          <td><?=$value['id']?></td>
          <td><?=$value['lastName']?></td>
          <td><?=$value['firstName']?></td>
          <td><?=$value['birthDate']?></td>
          <td><?=$value['card']?></td>
          <td><?=$value['cardNumber']?></td>
        </tr>
        <?php
          }
        ?>
    </table>
  </body>
</html>


<!-- Exercice 4
N'afficher que les clients possédant une carte de fidélité. -->
<?php
  $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
  $sql="SELECT * FROM clients WHERE card=1";
  $requete = $bdd->prepare($sql);
  $requete->execute();
  $exercice4 = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <h1>Exercice 4</h1>
      <table>
      <tr>
        <th>id</th>
        <th>lastName</th>
        <th>firstName</th>
        <th>birthDate</th>
        <th>card</th>
        <th>cardNumber</th>
      </tr>
      <?php
      foreach ($exercice4 as $key => $value) {?>
      <tr>
        <td><?=$value['id']?></td>
        <td><?=$value['lastName']?></td>
        <td><?=$value['firstName']?></td>
        <td><?=$value['birthDate']?></td>
        <td><?=$value['card']?></td>
        <td><?=$value['cardNumber']?></td>
      </tr>
      <?php
      }
      ?>
    </table>
  </body>
</html>

<!-- Exercice 5
Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". -->
<?php
  $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
  $sql="SELECT lastName,firstName FROM clients WHERE lastName LIKE 'M%' ORDER BY lastName ASC";
  $requete = $bdd->prepare($sql);
  $requete->execute();
  $exercice5 = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <h1>Exercice 5</h1>
      <?php
      foreach ($exercice5 as $key => $value) {?>
        Nom : <?=$value['lastName']?><br>
        Prénom : <?=$value['firstName']?><br><br>
      <?php
        }
      ?>
  </body>
</html>
<!-- Les afficher comme ceci :

Nom : *Nom du client*
Prénom : *Prénom du client*
Trier les noms par ordre alphabétique. -->

<!-- Exercice 6
Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure. -->
<?php
  $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
  $sql="SELECT title, performer, date, startTime FROM shows ORDER BY title ASC";
  $requete = $bdd->prepare($sql);
  $requete->execute();
  $exercice6 = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <h1>Exercice 6</h1>
      <?php
      foreach ($exercice6 as $key => $value) {?>
      <?=$value['title']?>
      par <?=$value['performer']?>,
      le <?=$value['date']?>
      à <?=$value['startTime']?>.<br>
      <?php
      }
      ?>
  </body>
</html>
<!-- Exercice 7
Afficher tous les clients comme ceci :

Nom : *Nom de famille du client*
Prénom : *Prénom du client*
Date de naissance : *Date de naissance du client*
Carte de fidélité : *Oui (Si le client en possède une) ou Non (s'il n'en possède pas)*
Numéro de carte : *Numéro de la carte fidélité du client s'il en possède une.* -->
<?php
  $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
  $sql="SELECT * FROM clients";
  $requete = $bdd->prepare($sql);
  $requete->execute();
  $exercice7 = $requete->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <h1>Exercice 7</h1>
    <table>
      <?php
      foreach ($exercice7 as $key => $value) {?>
      <tr>
        Nom : <?=$value['lastName']?><br>
        Prénom : <?=$value['firstName']?><br>
        Date de naissance : <?=$value['birthDate']?><br>
        Carte de fidélité : <?php if($value['card']){echo "Oui<br>Numéro de carte : ".$value['cardNumber']."<br>";
        }else{echo "Non<br>";}?><br>
      </tr>
      <?php
      }
      ?>
    </table>
  </body>
</html>
