<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: Orange;
        margin: auto;
        padding: 20px;
    }
</style>
<body>
    <div class="container">
    <h1>Let's learn about php!!</h1>
    <?php
    $age=23;
    if($age>18){
        echo ("You can go to the party");
    }
    else if($age=7){
        echo ("You are 7!!");
    }
    else{
        echo("You can't go to the party!");
    };
    echo "<br>";
    $a=0;
    do{
        echo("$a <br>");
        $a++;
    }while($a<=10);
    echo "<br>";
    
    $languages = array("python", "C++", "PHP", "Java", "JavaS");
    $a=0;
    while($a < count($languages)){
        echo ("The value of languages array is:");
        echo $languages[$a];
        echo "<br>";    
        $a++;
    }

    for ($a=0; $a < 10; $a++) { 
        echo "<br> The value of A from the for loop is: ";
        echo $a;
    }
    echo "<br>";
    foreach($languages as $vals){
        echo "<br> Value from foreach loop is: ";
        echo $vals;
    }
    echo "<br>";
    function print_number($num){
        echo"<br> Your number is: ";
        echo $num;
    }
    print_number(4);
    print_number(5);
    print_number(6);
    echo "<br>";
    echo "<br>";            
    $abc= "This is a string";
    $lennn= strlen($abc);
    echo "This is the length of the given string: ", $lennn;

    ?>
    </div>
</body>
</html>