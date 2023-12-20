<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Contact | Thibaut Weibel</title>
    
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

    <div class="contact">

        <div class="contact-form">
            <h2>Contactez <span>moi</span></h2>
            <p>Je suis disponible par mail juste ici :</p>
            <form method="post">
                <input name="nom" type="" placeholder="Votre nom" required>
                <input name="mail" type="email" name="email" id="" placeholder="Votre mail" required>
                <input name="objet" type="" placeholder="Objet du message" required>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Votre message..." required></textarea>
                <input type="submit" name="" value="Envoyer" class="btn">
            </form>
        </div>
    </div>
    
    <?php
    if (isset($_POST['message'])) {
        $message = "Message envoyé depuis la page contact de votre Portolio :
        
    Nom : " . $_POST['nom'] . "
    Email : " . $_POST['mail'] . "
    Message : " . $_POST['message'];

        $retour = mail('thibaut.wbl@gmail.com', $_POST['objet'], $message, "Reply-to:" . $_POST['mail'] );
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>

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