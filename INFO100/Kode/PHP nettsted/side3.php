<!DOCTYPE html>
<html lang="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP seminar</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <script type="text/javascript" src="js/script.js"></script> -->
</head>

<body>
    <header>
        <nav class="navbar">
            <ul class="main-nav">
                <li class="nav_li"><a class="logo" href="index.php">
                        <h1>PHP</h1>
                    </a></li>
                <li class="nav_li"><a class="nav_li_a" href="index.php">Hjem</a></li>
                <li class="nav_li"><a class="nav_li_a" href="side2.php">Strings/Integers</a></li>
                <li class="nav_li"><a class="nav_li_a" href="side3.php">Annet</a></li> 
            </ul>
        </nav>
    </header>
    <main>
        <h2>Her er enda noen fler PHP script eksempler</h2>



        <h3>Conditional statements</h3>
        <?php
            
/*conditional statements:

    if statement - executes some code if one condition is true
    if...else statement - executes some code if a condition is true and another code if that condition is false
    if...elseif...else statement - executes different codes for more than two conditions
    switch statement - selects one of many blocks of code to be executed
*/

            #generer random nummer mellom to tall (inclusive)
            $number = (rand(1, 100) . "<br>");
            echo "Random tall: " . $number;

            #IF statement, kjører kode som oppfyller "kravet" avhengig om en condition er sann eller falsk.  
            if ($number < "25") {
              echo "Tallet er mindre en 25";
            } elseif ($number < "50") {
              echo "Tallet er mellom 25 og 50";
            } elseif ($number < "75") {
              echo "Tallet er mellom 50 og 75";
            } else {
              echo "Tallet er høyere en 75";
            }

            echo "<br>";
                
            #SWITCH statement, velger forskjellige actions basert på ulike forhold, og kjører kun EN blokk med kode
            $favanimal = "lemur";

            switch ($favanimal) {
              case "kamel":
                echo "Your favorite animal is kamel!";
                break; //break gjør at man hopper "ut" av loopen
              case "panda":
                echo "Your favorite animal is panda!";
                break;
              case "lemur":
                echo "Your favorite animal is lemur!";
                break;
              default:
                echo "Your favorite animal is neither kamel, panda, nor lemur!";
            }

        ?>

        <div class="spacer">

        <h3>Loops</h3>
        <?php
            
/*loop types:

    while - loops through a block of code as long as the specified condition is true
    do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
    for - loops through a block of code a specified number of times
    foreach - loops through a block of code for each element in an array
*/

            #WHILE
            echo "print partall (While loop):<br>";
            $x = 0; //Initialize the loop counter ($x), and set the start value to 0

            #utfører kodeblokken så lenge condition er true
            while($x <= 10) { //Continue the loop as long as $x is less than or equal to 10
            echo "The number is: $x <br>";
            $x+=2; //Increase the loop counter value by 2 for each iteration
            } 
            

            #DO WHILE
            echo "<br>";
            echo "Printer tall 3 til og med 7 (Do While loop): <br>";
            $y = 3;

            #vil alltid utføre koden en gang, og vil deretter sjekke condition og gjenta seg så lenge den er true
            do {
              echo "The number is: $y <br>";
              $y++;
            } while ($y <= 7);
            

            #FOR LOOP
            echo "<br>";
            echo "Skrier ut hvert 12. tall til og med 60 (For loop): <br>";

            #looper gjennom krav, man må vite spesifikt hvor mange ganger det skal kjøre
            for ($x = 0; $x <= 60; $x+=12) {
                echo "The number is: $x <br>";
            } 
            
            #$x = 0; - Initialize the loop counter ($x), and set the start value to 0
            #$x <= 50; - Continue the loop as long as $x is less than or equal to 50
            #$x+=12 - Increase the loop counter value by 12 for each iteration


            #FOREACH LOOP
            echo "<br>";
            echo "printer liste med dyr (Foreach loop):<br>";
            $animal = array("Kamel", "Alpakka", "Silkeape", "Lemur", "Panda");

            #funker kun på arrays, looper gjennom hver verdi i listen
            foreach ($animal as $value) {
              echo "$value <br>";
            }



        ?>

        <div class="spacer">

        <h3>Arrays</h3>
        <?php
            #Array som lagrer flere verdier i en variabel, begynner på 0, (så kamel har index 0)
            $animal = array("Kamel", "Alpakka", "Silkeape", "Lemur", "Panda");
            
            #finner lengden på arrayen (antall elementer)
            $arrlength = count($animal);


            #looper gjennom arrayen og printer alle verdiene
            for($x = 0; $x < $arrlength; $x++) {
                echo $animal[$x];
                echo " - ";
            }

            echo "<br>";

            #printer utvalgte verdier basert på index
            echo "Jeg elsker " . $animal[0] . ", " . $animal[1] . " and " . $animal[2] . ".";

            #printer antall elementer i arrayen 
            echo "<br> Antall elementer i array: " . $arrlength;

        ?>
    </main>
    
</body>

</html>