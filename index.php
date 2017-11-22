<?php

function tableMulti($a, $b){
    if($a < 1 || $b < 1){
        echo "<p>Введите корректные данные;<p>";
    }else{
        echo "<table>";
        for($i = 1; $i <= $a; $i++){
            echo "<tr>";
            for($j = 1; $j <= $b; $j++){
                echo "<td style='width: 50px;'>";
                echo $i * $j;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}


tableMulti(10, 5);