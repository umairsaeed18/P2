<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <title>Avengers Memory Game</title>
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
            <img src="../img/mg1-project.png">
            <img src="../img/mg-project.png">
            <img src="../img/mg2-project.png">
            <img src="../img/mg3-project.png">
            <!-- <img src="../img/metalogo.png"> -->
        </div>
    </div>
    <div class="container-review">

        <div class="layout">
            <p class="col col-main">
                <strong>Project</strong> <br><br>
                Dit was mijn tweede POC voor development. Ik heb een geheugenspel gemaakt in JavaScript en het
                geheugenspel is een basisspel om het geheugen van de speler te testen. In een stapel gepaarde kaarten
                moet de speler elk paar matchen om het spel te winnen.

                <br><br>
                De structuur van het speelbord is niet heel ingewikkeld en het is makkelijk te maken met HTML en CSS.
                De main-div is het kaartspel dat alle kaarten bevat. De kaarten kunnen
                worden gemaakt als een ongeordende lijst en worden gestyled om eruit te zien als de onderstaande
                afbeelding met behulp van flexbox. Wanneer je met een potje begint, gaat de timer ook starten en die
                stopt wanneer je alle kaarten hebt gewonnen.
                Dat heb ik gedaan door timer functie van JavaScript. Wanneer het potje afgelopen is zie je de stats
                terug zoals hoelang je potje was, aantal clicks en aantal gevonden kaarten.
                <br><br>

                <strong>Leerdoelen</strong> <br><br>
                <i>Development:</i><br>
                Na Rock Paper Scissors heb ik aan Memory Game voor development. Ik heb heel veel nieuwe functies van
                JavaScript kunnen leren en verder
                heb ik ook gebruik gemaakt van jQuery libraries zoals timer.js.
                <br><br>

                <i>Interactive Media:</i><br>
                Het spel is makkelijk te spelen voor de eindgebruiker, maar de back-end erachter kostte me wat tijd en
                moeite. De gebruiker kan op veel manieren interacteren, bijvoorbeeld door kaarten te zoeken, te resetten
                via een knop enz.
                <br><br>
                <strong>Project uitwerking</strong> <br><br>
                <script async src="//jsfiddle.net/umairsaeed/y3rxb0g6/3/embed/"></script>
            </p>
        </div>
    </div>
</body>
<script src="../js/main.js"></script>

</html>