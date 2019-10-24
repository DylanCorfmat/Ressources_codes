<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css" />
        <title>Test Javascript</title>
    </head>
    <body>
    <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')">Tout voir</button>
        <button class="btn" onclick="filterSelection('1')">Logements</button>
        <button class="btn" onclick="filterSelection('2')">Restauration</button>
        <button class="btn" onclick="filterSelection('3')">Sorties</button>
        <button class="btn" onclick="filterSelection('4')">Culture</button>
    </div>



        <?php
        /**
         * Created by PhpStorm.
         * User: dylan
         * Date: 2019-10-23
         * Time: 22:52
         */

        require ('connexion_bdd.php');

        ?>
<div class="container">

        <?php

        $affichage_tout = $bdd->query('SELECT * FROM contenu');
        while ($retour = $affichage_tout->fetch()) {
            ?>
            <div class="filterDiv <?php echo $retour['id_category'] ?>"><?php echo $retour['titre']; ?></div>
    <?php
        }

        ?>
</div>
    </body>
    <script>filterSelection("all")
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        // Show filtered elements
        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        // Hide elements that are not selected
        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current control button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
</html>
