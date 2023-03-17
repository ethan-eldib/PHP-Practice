<?php
ob_start();
include 'exerciceTheme.php';
const NUMBER_OF_EXERCISES = 16
?>

<h2 class="lead m-5">
    Je vous propose ci-dessous <?= NUMBER_OF_EXERCISES ?> exercices simples en PHP à essayer.
    Que vous soyez débutant ou que vous cherchiez à vous perfectionner en PHP, ces exercices peuvent vous aider
    à améliorer vos compétences dans ce langage de programmation. Je vous encourage à les essayer et à expérimenter
    avec votre propre code pour approfondir vos connaissances en PHP.
</h2>

<hr>
<div class="row text-center">
    <?php for ($i = 1; $i <= NUMBER_OF_EXERCISES; $i++) { ?>
        <?php if ($i == 1 || $i == 5 || $i == 9 || $i == 13) { ?>
            <div class="col">
        <?php } ?>
        <li class="list-group-item">
            <a href="#exercice<?= $i ?>" class="small link-secondary text-decoration-none">Exercice <?= $i ?></a>
        </li>
        <?php if ($i == 4 || $i == 8 || $i == 12 || $i == NUMBER_OF_EXERCISES) { ?>
            </div>
        <?php } ?>
    <?php } ?>
</div>
<hr>

<main class="mt-5">
    <section>
        <?php
        // Votre fonction ici

        exercice(1,
            "Écrire une fonction PHP qui affiche la date et l'heure actuelles.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(2,
            "Écrire une fonction
                        qui prend une chaîne de caractères en entrée et qui renvoie cette chaîne avec les caractères
                        inversés. Par exemple, si l'entrée est 'Bonjour', la sortie doit être 'ruojnoB'",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(3, "Écrire une fonction
                        qui prend une chaîne de caractères en entrée et qui renvoie true si la chaîne est un palindrome,
                        false sinon. Un palindrome est une chaîne qui peut être lue de gauche à droite ou de droite à gauche
                        sans changer d'ordre. Par exemple, 'radar' est un palindrome.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(4, "Écrire une fonction
                        qui prend deux tableaux en entrée et qui renvoie un nouveau tableau qui contient tous les éléments
                        des deux tableaux sans doublons.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(5, "Écrire une fonction
                        qui prend un tableau d'entiers en entrée et qui renvoie la moyenne de tous les entiers dans le
                        tableau.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(6, "Écrire une fonction
                        qui prend un tableau de chaînes de caractères en entrée et qui renvoie le nombre de chaînes qui ont
                        une longueur supérieure à 5 caractères",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(7, "Écrire une fonction
                        qui prend en entrée un nombre entier et qui renvoie true si ce nombre est un nombre premier, false
                        sinon. Un nombre premier est un nombre qui n'est divisible que par 1 et lui-même",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(8, "Écrire une fonction
                        qui prend un tableau d'entiers en entrée et qui renvoie un nouveau tableau contenant uniquement les
                        nombres pairs.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(9, "Écrire une fonction
                        qui prend une chaîne de caractères en entrée et qui renvoie true si la chaîne est un nombre entier
                        valide, false sinon. Par exemple, '123' est un nombre entier valide, mais 'abc' ne l'est pas",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(10, "Écrire une
                        fonction qui prend un tableau de chaînes de caractères en entrée et qui renvoie le nombre total de
                        caractères dans toutes les chaînes du tableau.",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(11, "Écrire une
                        fonction qui prend un nombre entier en entrée et qui renvoie la somme de tous les nombres impairs de
                        1 à ce nombre. Par exemple, si l'entrée est 5, la sortie doit être 9 (1 + 3 + 5).",
            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(12, "Écrire une
                        fonction qui prend un tableau d'objets en entrée et qui trie le tableau par ordre croissant en
                        utilisant l'une des propriétés de l'objet comme clé de tri. Par exemple, si le tableau contient des
                        objets avec une propriété 'prix', la fonction doit trier le tableau par ordre croissant des
                        prix.",

            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(13,
            "Écrire une fonction 
                    qui prend une phrase en entrée et remplace toutes les occurrences d'un certain caractère par un autre caractère. 
                    Par exemple, si on veut remplacer tous les 'a' par des 'b' dans la phrase \"banana\", la fonction doit renvoyer \"bbnbnb\"",

            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(14,
            "Écrire une
                        fonction qui prend un tableau d'objets en entrée et qui renvoie un tableau contenant uniquement les
                        objets qui ont une propriété spécifique avec une valeur donnée. Par exemple, si le tableau contient
                        des objets avec une propriété 'couleur', la fonction doit renvoyer un tableau contenant uniquement
                        les objets avec une couleur spécifique.",

            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(15,
            "Écrire un script PHP 
                        qui ouvre un fichier texte et affiche son contenu sur la page web. 
                        Le nom du fichier doit être saisi par l'utilisateur dans un formulaire HTML",

            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
    <section class="mt-5">
        <hr>
        <?php
        // Votre fonction ici

        exercice(16,
            "Écrire un script PHP qui crée un fichier, y ajoute des données et les lit :<br>
                    1. Créez une fonction (par exemple createFile()) qui prendra un argument, le nom du fichier à créer.<br>
                    2. Créez une deuxième fonction (par exemple readMyFile()) qui prendra un argument, le nom du fichier à lire.<br>
                    3. Affichez les données lues à l'écran.",

            // Appel de votre fonction ici (sans le point-virgule à la fin)
            "Affichage du résultat de l'appel de votre fonction"
        )
        ?>
    </section>
</main>

<?php
$content = ob_get_clean();
include 'base.php';

