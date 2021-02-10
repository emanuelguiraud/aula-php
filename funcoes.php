<?php


    function soma($n1, $n2)
    {
        $soma = $n1 + $n2;
        return $soma;
    }

    function fatorial($num)
    {
        $total = 1;
        for ($i = $num; $i > 0; $i = $i -1)
        {
            echo $i . " * ";
            $total = $total * $i;
        }

        echo " = $total";
    }

?>
