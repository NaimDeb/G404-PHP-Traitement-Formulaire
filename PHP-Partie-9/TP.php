<?php 

$joursSemaine = array(
    "Monday" => 1,
    "Tuesday" => 2,
    "Wednesday" => 3,
    "Thursday" => 4,
    "Friday" => 5,
    "Saturday" => 6,
    "Sunday" => 7,
);


$moisChoisi = isset($_POST["mois"]) ? (int)$_POST["mois"] : 0;

$mois = [
    1 => "Janvier",
    2 => "Février",
    3 => "Mars",
    4 => "Avril",
    5 => "Mai",
    6 => "Juin",
    7 => "Juillet",
    8 => "Août",
    9 => "Septembre",
    10 => "Octobre",
    11 => "Novembre",
    12 => "Décembre",
];

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Calendrier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .calendar-container {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 10px;
        width: 100%;
        text-align: center;
        font-family: Arial, sans-serif;
        color: #333;
        }

        .calendar-header div {
            font-weight: bold;
            background-color: #f4f4f4;
            padding: 10px 0;
            border-radius: 5px;
        }

        .calendar-day {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .calendar-day:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .empty-day {
            visibility: hidden;
        }

        .calendar-day.today {
            background-color: #ffdd57;
            font-weight: bold;
            color: #000;
        }
    </style>
</head>
<body>

<div class="form-container">
    <form action="" method="POST">
        <label for="mois">Choisissez un mois :</label>
        <select name="mois" id="mois">
            <?php
            

                foreach ($mois as $numero => $nom) {
                    $selected = ($numero === $moisChoisi) ? 'selected' : '';
                    echo "<option value=\"$numero\" $selected>$nom</option>";
                };
                
            ?>

            
        </select>

        <label for="annee">Choisissez une année :</label>
        <select name="annee" id="annee">
            <?php
                $currentYear = date("Y");

                // Vérifier si une année a été envoyée via POST
                $anneeChoisie = isset($_POST["annee"]) ? (int)$_POST["annee"] : 0;
            
                // Générer les options pour les années
                for ($i = $currentYear - 10; $i <= $currentYear + 10; $i++) {
                    $selected = ($i === $anneeChoisie) ? 'selected' : '';
                    echo "<option value=\"$i\" $selected>$i</option>";
            }
            ?>
        </select>

        <button type="submit">Afficher le calendrier</button>

        <?php 
            if (isset($_POST["mois"] ,$_POST["annee"])){
                
                $strDate = $_POST["annee"] . "-" . $_POST["mois"] . "-01";
                $dateTime = new DateTime($strDate);
                $nextMonth = clone $dateTime;
                $nextMonth = $nextMonth-> modify('+1 month');
                
                $daysInMonth =  $dateTime -> diff($nextMonth) -> days;
                $firstDayInMonth = clone $dateTime;
                $firstDayInMonth  = $firstDayInMonth -> format('l');


        ?>

        <div style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 5px; width: 100%; text-align: center;">
            <div>Lun</div>
            <div>Mar</div>
            <div>Mer</div>
            <div>Jeu</div>
            <div>Ven</div>
            <div>Sam</div>
            <div>Dim</div>
            <?php 

            for ($i=1; $i < $joursSemaine[$firstDayInMonth]; $i++) { 
                echo '<div></div>';
            }

            for ($i=1; $i <= $daysInMonth ; $i++) { 
                echo "<div>{$i}</div>";
            }
            
            ?>
        </div>

                

        <?php     
            };
        
        ?>




    </form>
</div>

</body>
</html>
