

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<div class=""></div>

<?php

echo "<h1>A continuación mostramos los resultados:  </h1>";
$altura =  $_POST['altura'];
$peso = $_POST['peso'];
$indice = $peso / ($altura * $altura) * 10000;

$indiceCorto = floor($indice * 10) /10;

echo $indiceCorto;


if($indice<=17){ 
    echo " su indice es: de infrapeso"; 
} 
elseif(($indice>17)&&($indice<=18)){ 
    echo " su indice es: de bajo peso"; 
} 
elseif(($indice>18)and($indice<=25)){ 
  echo " su indice es: de peso normal -saludable-";  
} 
elseif(($indice>25)and($indice<=30)){ 
  echo " su indice es: de sobrepeso.";  
} 
elseif(($indice>30)and($indice<=35)){ 
  echo " su indice es de sobrepeso cr&oacute;nico -obesidad de grado I-";  
} 
elseif(($indice>35)and($indice<=40)){ 
  echo " su indice es: de sobrepeso cr&oacute;nico -obesidad de grado II-";  
} 
elseif($indice>40){ 
  echo " su indice es: de obesidad m&oacute;rbida -obesidad de grado III-";  
} 
else { 
 echo " Introduce los datos correctamente."; 
} 


?>


<script type="text/javascript" src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
