<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <title>Steen Papier Schaar</title>
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/project.scss">
    <link rel="icon" href="../img/metalogo.png">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>

<body>
    <aside>
        <nav id="mySidenav" class="sidenav">
            <a href="../index.php" id="home"><i class="fa fa-home"></i>Home</a>
            <a href="../index.php#aboutsection" id="about"><i class="fas fa-address-card"></i>About</a>
            <a href="../index.php#portsection" id="folio"><i class="fas fa-briefcase"></i>Portfolio</a>
            <a href="../libraries.php" id="contact"><i class="fas fa-file-code"></i>Adv. dev</a>
        </nav>
    </aside>
    <nav class="mobile-nav">
        <a href="../index.php">Home</a>
        <a href="../index.php#aboutsection">About</a>
        <a href="../index.php#portsection">Portfolio</a>
        <a href="../libraries.php">Adv. dev</a>
    </nav>


    <div class="container-car">
    <div class="backBtn">
            <span class="line tLine"></span>
            <span class="line mLine"></span>
            <a href="../dev.php"><span class="backlabel">Back</span></a>
            <span class="line bLine"></span>
        </div>
        <span id="previous"><i class="fas fa-caret-left"></i></span>
        <span id="next"><i class="fas fa-caret-right"></i></i></span>

        <div id="slider" class="slider">
            <img src="../img/sps-project.png">
            <img src="../img/sps2-project.png">
            <img src="../img/sps3-project.png">
            <img src="../img/sps4-project.png">
            <!-- <img src="../img/metalogo.png"> -->
        </div>
    </div>
    <div class="container-review">

        <div class="layout">
            <p class="col col-main">
                <strong>Project</strong> <br><br>
                De eerste POC voor development was het maken van een spelletje steen papier schaar.
                De eerste stap was het maken van drie knoppen, steen, papier en schaar waar de gebruiker op kon klikken.
                Het was even zoeken maar uiteindelijk lukte het
                om met een array en het selecteren van een random nummer tussen 0 en 3 om de computer telkens een random
                keuze te laten maken tussen steen, papier en schaar.
                <br><br>De volgende stap was het vervangen van de knoppen
                met tekst door emojis, dit was een makkelijke opgave en koste dus niet veel tijd noch moeite.
                Het volgende doel was om te zorgen dat na 4 seconde het antwoord van de computer verdween. <br><br>
                Na het succes met de timer was er nog een ding dat ik moest toevoegen, er moest getoond worden of de
                speler had gewonnen of verloren. Om dit voor elkaar te krijgen maak ik gebruik van een lege div waar ik
                informatie inzet en na 4 seconden weer uit verwijder. De code die de antwoorden van de computer en
                speler vergelijkt is een simpel if statement dat de array nummers van de computer vergelijkt met die van
                de speler.
                <br><br>

                <strong>Leerdoelen</strong> <br><br>
                <i>Development:</i><br>
                Rock Paper Scissors is het eerste POC waar ik aan gewerkt heb voor development, dingen die ik geleerd
                heb tijdens het maken van deze POC heb ik later gebruikt in het Sprint X project en de portfolio.
                Acties uitvoeren bij het drukken op een knop, emojis laten verdwijnen en
                verschijnen, het genereren van een random nummer en het gebruiken van een timer.
                <br><br>

                <i>Interactive Media:</i><br>
                Ik heb een kleine maar simpele game gemaakt dat te begrijpen is zonder dat je kennis nodig heb van
                computers. Tijdens het project heb ik iteraties gebruikt door de tekst te vervangen door afbeeldingen en
                het veranderen van het formaat van deze afbeeldingen. Ik heb het spel door verschillende mensen laten
                testen en het gebruik was simpel en duidelijk.

                <br><br>
                <strong>Project uitwerking</strong> <br><br>
                <script async src="//jsfiddle.net/umairsaeed/qa82mg6e/1/embed/"></script>
            </p>
        </div>

    </div>
</body>
<script src="../js/main.js"></script>

</html>