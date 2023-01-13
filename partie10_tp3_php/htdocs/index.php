<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

function afficher_portrait($portrait) {
  echo "<table>";
  echo "<tr><th>Nom</th><td>" . $portrait['name'] . "</td></tr>";
  echo "<tr><th>Prénom</th><td>" . $portrait['firstname'] . "</td></tr>";
  echo "<tr><th>Portrait</th><td><img src='" . $portrait['portrait'] . "'></td></tr>";
  echo "</table>";
}

afficher_portrait($portrait1);
afficher_portrait($portrait2);
afficher_portrait($portrait3);
afficher_portrait($portrait4);