<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP YAY</title>
</head>
<body>
    <?php
    echo "This is my first php website";
    echo "<br>";
    $var1 = 21;
    $var2 = 45;
    //Not case sensitive language
        //Operators in PHP
            //Arithmetic operators
            echo "The value of variable1 + Variable2= ";
            echo $var1+$var2;
            echo "<br>";
            echo "The value of variable1 + Variable2= ",$var1-$var2;
            echo "<br>";
            echo $var1;echo "<br>";
            echo $var2;

            //Assignment operators
            $var3= $var1*$var2; //Multiplication arithmetic op
            $var4= $var2/$var1; //Division arithmetic op
            echo "<br>";
            Echo $var3;
            echo "<br>";
            echo $var4;
            echo "<br>";
            $var3+=1; //adds 1 and assigns the resultant value to var3
            $var4-=1; //subs 1 and assigns the resultant value to var4
            echo "<br>";
            echo $var3;
            echo "<br>";
            echo $var4;
            echo "<br>";
            //comparison operators aka boolean
            echo var_dump(1==4);
            echo "<br>";

            //Increment operators/Decrement operators
            echo ++$var3;
            echo --$var4;
            echo $var4++;
            echo $var3--;
            //Logical Operators and or xor not
            
            echo "<br>";
            echo "To define constants use 'define('const_name', const_val)'";
            echo "<br>";
            echo "<br>";
            
            echo "'define('pi', 3.14); <br>
            echo pi;' <br> prints value of pi i.e.";
            define('pi', 3.14);
            echo pi;
    
    ?>
</body>
</html>