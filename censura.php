<?php
    $paragrafo = $_GET['paragraph'];
    $parolaccia = $_GET['badword'];

    echo "Paragrafo non censurato:<br>";
    echo $paragrafo . "<br>";
    echo "Lunghezza del paragrafo in caratteri: " . strlen($paragrafo) . "<br><br>";

    $paragrafo_censurato = str_ireplace($parolaccia, '***', $paragrafo);

    echo "Paragrafo censurato:<br>";
    echo $paragrafo_censurato . "<br>";
    echo "Lunghezza del paragrafo censurato in caratteri: " . strlen($paragrafo_censurato) . "<br>"; 
?>


    