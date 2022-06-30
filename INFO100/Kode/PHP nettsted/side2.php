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
        <h2>Her er noen fler PHP script eksempler</h2>

        <h3>Strings</h3>

        <!-- 
        PHP script skrives inne i en slik tag: <?php        ?> 
        og kan skrives hvor som helst inne i dokumentet
         -->

        <!-- Diverse PHP med stringer -->
        <?php
            #Print stringen hello world i PHP
            #echo brukes for å printe output
            echo "Hello World!";

            #Printe string med en satt variabel $tst
            #variabler skrived med dollar $ tegnet, fulgt av variabel nevnet
            $txt = "PHP";
            echo "I love $txt!";

            echo "<br><br>";

            
            //printer Heisann hoppsann!
            #man kan skrive html i string verdier
            echo "Heisann hoppsann!" . "<br>"; 
            // returns string lenge: 17
            echo "Lengde på frasen over: " . strlen("Heisann hoppsann!") . "<br>"; 
            // returns antall ord: 2
            echo "Antall ord: " . str_word_count("Heisann hoppsann!") . "<br>";
            // returnerer stringen reversert: !nnasppoh nnasieH
            echo "Frasen reversert: " . strrev("Heisann hoppsann!") . "<br>"; 
            // Søker for hoppsann, og gir plasseringen med første match, returns 8
            echo "Posisjon søkeord: " . strpos("Heisann hoppsann!", "hoppsann") . "<br>"; 
            // Erstatter hoppsann med du, returns Heisann du!
            echo "Erstatt ord: " . str_replace("hoppsann", "du", "Heisann hoppsann!") . "<br>"; 
        
        ?>

        <div class="spacer">


        <h3>Integers</h3>

        <!-- Diverse PHP med tall -->
        <?php
            $x = 56;
            $y = -5;
            $z = 3.3;
            $w = "ost";

            #var_dump returnerer informsjon om en eller flere varibler, holder typen og verdien av variablen
            #sjekker om varibler er integers, return boolean
            echo "Sjekker om 56 , 3.3  og ost er integers: ";
            var_dump(is_int($x), is_int($z), is_int($w));

            #sjekker om varibler er floats, return boolean
            echo "<br>" . "Sjekker om 56 og 3.3 er floats (desimaler): ";
            var_dump(is_float($x), is_float($z));

            echo "<br><br>";

            #returns pi
            echo ("Print pi: " . pi() . "<br>"); // returns 3.1415926535898
            #finner minimal value from list of arguments
            echo("Lavest tall fra liste: " . min(2, 69, 6, 17, -1, -33) . "<br>");  // returns -33
            #finner maximal value from list of arguments
            echo("Høyest tall fra liste: " . max(2, 69, 6, 17, -1, -33) . "<br>");  // returns 69


            #generer random nummer
            echo("generer random tall: " . rand() . "<br>");
            #generer random nummer mellom to tall (inclusive)
            echo ("generer random tall mellom 10-1000:" . rand(10, 1000));
        ?>

    </main>
    

</body>

</html>