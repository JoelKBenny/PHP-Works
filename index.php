<html lang="en">
<head>
    <title>First php work</title>
</head>
<body>
    <?php
    echo "Hello , My name is Joel K Benny";
    //this is a single line comment
    #this is also a single line commment
    echo "<br>";
    $name  = "Joel K Benny";
    echo "my name is ".$name."";
    echo "<br>";
    $clg  = "RAJAGIRI";
    $cousre = "MSc Computer Science";
    $spec = "Data Analytics";
    echo "Iam pursuing my masters in $cousre with specialization in $spec in $clg";
    echo"<br>";
    $a = 10;
    $b = 15;
    $c = $a + $b;
    echo "$c";
    echo "<br>";
    echo $c + $a;
    echo "<br>";
    var_dump($c); // returns the datatype of the variable
    echo "<br>";
    var_dump($name);
    //arrays in php
    echo "<br>";
    $cars = array("BMW","Benz","Jaguar","porsche");
    var_dump($cars); echo "<br>"; 
    $x = strlen($name); echo "$x"; echo "<br>";
    echo str_word_count("Rajagiri College of Social Sciences"); //returns the count of words in a sentence
    echo "<br>";
    echo strrev($name); echo "<br>";
    echo strpos($name , "Benny"); echo "<br>";
    echo str_replace("World", "Joel", "Hello World"); echo "<br>";
    $ab = 678;
    $cd = 67.5;
    var_dump(is_int($ab)); echo "<br>";
    var_dump(is_int($cd)); echo "<br>"; 
    $q = 78.98;
    var_dump(is_float($q)); echo "<br>";
    $x = 1.9e411;
    var_dump($x); echo "<br>";
    $g = 5678;
    $j = "768";
    var_dump(is_numeric($g)); echo "<br>";
    var_dump(is_numeric($j));
    $n = 567.976;
    $int_cast = (int)$n; echo "<br>";
    echo $int_cast; echo "<br>";
    echo(pi()); echo "<br>"; 
    echo(min(0, 150, 30, 20, -8, -200)); echo "<br>"; // returns -200
    echo(max(0, 150, 30, 20, -8, -200));  echo "<br>";// returns 150
    echo(abs(-6.7));  // returns 6.7 
    echo "<br>";
    echo(sqrt(64)); echo "<br>";
    echo(round(0.56)); echo "<br>";
    echo(round(0.3)); echo "<br>";
    echo round(5.7); echo "<br>";
    echo rand(); echo "<br>"; // generates a random number
    echo rand(10,20); echo "<br>"; //generate number randomly within the specified range

    define("Greetings", "Welcome to Rajagiri College",);
    echo Greetings; echo "<br>";

    //creating an array constant
    define("cars",[
        "Toyota",
        "BMW",
        "Benz"
    ]);
    echo cars[1]; echo "<br>";
    ?>
</body>
</html>