<?php include 'templates/exerciceTheme.php' ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/app.css">
    <title>Exercices PHP</title>

</head>
<body>
<div class="container">
    <h1 id="summary" class="h2 text-secondary mb-3">Exercices PHP</h1>
    <div class="border border-secondary rounded mb-5">
        <ul class="list-group">
            <li class="list-group-item d-flex align-items-center">
                <a href="#exercice1" class="small link-secondary text-decoration-none">Exercice 1 :
                    Écrire une fonction PHP qui affiche la date et l'heure actuelles.</a>
            </li>
            <li class="list-group-item">
                <a href="#exercice2" class="small link-secondary text-decoration-none">Exercice 2 : Écrire une fonction
                    qui prend une chaîne de caractères en entrée et qui renvoie cette chaîne avec les caractères
                    inversés. Par exemple, si l'entrée est 'Bonjour', la sortie doit être 'ruojnoB'.</a>
            </li>
            <li class="list-group-item">
                <a href="#exercice3" class="small link-secondary text-decoration-none">Exercice 3 : Écrire une fonction
                    qui prend une chaîne de caractères en entrée et qui renvoie true si la chaîne est un palindrome,
                    false sinon. Un palindrome est une chaîne qui peut être lue de gauche à droite ou de droite à gauche
                    sans changer d'ordre. Par exemple, 'radar' est un palindrome.</a>
            </li>
            <li class="list-group-item">
                <a href="#exercice4" class="small link-secondary text-decoration-none">Exercice 4 : Écrire une fonction
                    qui prend deux tableaux en entrée et qui renvoie un nouveau tableau qui contient tous les éléments
                    des deux tableaux sans doublons.</a>
            </li>
            <li class="list-group-item">
                <a href="#exercice5" class="small link-secondary text-decoration-none">Exercice 5 : Écrire une fonction
                    qui prend un tableau d'entiers en entrée et qui renvoie la moyenne de tous les entiers dans le
                    tableau.</a>
            </li>
            <li class="list-group-item">
                <a href="#exercice6" class="small link-secondary text-decoration-none">Exercice 6 : Écrire une fonction
                    qui prend un tableau de chaînes de caractères en entrée et qui renvoie le nombre de chaînes qui ont
                    une longueur supérieure à 5 caractères.</a>
            </li>
            <li class="list-group-item">
                <a href="#exercice7" class="small link-secondary text-decoration-none">Exercice 7 : Écrire une fonction
                    qui prend en entrée un nombre entier et qui renvoie true si ce nombre est un nombre premier, false
                    sinon. Un nombre premier est un nombre qui n'est divisible que par 1 et lui-même.</a>
            </li>
            <li class="list-group-item">
                <a href="#exercice8" class="small link-secondary text-decoration-none">Exercice 8 : Écrire une fonction
                    qui prend un tableau d'entiers en entrée et qui renvoie un nouveau tableau contenant uniquement les
                    nombres pairs.</a>
            </li>
            <li class="list-group-item">
                <a href="#exercice9" class="small link-secondary text-decoration-none">Exercice 9 : Écrire une fonction
                    qui prend une chaîne de caractères en entrée et qui renvoie true si la chaîne est un nombre entier
                    valide, false sinon. Par exemple, '123' est un nombre entier valide, mais 'abc' ne l'est pas.</a>
            </li>
            <li class="list-group-item">
                <a href="#exercice10" class="small link-secondary text-decoration-none">Exercice 10 : Écrire une
                    fonction qui prend un tableau de chaînes de caractères en entrée et qui renvoie le nombre total de
                    caractères dans toutes les chaînes du tableau.</a>
            </li>
            <li class="list-group-item">
                <a href="#exercice11" class="small link-secondary text-decoration-none">Exercice 11 : Écrire une
                    fonction qui prend un nombre entier en entrée et qui renvoie la somme de tous les nombres impairs de
                    1 à ce nombre. Par exemple, si l'entrée est 5, la sortie doit être 9 (1 + 3 + 5).</a>
            </li>
            <li class="list-group-item">
                <a href="#exercice12" class="small link-secondary text-decoration-none">Exercice 12 : Écrire une
                    fonction qui prend un tableau d'objets en entrée et qui trie le tableau par ordre croissant en
                    utilisant l'une des propriétés de l'objet comme clé de tri. Par exemple, si le tableau contient des
                    objets avec une propriété 'prix', la fonction doit trier le tableau par ordre croissant des
                    prix.</a>
            </li>
            <li class="list-group-item">
                <a href="#exercice13" class="small link-secondary text-decoration-none">Exercice 13 :Écrire une fonction
                    qui prend une chaîne de caractères en entrée et qui renvoie la même chaîne avec toutes les
                    occurrences d'un caractère donné remplacées par un autre caractère. Par exemple, si l'entrée est
                    'banana' et le caractère à remplacer est 'a', la sortie doit être 'bnnn'.</a>
            </li>
            <li class="list-group-item">
                <a href="#exercice14" class="small link-secondary text-decoration-none">Exercice 14 : Écrire une
                    fonction qui prend un tableau d'objets en entrée et qui renvoie un tableau contenant uniquement les
                    objets qui ont une propriété spécifique avec une valeur donnée. Par exemple, si le tableau contient
                    des objets avec une propriété 'couleur', la fonction doit renvoyer un tableau contenant uniquement
                    les objets avec une couleur spécifique.</a>
            </li>
        </ul>
    </div>

    <main>
        <section>
            <hr>
            <?php
                // Votre fonction ici
                function example(): string
                {
                    return 'Je suis un exemple';
                }

                exercice(1,
                "Écrire une fonction PHP qui affiche la date et l'heure actuelles.",
                [
                    // Appel de votre fonction ici (sans le point-virgule à la fin)
                    example()
                ])
            ?>
        </section>
        <section class="mt-5">
            <hr>
            <?php
            // Votre fonction ici
            //function example(): string
            //{
            //    return 'Je suis un exemple' ;
            //}

            exercice(2,
                "Écrire une fonction
                    qui prend une chaîne de caractères en entrée et qui renvoie cette chaîne avec les caractères
                    inversés. Par exemple, si l'entrée est 'Bonjour', la sortie doit être 'ruojnoB'",
                [
                    // Appel de votre fonction ici (sans le point-virgule à la fin)
                    //example()
                ])
            ?>
        </section>
        <section class="mt-5">
            <hr>
            <?php
            // Votre fonction ici
            //function example(): string
            //{
            //    return 'Je suis un exemple' ;
            //}

            exercice(3,
                "Écrire une fonction
                    qui prend une chaîne de caractères en entrée et qui renvoie true si la chaîne est un palindrome,
                    false sinon. Un palindrome est une chaîne qui peut être lue de gauche à droite ou de droite à gauche
                    sans changer d'ordre. Par exemple, 'radar' est un palindrome.",
                [
                    // Appel de votre fonction ici (sans le point-virgule à la fin)
                    //example()
                ])
            ?>
        </section>
        <section class="mt-5">
            <hr>
            <?php
            // Votre fonction ici
            //function example(): string
            //{
            //    return 'Je suis un exemple' ;
            //}

            exercice(4,
                "Écrire une fonction
                    qui prend deux tableaux en entrée et qui renvoie un nouveau tableau qui contient tous les éléments
                    des deux tableaux sans doublons.",
                [
                    // Appel de votre fonction ici (sans le point-virgule à la fin)
                    //example()
                ])
            ?>
        </section>
        <section class="mt-5">
            <hr>
            <?php
            // Votre fonction ici
            //function example(): string
            //{
            //    return 'Je suis un exemple' ;
            //}

            exercice(5,
                "Écrire une fonction
                    qui prend un tableau d'entiers en entrée et qui renvoie la moyenne de tous les entiers dans le
                    tableau.",
                [
                    // Appel de votre fonction ici (sans le point-virgule à la fin)
                    //example()
                ])
            ?>
        </section>
        <section class="mt-5">
            <hr>
            <h5 class="alert alert-secondary">E6. Écrire une fonction
                    qui prend un tableau de chaînes de caractères en entrée et qui renvoie le nombre de chaînes qui ont
                    une longueur supérieure à 5 caractères</h5>
            <?php
            // Votre fonction ici
            //function example(): string
            //{
            //    return 'Je suis un exemple' ;
            //}

            exercice(6,
                "Écrire une fonction
                    qui prend un tableau de chaînes de caractères en entrée et qui renvoie le nombre de chaînes qui ont
                    une longueur supérieure à 5 caractères",
                [
                    // Appel de votre fonction ici (sans le point-virgule à la fin)
                    //example()
                ])
            ?>
        </section>
        <section class="mt-5">
            <hr>
            <?php
            // Votre fonction ici
            //function example(): string
            //{
            //    return 'Je suis un exemple' ;
            //}

            exercice(7,
                "Écrire une fonction
                    qui prend en entrée un nombre entier et qui renvoie true si ce nombre est un nombre premier, false
                    sinon. Un nombre premier est un nombre qui n'est divisible que par 1 et lui-même",
                [
                    // Appel de votre fonction ici (sans le point-virgule à la fin)
                    //example()
                ])
            ?>
        </section>
        <section class="mt-5">
            <hr>
            <?php
            // Votre fonction ici
            //function example(): string
            //{
            //    return 'Je suis un exemple' ;
            //}

            exercice(8,
                "Écrire une fonction
                    qui prend un tableau d'entiers en entrée et qui renvoie un nouveau tableau contenant uniquement les
                    nombres pairs.",
                [
                    // Appel de votre fonction ici (sans le point-virgule à la fin)
                    //example()
                ])
            ?>
        </section>
        <section class="mt-5">
            <hr>
            <?php
            // Votre fonction ici
            //function example(): string
            //{
            //    return 'Je suis un exemple' ;
            //}

            exercice(9,
                "Écrire une fonction
                    qui prend une chaîne de caractères en entrée et qui renvoie true si la chaîne est un nombre entier
                    valide, false sinon. Par exemple, '123' est un nombre entier valide, mais 'abc' ne l'est pas",
                [
                    // Appel de votre fonction ici (sans le point-virgule à la fin)
                    //example()
                ])
            ?>
        </section>
        <section class="mt-5">
            <hr>
            <?php
            // Votre fonction ici
            //function example(): string
            //{
            //    return 'Je suis un exemple' ;
            //}

            exercice(10,
                "Écrire une
                    fonction qui prend un tableau de chaînes de caractères en entrée et qui renvoie le nombre total de
                    caractères dans toutes les chaînes du tableau.",
                [
                    // Appel de votre fonction ici (sans le point-virgule à la fin)
                    //example()
                ])
            ?>
        </section>
        <section class="mt-5">
            <hr>
            <?php
            // Votre fonction ici
            //function example(): string
            //{
            //    return 'Je suis un exemple' ;
            //}

            exercice(11,
                "Écrire une
                    fonction qui prend un nombre entier en entrée et qui renvoie la somme de tous les nombres impairs de
                    1 à ce nombre. Par exemple, si l'entrée est 5, la sortie doit être 9 (1 + 3 + 5).",
                [
                    // Appel de votre fonction ici (sans le point-virgule à la fin)
                    //example()
                ])
            ?>
        </section>
        <section class="mt-5">
            <hr>
            <?php
            // Votre fonction ici
            //function example(): string
            //{
            //    return 'Je suis un exemple' ;
            //}

            exercice(12,
                "Écrire une
                    fonction qui prend un tableau d'objets en entrée et qui trie le tableau par ordre croissant en
                    utilisant l'une des propriétés de l'objet comme clé de tri. Par exemple, si le tableau contient des
                    objets avec une propriété 'prix', la fonction doit trier le tableau par ordre croissant des
                    prix.",
                [
                    // Appel de votre fonction ici (sans le point-virgule à la fin)
                    //example()
                ])
            ?>
        </section>
        <section class="mt-5">
            <hr>
            <?php
            // Votre fonction ici
            //function example(): string
            //{
            //    return 'Je suis un exemple' ;
            //}

            exercice(13,
                "Écrire une fonction
                    qui prend une chaîne de caractères en entrée et qui renvoie la même chaîne avec toutes les
                    occurrences d'un caractère donné remplacées par un autre caractère. Par exemple, si l'entrée est
                    'banana' et le caractère à remplacer est 'a', la sortie doit être 'bnnn'.",
                [
                    // Appel de votre fonction ici (sans le point-virgule à la fin)
                    //example()
                ])
            ?>
        </section>
        <section class="mt-5">
            <hr>
            <?php
            // Votre fonction ici
            //function example(): string
            //{
            //    return 'Je suis un exemple' ;
            //}

            exercice(14,
                "Écrire une
                    fonction qui prend un tableau d'objets en entrée et qui renvoie un tableau contenant uniquement les
                    objets qui ont une propriété spécifique avec une valeur donnée. Par exemple, si le tableau contient
                    des objets avec une propriété 'couleur', la fonction doit renvoyer un tableau contenant uniquement
                    les objets avec une couleur spécifique.",
                [
                    // Appel de votre fonction ici (sans le point-virgule à la fin)
                    //example()
                ])
            ?>
        </section>
    </main>

</div>
</body>
<script type="text/javascript" src="assets/index.js"></script>
</html>