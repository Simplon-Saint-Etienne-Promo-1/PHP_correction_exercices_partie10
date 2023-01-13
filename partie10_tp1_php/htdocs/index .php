<form method="post" action="">
  <label for="nom">Nom:</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="prenom">Prénom:</label><br>
  <input type="text" id="prenom" name="prenom"><br>
  <label for="date_naissance">Date de naissance:</label><br>
  <input type="date" id="date_naissance" name="date_naissance"><br>
  <label for="pays_naissance">Pays de naissance:</label><br>
  <input type="text" id="pays_naissance" name="pays_naissance"><br>
  <label for="nationalite">Nationalité:</label><br>
  <input type="text" id="nationalite" name="nationalite"><br>
  <label for="adresse">Adresse:</label><br>
  <input type="text" id="adresse" name="adresse"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="telephone">Téléphone:</label><br>
  <input type="tel" id="telephone" name="telephone"><br>
  <label for="diplome">Diplôme:</label><br>
  <select id="diplome" name="diplome">
    <option value="sans">Sans</option>
    <option value="bac">Bac</option>
    <option value="bac+2">Bac+2</option>
    <option value="bac+3">Bac+3</option>
    <option value="superieur">Supérieur</option>
  </select><br>
  <label for="pole_emploi">Numéro Pôle emploi:</label><br>
  <input type="text" id="pole_emploi" name="pole_emploi"><br>
  <label for="nombre_badge">Nombre de badge:</label><br>
  <input type="number" id="nombre_badge" name="nombre_badge"><br>
  <label for="liens_codecademy">Liens Codecademy:</label><br>
  <input type="url" id="liens_codecademy" name="liens_codecademy"><br>
  <label for="super_hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label><br>
  <textarea id="super_hero" name="super_hero"></textarea><br>
  <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique):</label><br>
  <textarea id="hack" name="hack"></textarea><br>
  <label for="experience_programmation">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label><br>
  <input type="radio" id="oui" name="experience_programmation" value="oui">
  <label for="oui">Oui</label><br>
  <input type="radio" id="non" name="experience_programmation" value="non">
  <label for="non">Non</label><br>
  <br>
  <input type="submit" value="Envoyer">
</form>

<?php
if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["date_naissance"]) && isset($_POST["pays_naissance"]) && isset($_POST["nationalite"]) && isset($_POST["adresse"]) && isset($_POST["email"]) && isset($_POST["telephone"]) && isset($_POST["diplome"]) && isset($_POST["pole_emploi"]) && isset($_POST["nombre_badge"]) && isset($_POST["liens_codecademy"]) && isset($_POST["super_hero"]) && isset($_POST["hack"]) && isset($_POST["experience_programmation"])) {
  // Récupérer les valeurs des champs du formulaire
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $date_naissance = $_POST["date_naissance"];
  $pays_naissance = $_POST["pays_naissance"];
  $nationalite = $_POST["nationalite"];
  $adresse = $_POST["adresse"];
  $email = $_POST["email"];
  $telephone = $_POST["telephone"];
  $diplome = $_POST["diplome"];
  $pole_emploi = $_POST["pole_emploi"];
  $nombre_badge = $_POST["nombre_badge"];
  $liens_codecademy = $_POST["liens_codecademy"];
  $super_hero = $_POST["super_hero"];
  $hack = $_POST["hack"];
  $experience_programmation = $_POST["experience_programmation"];

  // Afficher les informations saisies par l'utilisateur
  echo "Nom: $nom<br>";
  echo "Prénom: $prenom<br>";
  echo "Date de naissance: $date_naissance<br>";
  echo "Pays de naissance: $pays_naissance<br>";
  echo "Nationalité: $nationalite<br>";
  echo "Adresse: $adresse<br>";
  echo "Email: $email<br>";
  echo "Téléphone: $telephone<br>";
  echo "Diplôme: $diplome<br>";
  echo "Numéro Pôle emploi: $pole_emploi<br>";
  echo "Nombre de badge: $nombre_badge<br>";
  echo "Liens Codecademy: $liens_codecademy<br>";
  echo "Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?: $super_hero<br>";
  echo "Racontez-nous un de vos 'hacks' (pas forcément technique ou informatique): $hack<br>";
  echo "Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?: $experience_programmation<br>";
}
?>