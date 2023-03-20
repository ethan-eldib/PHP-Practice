<?php ob_start(); ?>

<div class="displayBtnExercise">
    <button class="btnExercise">
        <a href="template/easyPhpExercise.php">Facile</a>
    </button>

    <button class="btnExercise">
        <a href="template/mediumPhpExercise.php">Moyen</a>
    </button>

    <button class="btnExercise">
        <a href="#">Difficile</a>
    </button>
</div>

<?php
$content = ob_get_clean();
include 'template/base.php';

