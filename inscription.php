<?php
include('./includes/header.php');
?>


<div class="container form-contact shadow-sm ">
                <h1 class="text-center title-contact">Créer un compte</h1>
                <div class="row  ml-0 mr-0 pl-0 pr-0 justify-content-center">
                    <form action="traitementInscription.php" method="POST" class="was-validated">
                        <div class="form-group">
                            <input type="text" id="firstName" class="form-control mb-4 text-center"
                                placeholder="Entrez votre nom" name="firstName" required>
                            <div class="valid-feedback">Valide.</div>
                            <div class="invalid-feedback">Veuillez remplir ce champs.</div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control text-center" id="lastName"
                                placeholder="Enter votre prénom" name="Lastname" required>
                            <div class="valid-feedback">Valide.</div>
                            <div class="invalid-feedback">Veuillez remplir ce champs.</div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control text-center" id="adress"
                                placeholder="Enter votre adresse" name="adress" required>
                            <div class="valid-feedback">Valide.</div>
                            <div class="invalid-feedback">Veuillez remplir ce champs.</div>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control text-center" id="birthDate"
                                placeholder="Enter votre date de naissance" name="birthDate" required>
                            <div class="valid-feedback">Valide.</div>
                            <div class="invalid-feedback">Veuillez remplir ce champs.</div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control text-center" id="email"
                                placeholder="Enter votre adresse mail" name="email" required>
                            <div class="valid-feedback">Valide.</div>
                            <div class="invalid-feedback">Veuillez remplir ce champs.</div>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control text-center" id="password"
                                   placeholder="Enter un mot de passe" name="password" required>
                            <div class="valid-feedback">Valide.</div>
                            <div class="invalid-feedback">Veuillez remplir ce champs.</div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control text-center" id="verifMail"
                                   placeholder="Verification mot de passe" name="verifPassword" required>
                            <div class="valid-feedback">Valide.</div>
                            <div class="invalid-feedback">Veuillez remplir ce champs.</div>
                        </div>
                        <div class="form-group">
                            <button type="submit"  class="btn btn-secondary btn-contact shadow-sm">Envoyer</button>
                        </div>
                    </form>
                </div>
           