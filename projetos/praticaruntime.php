<?php 

function divisao($dividendo, $divisor)
{
try{
   if($divisor == 0)
   {
     throw new RangeException("O numero não pode ser divido por zero");
   }
   $resultado = $dividendo /$divisor; 

   echo "O resultado é: " .$resultado;
  }catch(Exception ){
    //echo $e->getMessage();
    echo"O numero não pode ser dividido por zero";
  }
  finally{
    echo "<br/>Tratando exceções";
  }
}
divisao(10,2);