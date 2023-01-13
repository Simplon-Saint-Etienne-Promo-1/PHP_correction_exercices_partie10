<form method="post" action="">   
    <label for="civilité">Civilité:</label><br>
    <select id="civilité" name="civilité">
        <option value="mr" <?php if (isset($_POST["civilite"]) && $_POST["civilite"] == "monsieur") echo "selected"; ?>>Mr</option>
        <option value="mme" <?php if (isset($_POST["civilite"]) && $_POST["civilite"] == "mme") echo "selected"; ?>>Mme</option>
    </select><br>
    <label for="nom">Nom:</label><br>
    <input type="text" id="nom" name="nom" value="<?php if (isset($_POST["nom"])) echo $_POST["nom"]; ?>"><br>
    <label for="prenom">Prénom:</label><br>
    <input type="text" id="prenom" name="prenom" value="<?php if (isset($_POST["prenom"])) echo $_POST["prenom"]; ?>"><br>
    <label for="age">Age</label><br>
    <input type="text" name="age" value="<?php if (isset($_POST["age"])) echo $_POST["age"]; ?>"/><br>
    <label for="societe">Société</label><br>
    <input type="text" id="societe" name="societe"value="<?php if (isset($_POST["societe"])) echo $_POST["societe"]; ?>"/><br>
    <input type="submit" value="Envoyer">
</form>

<?php
if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["age"]) && isset($_POST["societe"]) && isset($_POST["civilité"])) {
  // Récupérer les valeurs des champs du formulaire
    $civilite = $_POST['civilité'];
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $age = $_POST["age"];
  $societe = $_POST["societe"];

  // Afficher les informations saisies par l'utilisateur
  echo "Civilité: $civilite<br>";
  echo "Nom: $nom<br>";
  echo "Prénom: $prenom<br>";
  echo "Age: $age<br>";
  echo "Société: $societe<br>";
}
?>