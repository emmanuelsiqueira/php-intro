<?php

$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolescente';
$categoria[] = 'adulto';
$categoria[] = 'idoso';

//print_r($categoria);

$nome = "Eduardo";
$idade = 30;


//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= $categoria; $i++)
    {
        if($categoria[$i] == 'infantil')
        {
            echo "O nadador ".$nome. " compete na categoria infantil.";
        }
    }
}
else if($idade >= 13 && $idade <=18)
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == 'adolescente')
        {
            echo "O nadador ".$nome . " compete na categoria adolescente.";
        }
    }
}
else
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if (isset($categoria[$i]) == 'adulto')
        {
            echo "O nadador ".$nome . " compete na categoria adulto.";
        }
    }
}