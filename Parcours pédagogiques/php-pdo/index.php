 <!-- PHP JAVASCRIPT -->
<?php
// try
// {
//     // On se connecte à MySQL
//     $bdd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', '');
// }
// catch(Exception $e)
// {
//     // En cas d'erreur, on affiche un message et on arrête tout
//     die('Erreur : '.$e->getMessage());
// }
// // recherche villes
// $qVilles = $bdd->query('SELECT ville FROM Météo');
// $listeVilles = $qVilles->fetch();
// $formMessage = '';
// $ville = '';
// $haut = '';
// $bas = '';
// // si formulaire envoyé
// if (isset($_POST["submit"])) {
//     $ville = ucwords(strtolower($_POST['ville']));
//     $ville = filter_var($ville, FILTER_SANITIZE_STRING);
//     $haut = filter_var($_POST['haut'], FILTER_SANITIZE_NUMBER_INT);
//     $bas = filter_var($_POST['bas'], FILTER_SANITIZE_NUMBER_INT);
//     if ($ville != "" && $haut != "" && $bas != "") {
//         if (strlen($ville) < 10) {
//             // test si ville unique
//             $villeExiste = FALSE;
//             while ($listeVilles = $qVilles->fetch())
//             {
//                 if ($ville == $listeVilles['ville']) {
//                     $villeExiste = TRUE;
//                 }
//             }
//             $tab = array(
//                 ':ville' => $ville,
//                 ':haut' => $haut,
//                 ':bas' => $bas
//             );
//             if (!$villeExiste) {
//                 $sql = "INSERT INTO `Météo` (`ville`, `haut`, `bas`) VALUES (:ville, :haut, :bas)";
//                 $req = $bdd->prepare($sql);
//                 $result = $req->execute($tab);
//                 $formMessage = '<span class="congrats">La ville de  <span class="neutral">' . $ville . '</span> a été rajoutée.</span>';
//             } else {
//                 $sql = "UPDATE `Météo` SET `haut`=:haut, `bas`=:bas WHERE ville=:ville";
//                 $req = $bdd->prepare($sql);
//                 $result = $req->execute($tab);
//                 $formMessage = '<span class="congrats">Les données de <span class="neutral">' . $ville . '</span> ont été modifiées.</span>';
//             }
//         } else {
//             $formMessage = '<span class="warning">Veillez abréger le nom de la ville (max 9 caractères).</span>';
//         }
//     } else {
//         $formMessage = '<span class="warning">Veillez remplir toutes les données.</span>';
//     }
// }
// // si delete confirmé
// if (isset($_POST["delete"])) {
//     while ($listeVilles = $qVilles->fetch())
//     {
//         if (isset($listeVilles['ville'])) {
//             $thisvilles = $listeVilles['ville'];
//             $thisvillesID = str_replace(' ','_',$thisvilles);
//         } else {
//             $thisvilles = '';
//             $thisvillesID = '';
//         }
//         if (isset($_POST[$thisvillesID]) && $thisvilles == $_POST[$thisvillesID]) {
//             // echo $thisTown;
//             $tab = array(
//                 ':ville' => $thisvilles
//             );
//             $sql = "DELETE FROM `Météo` WHERE ville=:ville";
//             $req = $bdd->prepare($sql);
//             $result = $req->execute($tab);
//             $formMessage = $formMessage . '<span class="congrats">La ville de <span class="neutral">' . $thisvilles . '</span> a été supprimée.</span><br>';
//         }
//     }
// }
// $resultat = $bdd->query('SELECT * FROM Météo');
// $donnees = $resultat->fetch();
// $myTable = '';
// while ($donnees = $resultat->fetch())
// {
//     $villes = $donnees['ville'];
//     $villesID = str_replace(' ','_',$villes);
//     $myTable = $myTable . '<tr>';
//     $myTable = $myTable . '<td class="check"><input onclick="toggleCheck()" type="checkbox" id="' . $villesID .'" name="' . $villes .'" value="' . $villes . '"></td>';
//     $myTable = $myTable . '<td class="table">' . $villes . '</td>';
//     $myTable = $myTable . '<td class="table">' . $donnees['haut'] . '</td>';
//     $myTable = $myTable . '<td class="table">' . $donnees['bas'] . '</td>';
//     $myTable = $myTable . '</tr>';
// }
// // fermeture de la connection à la bdd
// if ($bdd) {
//     $bdd = NULL;
// }
?>

<!-- <!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="pdo.css">
    <title>Ex1-PDO</title>
</head>
<body>
				<form action="index.php" method="post">
					<label>Ville:</label> <input type="text" name="ville" id="ville" value="<?= $ville ?>">
					<label>T° max:</label> <input type="number" name="haut" id="haut" value="<?= $haut ?>">
					<label>T° min:</label> <input type="number" name="bas" id="bas" value="<?= $bas ?>">
					<input type="submit" name="submit" value="submit">

    <p><?= $formMessage ?></p>

    <form class="" action="pdo.php" method="post" id="villesListForm">
        <table>
            <tr>
                <td></td>
                <td class="table titre">Ville</td>
                <td class="table titre">Haut</td>
                <td class="table titre">Bas</td>
            </tr>
            <?= $myTable; ?>
            <tr>
                <td></td>
                <td id="Check"></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>

    <script type="text/javascript">
    function toggleCheck() {
        var Check = document.getElementById("Check");
        Check.innerHTML = '<input type="submit" name="delete" value="Delete">';
    }
    </script>

</body>
</html> -->
