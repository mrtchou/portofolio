
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Développeur web freelance et créateur de site internet. Developpeur web creation de site web internet professionnel bonne qualite. Développeur web freelance réation ou refonte de site internet, intégration, référencement." />
		<meta name="author" content="Saidkhaj mrTchou bepag digital">
		<meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://bepag.fr/" />
		<meta property="og:title" content="Développeur web freelance - Création site internet" />
    <meta property="og:description" content="Développeur web freelance et créateur de site internet. Développement web, création ou refonte de site internet, intégration, référencement" />
    <link rel="canonical" href="https://bepag.fr/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3ee1cc3628.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9293dfa0d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css" />
    <title>Bepag Digital - Formulaire de contact</title>
    <link rel="shortcut icon" type="image/png" href="../img/icons/favicon.webp" />
  </head>
  <body>
    <header>
      <section class="logo">
        <!-- <a href="../index.html">
            <img src="" alt="logo du site de mister Tchou Khan" />
          </a> -->
      </section>
    </header>
    <section class="navbar">
      <nav>
        <ul class="liste-nav">
          <a href="#">
            <li class="item">
              Accueil
            </li>
          </a>
          <!-- <a href="#myServices">
            <li class="item">
              Services
            </li>
          </a> -->
          <a href="#pricing">
            <li class="item">
              TARIFS
            </li>
          </a>
          <li class="item connexion">
            <a href="#informationsLegales" class="connexion">
              <img src="https://img.icons8.com/ios/31/000000/circled-b.png"/>
              <span>
                <img src="https://img.icons8.com/ios/21/000000/circled-e.png"/>
                <img src="https://img.icons8.com/ios/21/000000/circled-p.png"/>
                <img src="https://img.icons8.com/ios/21/000000/circled-a.png"/>
                <img src="https://img.icons8.com/ios/21/000000/circled-g.png"/>
              </span>
            </a>
          </li>
          <!-- barre sert pour menu mobile media queries-->
          <div class="btn-responsive-menu">
            <div class="lignesNav"></div>
            <div class="lignesNav"></div>
            <div class="lignesNav"></div>
          </div>
        </ul>
      </nav>
    </section>
    <section class="content">
        <div class="contact">
            <!-- formulaire de contact relier au code PHP ci dessous-->
            <form method="post">
                <h1>Contactez-nous</h1>
                <div class="separation"></div>
                <div class="corps-formulaire">
                    <div class="left">
                    <div class="groupe">
                        <label>Votre Prénom</label>
                        <input type="text" name="prenom" />
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="groupe">
                        <label>Votre adresse e-mail</label>
                        <input  type="email" name="email" required />
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="groupe">
                        <label>Votre téléphone</label>
                        <input type="number" name="phone" />
                        <!-- <i class="fas fa-mobile"></i> -->
                        <i class="fas fa-phone"></i>
                    </div>
                    </div>

                    <div class="droite">
                    <div class="groupe">
                        <label>Message</label>
                        <textarea name="message" required placeholder="Saisissez ici..."></textarea>
                    </div>
                    </div>
                </div>
                <div class="pied-formulaire" align="center">
                    <button>Envoyer le message</button>
                </div>
            </form>
            <!-- partie du code PHP pour l'envoie du mail via le formulaire du site -->
            <?php
            if (isset($_POST['message'])) {
                $entete  = 'MIME-Version: 1.0' . "\r\n";
                $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $entete .= 'From: contact@bepag.fr' . "\r\n";
                $entete .= 'Reply-to: ' . $_POST['email'];
                $message = '<h4>Formulaire de contact Bepag Digital </h4>
                <p>
                <b>Prenom : </b>' . htmlspecialchars($_POST['prenom']) . '</p>
                <b>Telephone : </b>' . htmlspecialchars($_POST['phone']) . '</p>
                <b>Email : </b>' . $_POST['email'] . '<br>
                <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';
                $retour = mail('kirova@live.fr', 'Envoi depuis page Contact', $message, $entete);
                if($retour)
                    echo '<p class="succesMessageSend">Votre message a bien été envoyé.</p>';
            }
            ?>
        </div>
    </section>
        <footer>
          <div class="footerPart1">
              <ul class="footerContact">
              <p id="contact">CONTACT</p>
              <li>
                  <i class="fa fa-envelope-o"></i>
                  <a href="mailto:contact@bepag.fr">
                  <span class="footerEmail">contact@bepag.fr</a></span>
              </li>
              <li><a href="https://goo.gl/maps/vzJRRPh58jEYDUZx9"><i class="fa fa-map-marker"></i><span class="footerEmail">Paris</a></span></li>
              <li><a href="https://www.linkedin.com/in/mrtchou/"><i class='fab fa-linkedin'></i><span class="footerEmail">Linkedin</a></span></li>
              <li><a href="https://github.com/mrtchou"><i class='fab fa-github'></i><span class="footerEmail">GitHub</a></span></li>
              </ul>
              <ul class="footerOther">
              <p id="informationsLegales">Informations Légales</p>
              <li><a href="./pages/mentionsLegale.html">Mentions Legales</a></li>
              <li><a href="./pages/cgu.html">CGU</a></li>
              <!-- <li><a href="https://www.linkedin.com/in/mrtchou/">Conditions générales d’utilisation</a></li>
              <li><a href="https://www.linkedin.com/in/mrtchou/">Conditions générales de vente</a></li>
              --></ul>
          </div>
          <a href="#"><p class="footerRemonter"><img src="../img/icons/fleche-haut.webp"/></p></a>
          <p class="footerCopyright">© Copyright 2022<span class="nomSite">Bepag Digital</span><br/>All rights reserved</p>
        </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="./js/jquery.min.js" type="text/javascript" ></script>
    <script defer src="./js/index.js"></script>
  </body>
</html>