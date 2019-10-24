<?php
/**
 * Created by PhpStorm.
 * User: dylan
 * Date: 2019-10-24
 * Time: 12:56
 */
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
        <form id="regForm" action="">

            <h1>Formulaire d'inscription :</h1>

            <!-- One "tab" for each step in the form: -->
            <div class="tab">Mon identité
                <p><input placeholder="Prénom" oninput="this.className = ''"></p>
                <p><input placeholder="Nom" oninput="this.className = ''"></p>
                <p><input placeholder="Université" oninput="this.className = ''"></p>
                <p><input placeholder="Matière enseignée" oninput="this.className = ''"></p>
                <p><input placeholder="mail" oninput="this.className = ''"></p>
                <p><input placeholder="téléphone" oninput="this.className = ''"></p>
            </div>

            <div class="tab">Mon alimentation
                <p><input placeholder="Régime alimentaire spécifique" oninput="this.className = ''"></p>
                <p><input placeholder="Allergies" oninput="this.className = ''"></p>
            </div>

            <div class="tab">Mes sorties
                <p><input placeholder="remplir" oninput="this.className = ''"></p>
                <p><input placeholder="remplir" oninput="this.className = ''"></p>
                <p><input placeholder="remplir" oninput="this.className = ''"></p>
            </div>

            <div class="tab">Mon récapitulatif

            </div>

            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>

            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>

        </form>

        <script src="script.js"></script>
    </body>
</html>
