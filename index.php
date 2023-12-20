<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Accueil | Thibaut Weibel</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="pragma" content="no-cache">
    <?php header("Cache-Control:no-cache"); ?>
    
    <link rel="stylesheet" type="text/css" href="css/styles.css?<?php echo time(); ?>">
    
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body>

    <header>
        <nav class="navbar">
            <img src="img/thibaut2.png" class="photo">
            <h2 class="logo">Thibaut<span> Weibel</span></h2>
            <div class="nav-links">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="Experience.php">Parcours</a></li>
                    <li><a href="Passions.php">Centres d'intérêt</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                </ul>
            </div>

            <a href="https://www.ece.fr/" class="btn">Mon école</a>
            <img src="img/menu_btn.png" alt="menu hamburger" class="menu-hamburger">

            <script>
                const menuHamburger = document.querySelector(".menu-hamburger")
                const navLinks = document.querySelector(".nav-links")
                menuHamburger.addEventListener('click', () => {
                    navLinks.classList.toggle('mobile-menu')
                })
            </script>
        </nav>

    </header>

    <div class="presentation">
        <div class="content">
            <h4>Bonjour, je suis</h4>
            <h1 style="margin-left:-2px;">Thibaut <span>Weibel</span></h1>
            <h4>Étudiant en école d'ingénieur à l'ECE Paris en majeure Objets Connectés, Réseaux & Services.</h4>
        </div>
    </div>


    <section class="about">

        <div class="main">
            <img src="img/thibaut.jpg">
            <div class="about-text">
                <h3>Qui suis-je ?</h3>
                <h5><span>Étudiant en école d'ingénieur</span></h5>
                <p>Je m'appelle Thibaut Weibel, j'ai 21 ans et je suis étudiant en 4<sup>e</sup> année d'école d'ingénieur à
                    l'ECE Paris en majeure OCRES (Objets Connectés Réseaux & Services).
                    J'ai choisi cette majeure car je suis passionné de sport et j'aimerais trouver un travail alliant
                    sport et ingénierie. Durant mes études j'ai eu la chance de faire un semestre à l'étranger
                    à New York dans l'université Baruch College, qui m'a aidé à me sentir plus à l'aise en anglais et
                    à acquérir de nouvelles compétences. Ces dernières années m'ont aussi permis d'acquérir une expérience
                    professionnelle grâce notamment aux différents stages que j'ai pu faire chez Darty ou encore dans une
                    Fonderie où j'ai travaillé comme Concepteur/Développeur d'une application.
                </p>
                <a href="Experience.php" class="btn">Mon parcours</a>
                <a href="CV Thibaut WEIBEL_FR.pdf" download class="btn" style="margin-left: 30px;">CV</a>
            </div>
        </div>
    </section>

    <div class="service">
        <div class="title">
            <h2>Mes centres d'intérêt</h2>
        </div></br></br></br>

        <div class="box">
            <div class="card">
                <i class="far fa-futbol"></i>
                <h5>Football</h5>
                <div class="pra">
                    <p>Depuis toujours, je suis passionné de sport et plus particulièrement de football,
                        je regarde et m'informe beaucoup sur le football européen.Je partage cette passion avec
                        plusieurs de mes amis et nous jouons ensemble pour représenter notre école.
                    </p>
                    <p style="text-align: center;">
                        <a class="button" href="Passions.php#foot">En savoir plus</a>
                    </p>
                </div>
            </div>

            <div class="card">
                <i class="fa fa-users"></i>
                <h5>Manager</h5>
                <div class="pra">
                    <p>Durant mes études, j'ai pu travailler sur de nombreux projets de groupe dans divers domaines et
                        j'ai découvert que j'aimais beaucoup manager. Le mot passion est sans doute fort mais
                        j'apprécie fortement tirer le meilleur de chaque personne lors d'un projet.</p>
                    <p style="text-align: center;">
                        <a class="button" href="Passions.php#manager">En savoir plus</a>
                    </p>
                </div>
            </div>

            <div class="card">
                <i class="fas fa-headphones"></i>
                <h5>Musique</h5>
                <div class="pra">
                    <p>La musique est très importante pour moi car elle m'accompagne tout au long de la journée. Je peux
                        l'écouter dans les transports, chez moi, en travaillant ou encore en faisant du sport. Grâce à
                        elle j'arrive à être plus productif et concentré.</p>
                    <p style="text-align: center;">
                        <a class="button" href="Passions.php#music">En savoir plus</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll_to_top">
        <a href="#top"><img src="img/scroll.jpg" alt="Retourner en haut" /></a>
    </div>

    <footer>
        <div class="social">
            <a href="https://www.facebook.com/profile.php?id=100004305105044"><i class="fab fa-facebook-f"></i></a>
            <a href="https://github.com/TiboWbl"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/thibaut-weibel-aaba6519b/"><i class="fab fa-linkedin"></i></a>
        </div>
        <p class="end">Copyright &copy;2022 Thibaut Weibel</p>

    </footer>

</body>

</html>