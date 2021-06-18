<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/metalogo.png">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <title>Portfolio - Umair Saeed</title>
</head>

<body>
    <aside>
        <nav id="mySidenav" class="sidenav">
            <a href="#hero" id="home"><i class="fa fa-home"></i>Home</a>
            <a href="#aboutsection" id="about"><i class="fas fa-address-card"></i>About</a>
            <a href="#portsection" id="folio"><i class="fas fa-briefcase"></i>Portfolio</a>
            <a href="libraries.php" id="contact"><i class="fas fa-file-code"></i>Adv. dev</a>
        </nav>
    </aside>
    <nav class="mobile-nav">
        <a href="#hero">Home</a>
        <a href="#aboutsection">About</a>
        <a href="#portsection">Portfolio</a>
        <a href="libraries.php">Adv. dev</a>
    </nav>
    <section id="hero">
        <div class="containerHero">
            <div class="right-section">
                <div class="right-section-wrapper">
                    <h1 class="title">Umair Saeed</h1>
                    <h3 class="description">
                        See how experienced developers solve problems in real-time.
                        <div style="width:400px;" class="container-2">
                            <h1 class="typing"><span id="staticText">I am <span id="typewritereffect"></span></span>
                            </h1>
                            <a class="github" href="https://github.com/umairsaeed18/P2.git"><i class="fab fa-github"></i></a>
                        </div>
                    </h3>
                </div>
            </div>
    </section>
    <!-- ======= About Section ======= -->
    <section id="aboutsection" class="aboutsection">
        <div class="section-title-about" data-aos="fade-right" data-aos-duration="5000">
            <h2>About</h2>
        </div>
        <div class="card-container">
            <div class="float-layout">
                <div class="card-image">
                    <img src="img/profile-img.jpg" class="img-fluid" data-aos="fade-right" data-aos-duration="5000"
                        alt="">
                    <div class="card">
                        <div class="card-desc">
                            <div class="ui-ux">UI/UX Designer & Web Developer.</div>
                            <p class="aboutmetext">
                                Mijn plek in de wereld lijkt op het snijvlak van creativiteit en logica te liggen. Alle
                                projecten zijn een probleem dat moet worden opgelost, of het nu om ontwerp of code gaat
                                - alleen de tools veranderen. Mijn proces is iteratief;
                                Ik benader elk probleem als een leerervaring die de rest van het project informeert, wat
                                betekent dat ik de neiging heb om niet te vertrouwen op volledige ontwerpmodellen.
                            </p>
                            <p class="aboutmetext">
                                Meestal maak ik een paar schetsen om een concept uit te werken, en duik ik meteen in een
                                werkend prototype dat veel flexibeler is dan heen en weer springen tussen code en
                                Photoshop.
                                Door mijn formele kunst- en designopleiding(mbo) heb ik geleerd goed na te denken over
                                mijn publiek en welke ervaring ik met mijn werk wil opdoen. Wie bezoekt uw site? Waar
                                zoeken zij naar? Hoe vinden ze het? Welke analyses zijn beschikbaar om onze beslissingen
                                op te baseren?
                                <br><br>
                                Hoewel mijn focus ligt op responsieve websites voor mobiele apparaten met HTML,
                                JavaScript, SASS, PHP en MySQL. Ik heb ook gewerkt met Java, Laravel en C#/ Unity3D.
                            </p>
                            <p class="aboutmetext">
                                Ik experimenteer altijd, leer altijd en verveel me nooit.
                            </p>
                            <ul class="personal-info">
                                <li><strong>Wish me on:</strong> <span>18 May 2000</span></li>
                                <li><strong>Website:</strong> <span>Coming soon...</span></li>
                                <li><strong>Hoe oud ben ik?:</strong> <span>20</span></li>
                                <li><strong>Waar woon ik?:</strong> <span>Helmond</span></li>
                                <li><strong>Bel me op:</strong> <span>+31 6 40516301</span></li>
                                <li><strong>Studies:</strong> <span>Klaar met MBO, bezig met HBO(Bachelors)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    <section id="portsection" class="portsection">
        <div class="section-title-about" data-aos="fade-right" data-aos-duration="5000">
            <h2>Portfolio</h2>
        </div>
        <div class="port-container" data-aos="flip-left">
            <div class="port-card">
                <a class="leeruitkomst-url" href="im.php">
                    <img class="card-img" src="img/im.jpg" alt="Interactive Media">
                    <h1>Interactive Media</h1>
                </a>
            </div>
            <div class="port-card">
                <a class="leeruitkomst-url" href="dev.php">
                    <img class="card-img" src="img/dev.jpg" alt="Development">
                    <h1>Development</h1>
                </a>
            </div>
            <div class="port-card">
                <a class="leeruitkomst-url" href="design.php">
                    <img class="card-img" src="img/des.jpg" alt="Design">
                    <h1>Design</h1>
                </a>
            </div>
            <div class="port-card">
                <a class="leeruitkomst-url" href="research.php">
                    <img class="card-img" src="img/res.jpg" alt="Research">
                    <h1>Research</h1>
                </a>
            </div>
            <div class="port-card">
                <a class="leeruitkomst-url" href="com.php">
                    <img class="card-img" src="img/com.jpg" alt="Communication">
                    <h1>Communication</h1>
                </a>
            </div>
            <div class="port-card">
                <a class="leeruitkomst-url" href="pi.php">
                    <img class="card-img" src="img/pi.jpg" alt="Professional Identity">
                    <h1>Professional Identity</h1>
                </a>
            </div>
        </div>
    </section>
    <!-- End #main -->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>

    <script>
    AOS.init();
    </script>

</body>

</html>