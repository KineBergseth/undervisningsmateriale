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
        <h2>Her er noen PHP script eksempler</h2>

<!-- 
PHP er et programmeringsspråk som er egnet til å lage småprogrammer (skripter) for vevsider. 
PHP er særlig egnet for tjenersideskripting, der koden kjøres på tjeneren/serveren og genererer HTML som 
deretter sendes til klienten. Klienten vil se resultatet av PHP­skriptet, men vil ikke kunne se selve PHP­koden.

 -->
        
        <!-- 
        PHP script skrives inne i en slik tag: <?php        ?> 
        og kan skrives hvor som helst inne i dokumentet
         -->
        
        <?php // Return date/time info of a timestamp; then format the output
        date_default_timezone_set("Europe/Oslo");
        $mydate=getdate(date("U"));
        #variabel som kaller funksjon og finner navn på norsk dag
        $day = "Det er (" . whatDay($mydate[weekday]) . ")";
        echo "$day $mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
        echo "<br>";
        echo "The time is " .date("h:i:sa");

        #man kan skrive html i string verdier
        echo "<br>";

        //switch statement som printer om det er hverdag eller helg basert på dagen
        switch ($mydate[weekday]) {
          case "Saturday":
            echo "Det er helg!";
            break; //break gjør at man hopper "ut" av loopen
          case "Sunday":
            echo "Det er helg!";
            break;
          default:
            echo "Det er hverdag!";
        }

        //funksjon som finner ut hvilken dag det er og printer dagen på norsk
        function whatDay($day){
            if ($day == "Monday") {
              return "mandag";
            } elseif ($day == "Tuesday") {
              return "tirsdag";
            } elseif ($day == "Wednesday") {
              return "onsdag";
            } elseif ($day == "Thursday") {
              return "torsdag";
            } elseif ($day == "Friday") {
              return "fredag";
            } elseif ($day == "Saturday") {
              return "lørdag";
            } else {
              return "søndag";
            }
        }


        ?>

        <div class="spacer">

        <?php
        #finner ut hvilken browser brukeren har
        $useragent = $_SERVER ['HTTP_USER_AGENT'];
        echo "<b>Your User Agent is</b>: " . $useragent;

        echo "<br>";
        

        #finner ut hvilken IP adresse brukeren har
        /*
            OBS! may not actually contain real client IP addresses, as it will give you a proxy address for clients connected through a proxy
        */
        $ipaddress = getenv("REMOTE_ADDR") ; 
        echo "Your IP Address is " . $ipaddress; 
        


        ?>

    </main>
    

</body>

</html>