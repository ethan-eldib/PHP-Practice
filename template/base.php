<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <title>Exercices PHP</title>
</head>
<body>

<h1 id="summary" class="h2 text-secondary text-center">Exercices PHP</h1>
<a href="../index.php" class="nav-link">
    <span class="nav-link-span">Accueil</span>
</a>
<?php echo $content; ?>

<a id="backToTop" href="#summary" class="btn btn-sm">
    <img width="50" src="https://img.icons8.com/ios/512/up-squared.png" alt="Icon chevron carré haut ">
</a>
</body>
<script type="module" src="../assets/js/index.js"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById("runBtn").addEventListener("click", function () {
            let phpCode = document.getElementById("phpCode").value;
            fetch("../execute.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "code=" + encodeURIComponent(phpCode)
            })
                .then(function (response) {
                    if (response.ok) {
                        return response.text();
                    } else {
                        throw new Error("Erreur lors de l'exécution du code PHP.");
                    }
                })
                .then(function (data) {
                    document.getElementById("result").innerHTML = data;
                })
                .catch(function (error) {
                    document.getElementById("result").innerHTML = error.message;
                });
        });
    });

</script>
</html>
