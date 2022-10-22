<?php

echo "<br>Me chamo Thiago Cassio Krug";
echo "hoje eu aprendi a usar o git";
echo"me chamo Arthur";
echo" #INVASAO!!!!!";
$valor1 = $_GET["valor1"];
$valor2 = $_GET["valor2"];
$valor3 = $_GET["valor3"];
if( $valor1 > $valor2 and $valor1 > $valor3) 
{
	echo " o maior é  o numero 1 com o valor  $valor1";
}
if( $valor2 > $valor3 and $valor2 > $valor1) 
{
	echo " o maior é  o numero 2 com o valor  $valor2";
}
if( $valor3 > $valor1 and $valor3 > $valor2) 
{
	echo " o maior é  o numero 3 com o valor  $valor3";
}
if	($valor1 == $valor2 and $valor2 == $valor3 and $valor1 == $valor3)
{
	echo "os valores sao iguais";
}
	?>