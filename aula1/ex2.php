<?php

$num = rand(1,10);

switch ($num){
    case 1 :
        echo "Domingo!";
        break;
    case 2 :
        echo "Segunda!";
        break;
    case 3 :
        echo "Terça!";
        break;
    case 4 :
        echo "Quarta!";
        break;
    case 5 :
        echo "Quinta!";
        break;
    case 6 :
        echo "Sexta!";
        break;
    case 7 : 
        echo "Sábado!"; 
    default :
        echo "O número sorteado não é um dia da semana válido.";
    
}

?>