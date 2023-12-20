<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Parcours | Thibaut Weibel</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="pragma" content="no-cache" />
    
    <link rel="stylesheet" type="text/css" href="css/styles.css?<?php echo time(); ?>">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <div class="container">
        <a href="#" class="toggleBox">
            <span class="icon"></span>
        </a>
        <ul class="navItems">
            <li>
                <a href="#etudes">
                    <i class="fas fa-user-graduate" style="--i:1"></i>
                    <span style="--g:1">Parcours Scolaire</span>
                </a>
            </li>
            <li>
                <a href="#pro">
                    <i class="fas fa-user-tie" style="--i:1"></i>
                    <span style="--g:1">Expériences Professionnelles</span>
                </a>
            </li>
            <li>
                <a href="#skills">
                    <i class="fas fa-diagnoses" style="--i:1"></i>
                    <span style="--g:1">Compétences</span>
                </a>
            </li>
            <li>
                <a href="#langues">
                    <i class="fas fa-globe-americas" style="--i:1"></i>
                    <span style="--g:1">Langues</span>
                </a>
            </li>

        </ul>

        <script>
            var toggleClick = document.querySelector(".toggleBox");
            var container = document.querySelector(".container");
            toggleClick.classList.toggle('active');
            container.classList.toggle('active');
            toggleClick.addEventListener('click', () => {
                toggleClick.classList.toggle('active');
                container.classList.toggle('active');
            })
        </script>

    </div>

    <div class="navbarver">

        <section class="parcours" id="etudes">
            <h2>Mon parcours scolaire</h2>
            </br>
 
            <ul>
                <li> <h4>ECE Paris - Master 1 - Majeure Objets Connectés, Réseaux & Services</h4></li></br>
                <li> <p>Les matières principales :</p></li></br>
                <li>➢ Technologie Web (React, MongoDB, HTML, CSS, JavaScript, Express, Node)</li>
                <li>➢ IoT (Arduino, MySQL)</li>
                <li>➢ UX/UI Design (Figma)</li>
                <li>➢ Réseaux IP & Routage (Cisco Packet Tracer)</li>
            </ul></br>
                <ul>
                    <li> <h4>Baruch College, New York City | Semestre à l'étranger</h4></li></br>
                    <li> <p>Les matières principales :</p></li></br>
                    <li>➢ Introduction to Artificial Intelligence</li>
                    <li>➢ Intelligent Robotics</li>
                    <li>➢ Electronic Engineering</li>
                    <li>➢ Professional Communication</li>
                    <li>➢ Renewable Energy Sources</li></br>
                    <li>Moyenne obtenue : 18,6/20</li>
                </ul></br>
                <ul>
                    <li> <h4>Lycée Hélène Boucher - Paris 20ème | 2016 - 2019</h4> </li></br>
                    <li> <p>Baccalauréat Scientifique Mention Assez Bien</p></li></br>
                    <li>➢  Spécialité Mathématiques</li>
                    <li>➢  Option Européenne Espagnol</li>
                </ul></br>
                <ul>
                    <li> <h4>Collège Hélène Boucher - Paris 20ème | 2012 - 2016</h4> </li></br>
                    <li> <p>Brevet Mention Bien</p></li></br>
                </ul>
                
            </ul>

        </section>

        <section class="xp" id="pro">
            <h2>Mon expérience professionnelle</h2>
            </br>

            <h4>Chef de projet - Développement d'une application de mise en relation Acheteur/Vendeur (2022-2023)</h4></br>
            <div> 50 000, c’est l’estimation du nombre de vide-greniers organisés chaque année en France. Pour certains ces braderies 
                représentent une vraie chasse au trésor. Malheureusement, il est très difficile de parcourir l’ensemble des exposants 
                pouvant potentiellement répondre à leurs attentes. Surfant sur l’affect que procure la recherche d’objets pour cette 
                catégorie de personnes, le projet permettra de mettre en relation les offreurs et les demandeurs avec positionnement GPS.</div></br>
                
            <h4>Développeur / Concepteur WinDev - Fonderie de Niederbronn (2022)</h4></br>
            <p>Fonderie de Niederbronn, Niederbronn-les-bains 67110</p><br>
            <div> Conception d'une application WinDev visant à aider le personnel de la fonderie pour la récupération et
                l'enregistrement de données liées aux essais de résistances des matériaux.</div></br></br>


            <h4>Assistant Logistique - Darty Nation (2021)</h4></br>
            <p> Mes missions étaient :</p></br>
            <ul>
                <li>➢ Gestion du click&collect</li>
                <li>➢ Récupération de livraisons</li>
                <li>➢ Accueil des clients au comptoir </li>
                <li>➢ Validation informatique de livraisons </li>
            </ul>
        
        </section>

        <section class="xp" id="skills">
            <h2>Mes compétences</h2>
            </br>
            <h4>Hard Skills : </h4></br>
            <ul>
                <li>➢ Développement Web (HTML, CSS, JavaScript, React.js)</li>
                <li>➢ Développement IoT (Arduino)</li>
                <li>➢ Langages informatiques : C, C++, Java </li>
                <li>➢ MySQL</li>
                <li>➢ UX/UI Design (Figma)</li>
                <li>➢ Logiciels : Visual Studio Code, Proteus, NetBeans, phpMyAdmin </li>
                <li>➢ WinDev </li></br>
            </ul></br>

            <h4>Soft Skills : </h4></br>
            <ul>
                <li>➢ Esprit d'équipe</li>
                <li>➢ Management</li>
                <li>➢ Sens du service </li>
                <li>➢ Communication</li>
                <li>➢ Motivation</li>
                <li>➢ Curiosité</li>
                <li>➢ Fiabilité</li>
            </ul></br>
        </section>

        <section class="langue" id="langues">
            <h2>Langues</h2>
            </br>
            <h4>Français </h4></br>
            <div>Langue maternelle</div></br>

            <h4>Anglais </h4></br>
            <div>TOEIC : 855/990 (Niveau B2)</div></br>

            <h4>Espagnol </h4></br>
            <div>Option Européenne Espagnol au Baccalauréat</div></br>
            <div>Niveau B2</div>

        </section>

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