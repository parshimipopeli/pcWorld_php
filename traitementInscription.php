<?php
include('includes/connect.php');
if (isset($_POST['submit'])) {
    $warning = "";
    $nom = htmlspecialchars($_POST['firstName']);
    $prenom = htmlspecialchars($_POST['lastName']);
    $adresse = htmlspecialchars($_POST['adress']);
    $dateNaissance = htmlspecialchars($_POST['birthDate']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['password']);
    $verifMdp = htmlspecialchars($_POST['verifPassword']);

    if (!filter_var($mdp, FILTER_VALIDATE_EMAIL)) {
        $warning = "votre email n 'est pas valide";
    }

    if (!isset($nom) && !isset($prenom) && !isset($adresse) && !isset($dateNaissance) && !isset($email) && !isset($mdp) && !isset($verifMdp)) {
        $warning = "Tout les champs doivent être remplie";
    } else {
        $req = $bdd->prepare("SELECT password FROM contacts WHERE password = '$mdp'");
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $req->execute();
        if ($req->rowCount() > 0) {
            $warning = "L'émail est déja inscrit";
        } else {
            if ($_POST['password'] == $_POST['verifPassword']) {
                $req = $bdd->prepare("INSERT INTO contacts  (firstName, lastName, adress, birthDate, email, password) VALUES ('$nom', '$prenom', '$adress', '$dateNaissance', '$email', '$mdp')");
                $req->execute();
                $warning = "felicitation pour votre inscription";
            } else {
                $warning = ' les mots de passes ne sont  pas identiques';
            }
        }
    }
}
var_dump($_POST);

// header('LOCATION:index.php');

?>

