<?php

namespace Service;

class GenerateExerciceList
{
    public function render (int $startNumberOfTheExercise, int $numberOfExercises): void
    {
        for ($i = $startNumberOfTheExercise; $i <= $numberOfExercises; $i++) {
            if ($i == $startNumberOfTheExercise || $i == ($startNumberOfTheExercise + 4) || $i == ($startNumberOfTheExercise + 8) || $i == ($startNumberOfTheExercise + 12)) {
                echo '<div class="col">';
            }

            echo '<li class="list-group-item"><a href="#exercice'.$i.'" class="small link-secondary text-decoration-none">Exercice '.$i.'</a></li>';

            if ($i == ($startNumberOfTheExercise + 4 -1) || $i == ($startNumberOfTheExercise + 8 - 1) || $i == ($startNumberOfTheExercise + 12 - 1) || $i == $numberOfExercises) {
                echo '</div>';
            }
        }
    }
}