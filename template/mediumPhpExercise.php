<?php
ob_start();
include 'exerciceTheme.php';
require '../Service/GenerateExerciceList.php';

const NUMBER_OF_EXERCISES = 32;
include "runPhpCode.php";
?>

<h2 class="lead m-5">
    Je vous propose ci-dessous 16 exercices de niveau moyen en PHP,
    qui mêlent programmation orientée objet et procédurale. Que vous soyez débutant ou que vous cherchiez
    à vous perfectionner en PHP, ces exercices peuvent vous aider à améliorer vos compétences dans ce langage.
    Je vous encourage à les essayer et à expérimenter avec votre propre code pour approfondir vos connaissances en PHP.
</h2>

<hr>

<div class="row text-center">
    <?php
        $generateExerciseList = new \Service\GenerateExerciceList();
        $generateExerciseList->render(17, NUMBER_OF_EXERCISES);
    ?>
</div>
<hr>

<main class="mt-5">
    <section>
        <?php
        // Votre classe ici

        exercice(17,
            "Créez une classe 'Personne' avec des propriétés 'nom', 'prénom' et 'âge' et des méthodes pour afficher et modifier ces propriétés.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre classe ici

        exercice(18,
            "Créez une classe 'CompteBancaire' avec des propriétés 'titulaire' (de type Personne), 'solde' et 'devise'. Ajoutez des méthodes pour effectuer des dépôts, des retraits et afficher le solde actuel.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici
        exercice(19, "Créez une classe 'Voiture' avec des propriétés 'marque', 'modèle', 'année' et 'kilométrage'. Ajoutez une méthode pour calculer l'âge de la voiture et une autre pour augmenter le kilométrage.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(20, "Créez une classe 'Rectangle' avec des propriétés 'longueur' et 'largeur'. Ajoutez des méthodes pour calculer la surface et le périmètre du rectangle.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(21, "Créez une classe 'Cercle' avec une propriété 'rayon'. Ajoutez des méthodes pour calculer la surface et le périmètre du cercle. Utilisez la constante M_PI pour représenter la valeur de pi.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(22, "Créez une classe abstraite 'Animal' avec des propriétés 'nom' et 'âge' et des méthodes abstraites 'parler' et 'seDéplacer'. Créez des classes 'Chien' et 'Chat' qui héritent de la classe 'Animal' et implémentent les méthodes abstraites.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(23, "Créez une interface 'Travaillable' avec une méthode 'travailler'. Créez des classes 'Employé' et 'Robot' qui implémentent cette interface.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(24, "Créez une classe 'Panier' qui peut contenir des objets 'Produit'. Ajoutez des méthodes pour ajouter des produits au panier, supprimer des produits du panier et calculer le montant total du panier.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(25, "Créez une fonction qui prend un tableau associatif en paramètre et retourne un tableau contenant la clé ayant la plus grande valeur et cette valeur.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(26, "Créez une fonction qui prend une chaîne de caractères en paramètre et retourne le nombre de mots dans la chaîne.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(27, "Créez une fonction qui prend deux dates au format 'aaaa-mm-jj' en paramètres et retourne le nombre de jours qui les séparent.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(28, "Créez une fonction qui prend un tableau d'entiers en paramètre et retourne la somme des entiers impairs présents dans le tableau.",

            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(29,
            "Créez une fonction qui prend un tableau en paramètre et retourne un nouveau tableau contenant les éléments uniques du tableau initial (suppression des doublons).",

            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(30,
            "Créez une fonction qui prend une chaîne de caractères en paramètre et retourne la chaîne inversée.",

            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(31,
            "Créez une fonction qui prend un tableau de chaînes de caractères en paramètre et retourne un tableau trié par ordre alphabétique et par longueur de chaîne (du plus court au",

            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(32,
            "TEST",

            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
</main>

<?php
$content = ob_get_clean();
include 'base.php';

