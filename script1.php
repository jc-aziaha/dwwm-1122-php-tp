<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Page résultat</title>
  <meta charset="utf-8" />
</head>

<body>
  <h2> Résultat de l'éxécution de script1.php</h2>
    <?php

    if( ! empty($_POST) )
    {
        echo "Il y a des données à récupérer";
    }
    else
    {
      echo "Pourquoi tu as remplacé la méthode du formulaire.";
    }



    // echo "<p>";
    // if(!empty($_POST)) {
    //   $prenom = $_POST['prenom'];
    //   $nom = $_POST['nom'];
    //   echo "hello post";
    //   // echo "Bonjour $prenom $nom";
    // }
    // else {
    //     $prenom = $_GET['prenom'];
    //     $nom = $_GET['nom'];
    //     echo "hello get";
    //     // echo "Bonjour $prenom $nom";
    // }
    // echo "</p>";


    ?>
 </body>
</html>
