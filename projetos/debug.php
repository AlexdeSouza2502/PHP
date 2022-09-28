<?php 

function f1()
{
    echo ">F1 esta ante da exceção"."<br/>";
}
function f2($int)
{
    if(!is_int($int))
    {
        throw new Exception("O argumento não é esperado");
    }
    else
    {
     echo ">F2 esta na exceção "."<br/>";
    }
    f3();

}
function f3()
{
    echo ">F3esta depois da exceção";
}
f1();
f2(
 int:5
);