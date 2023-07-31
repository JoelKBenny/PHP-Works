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
    
    ?>
</body>
</html>