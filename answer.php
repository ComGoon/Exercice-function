//Author: Oussoumane Mahaman Madani (GoMyCode)

<?php
/**
 * Created by PhpStorm.
 * User: comgoon
 * Date: 8/8/18
 * Time: 10:02 AM
 */


// 1-)
echo "<u><strong>COMPARING TWO NUMBERS</strong></u> <br>"; //title


function compare($num1, $num2){ //function declaration with two parameters

    if ($num1 > $num2) {   //checking if the num1 is greater than num2

        echo "$num1 is plus <strong>grand</strong> que $num2";

    } elseif ($num1 < $num2) {   //checking whether num2 is the greater

        echo "$num2 is plus <strong>grand</strong> que $num1";

    } else {    //default instruction, case where they are equal

        echo "$num1 et $num2 sont <strong>egaux</strong>";

    }
}

compare(4, -9); //calling the function to test parameters

echo "<br>";
echo "<br>";
echo "<br>";

// 2-)
echo "<u><strong>SINUS D'UN ANGLE</strong></u> <br>"; //title


function myAngle($angl, $unity){
    switch($unity)
    {
        case "R": //case it's capital letter "r" that is used as unity
        case"r":  //case it's small letter "r" that is used as unity
            return "The sinus of $angl R ==> ". sin($angl); //output
            break;
        case "D":
        case"d":
            return "The sinus of $angl D ==> ".sin($angl * 3.14 / 180);
            break;
        case "G":
        case"g":
            return  "The sinus of $angl G ==> ".sin($angl * 180 / 3.14);
            break;
    }
}


echo myAngle(.45,r),"<br />"; //testing the radian
echo myAngle(45,D),"<br />"; //testing the degree using capital D
echo myAngle(.45,g),"<br />"; //testing the grad


?>


