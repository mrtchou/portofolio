<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="developpeur web creation de site web internet professionnel bonne qualite"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <script
      src="https://kit.fontawesome.com/3ee1cc3628.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;800&display=swap"
      rel="stylesheet"
    />
    <title>Contactez-Nous</title>
    <link rel="shortcut icon" type="image/png" href="../img/icons/favicon.webp" />
    <link
      href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap"
      rel="stylesheet"
    />
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
          <a href="../index.html">
            <li class="item">Accueil</li>
          </a>
          <a href="../index.html#myServices">
            <li class="item">Services</li>
          </a>
          <a href="../index.html#pricing">
            <li class="item">TARIFS</li>
          </a>
          <li class="item connexion">
            <a href="#informationsLegales" class="connexion">
              <img src="https://img.icons8.com/ios/31/000000/circled-b.png" />
              <span>
                <img src="https://img.icons8.com/ios/21/000000/circled-e.png" />
                <img src="https://img.icons8.com/ios/21/000000/circled-p.png" />
                <img src="https://img.icons8.com/ios/21/000000/circled-a.png" />
                <img src="https://img.icons8.com/ios/21/000000/circled-g.png" />
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
        <main>
            <section>
                <span class="anchor" id="contact"></span>
                <div >
                    <!-- <h4>CONTACT</h4>
                    <div>
                        <ul>
                            <h5>Pour m'écrire:</h5>
                            <br/><br/><br/>
                            <li>contact@bepag.fr<br/><br/><br/></li>
                            <li><a href="mailto:contact@bepag.fr">Pour m'écrire avec votre messagerie<br/> cliquez sur ce lien !</a></li>
                        </ul>
                    </div> -->
                    <!-- <form method="post">
                            <label>Votre email</label>
                            <input type="email" name="email" required>
                            <label>Message</label>
                            <textarea name="message" required></textarea>
                            <input type="submit">
                        </form> -->
                        <form>
                            <h1>Contactez-nous</h1>
                            <div class="separation"></div>
                            <div class="corps-formulaire">
                                <div class="gauche">
                                <div class="groupe">
                                    <label>Votre Prénom</label>
                                    <input type="text" autocomplete="off" />
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="groupe">
                                    <label>Votre adresse e-mail</label>
                                    <input type="text" autocomplete="off" />
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="groupe">
                                    <label>Votre téléphone</label>
                                    <input type="text" autocomplete="off" />
                                    <i class="fas fa-mobile"></i>
                                </div>
                                </div>

                                <div class="droite">
                                <div class="groupe">
                                    <label>Message</label>
                                    <textarea placeholder="Saisissez ici..."></textarea>
                                </div>
                                </div>
                            </div>

                            <div class="pied-formulaire">
                                <button>Envoyer le message</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['message'])) {
                            $entete  = 'MIME-Version: 1.0' . "\r\n";
                            $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                            $entete .= 'From: contact@bepag.fr' . "\r\n";
                            $entete .= 'Reply-to: ' . $_POST['email'];

                            $message = '<h1>Message envoyé depuis https://bepag.fr</h1>
                            <p><b>Email : </b>' . $_POST['email'] . '<br>
                            <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

                            $retour = mail('kirova@live.fr', 'Envoi depuis page Contact', $message, $entete);
                            if($retour)
                                echo '<p>Votre message a bien été envoyé.</p>';
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
                        <li><a href="./mentionsLegale.html">Mentions Legales</a></li>
                        <li><a href="./cgu.html">CGU</a></li>
                        <!-- <li><a href="https://www.linkedin.com/in/mrtchou/">Conditions générales d’utilisation</a></li>
                        <li><a href="https://www.linkedin.com/in/mrtchou/">Conditions générales de vente</a></li>
                    --></ul>
                    </div>
                    <a href="#"><p class="footerRemonter"><img src="../img/icons/fleche-haut.webp"/></p></a>
                    <p class="footerCopyright">© Copyright 2022<span class="nomSite">Bepag Digital</span><br/>All rights reserved</p>
                </footer>
        </main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script src="../js/jquery.min.js" type="text/javascript" ></script>
        <script defer src="../js/index.js"></script>
    </body>
</html>