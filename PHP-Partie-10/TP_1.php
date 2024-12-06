




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f5e9;
            margin: 50px 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: #ffffff;
            border: 2px solid #4caf50;
            border-radius: 8px;
            padding: 20px 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        h2 {
            text-align: center;
            color: #388e3c;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #2e7d32;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #c8e6c9;
            border-radius: 4px;
            font-size: 14px;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #4caf50;
            outline: none;
            box-shadow: 0 0 3px rgba(76, 175, 80, 0.5);
        }

        button {
            width: 100%;
            padding: 10px 15px;
            border: none;
            background-color: #4caf50;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Formulaire d'Inscription</h2>

        <?php

if (
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['date_naissance']) &&
    isset($_POST['pays_naissance']) &&
    isset($_POST['nationalite']) &&
    isset($_POST['adresse']) &&
    isset($_POST['email']) &&
    isset($_POST['telephone']) &&
    isset($_POST['diplome']) &&
    isset($_POST['pole_emploi']) &&
    isset($_POST['badges']) &&
    isset($_POST['codecademy']) &&
    isset($_POST['superhero']) &&
    isset($_POST['hack']) &&
    isset($_POST['experience']) &&
    !empty($_POST['nom']) &&
    !empty($_POST['prenom']) &&
    !empty($_POST['date_naissance']) &&
    !empty($_POST['pays_naissance']) &&
    !empty($_POST['nationalite']) &&
    !empty($_POST['adresse']) &&
    !empty($_POST['email']) &&
    !empty($_POST['telephone']) &&
    !empty($_POST['diplome']) &&
    !empty($_POST['pole_emploi']) &&
    !empty($_POST['badges']) &&
    !empty($_POST['codecademy']) &&
    !empty($_POST['superhero']) &&
    !empty($_POST['hack']) &&
    !empty($_POST['experience'])
) {

    echo "<div>Nom: " . htmlspecialchars($_POST['nom']) . "</div>";
    echo "<div>Prénom: " . htmlspecialchars($_POST['prenom']) . "</div>";
    echo "<div>Date de naissance: " . htmlspecialchars($_POST['date_naissance']) . "</div>";
    echo "<div>Pays de naissance: " . htmlspecialchars($_POST['pays_naissance']) . "</div>";
    echo "<div>Nationalité: " . htmlspecialchars($_POST['nationalite']) . "</div>";
    echo "<div>Adresse: " . htmlspecialchars($_POST['adresse']) . "</div>";
    echo "<div>Email: " . htmlspecialchars($_POST['email']) . "</div>";
    echo "<div>Téléphone: " . htmlspecialchars($_POST['telephone']) . "</div>";
    echo "<div>Diplôme: " . htmlspecialchars($_POST['diplome']) . "</div>";
    echo "<div>Numéro Pôle Emploi: " . htmlspecialchars($_POST['pole_emploi']) . "</div>";
    echo "<div>Nombre de badges: " . htmlspecialchars($_POST['badges']) . "</div>";
    echo "<div>Liens Codecademy: " . htmlspecialchars($_POST['codecademy']) . "</div>";
    echo "<div>Super Héros/Héroïne: " . htmlspecialchars($_POST['superhero']) . "</div>";
    echo "<div>Hack: " . htmlspecialchars($_POST['hack']) . "</div>";
    echo "<div>Expérience en programmation: " . htmlspecialchars($_POST['experience']) . "</div>";

?>





<?php
}
else {
?>
    <form action="" method="post">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="date_naissance">Date de naissance</label>
            <input type="date" id="date_naissance" name="date_naissance" required>

            <label for="pays_naissance">Pays de naissance</label>
            <input type="text" id="pays_naissance" name="pays_naissance" required>

            <label for="nationalite">Nationalité</label>
            <input type="text" id="nationalite" name="nationalite" required>

            <label for="adresse">Adresse</label>
            <input type="text" id="adresse" name="adresse" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="telephone">Téléphone</label>
            <input type="tel" id="telephone" name="telephone" required>

            <label for="diplome">Diplôme</label>
            <select id="diplome" name="diplome" required>
                <option value="">Sélectionnez</option>
                <option value="sans">Sans</option>
                <option value="bac">Bac</option>
                <option value="bac+2">Bac+2</option>
                <option value="bac+3">Bac+3 ou supérieur</option>
            </select>

            <label for="pole_emploi">Numéro Pôle Emploi</label>
            <input type="text" id="pole_emploi" name="pole_emploi" required>

            <label for="badges">Nombre de badges</label>
            <input type="number" id="badges" name="badges" min="0" required>

            <label for="codecademy">Liens Codecademy</label>
            <input type="url" id="codecademy" name="codecademy" placeholder="https://">

            <label for="superhero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
            <textarea id="superhero" name="superhero" rows="4" required></textarea>

            <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
            <textarea id="hack" name="hack" rows="4" required></textarea>

            <label for="experience">Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
            <textarea id="experience" name="experience" rows="4" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
<?php   
};
?>
        
    </div>
</body>
</html>
