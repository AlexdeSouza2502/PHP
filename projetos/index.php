<?php

$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'adolescente';
$categoria[] = 'adulto';
//print_r($categoria);

$nome = 'Alex';
$idade = '20';

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <=12)
{
 for($i = 0; $i <= count($categoria); $i++)
 {
    if($categoria[$i] == 'infantil')
    echo "O nadador".$nome. " Compete na categoria " .$categoria[$i];
 }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categoria); $i++)
    {
       if($categoria[$i] == 'adolescente')
       echo "O nadador".$nome. " Compete na categoria " .$categoria[$i];
    }
   }
else{
    for($i = 0; $i <= count($categoria); $i++)
    {
       if($categoria[$i] == 'adulto')
       echo " O nadador " .$nome.  " Compete na categoria "  .$categoria[$i];
    }
}