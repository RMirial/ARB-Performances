<!DOCTYPE html>
<html>

<head>

    <title>ARB-Performances</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--ICONES-->

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!--STYLES-->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" media="screen and (min-width: 901px)" href="../CSS/StyleDesktop.css">
    <link rel="stylesheet" media="screen and (max-width: 900px)" href="../CSS/StyleTablette.css" />
    <link rel="stylesheet" media="screen and (max-width: 700px)" href="../CSS/StyleMobile.css">

    <!--FONTS-->

    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">

</head>

<!--HEADER
========================================-->

<body>
    <section id="navbar">
        <div class="header">
            <div class="logo">
                <a href="index.html"><img src="../ressources/images/logo_arb/logoarb.JPG"></a>
            </div>
            <div id="rectangle">
                <nav role="navigation">
                    <div id="menuToggle">
                        <input type="checkbox" />
                        <span></span>
                        <span></span>
                        <span></span>
                        <ul id="menu">
                            <li><a href="Actualites.html">ACTUALITÉS</a></li>
                            <li><a href="Partenaires.html">PARTENAIRES</a></li>
                            <li><a href="Team.html">LE TEAM</a></li>
                            <li><a href="Calendrier.html">CALENDRIER</a></li>
                            <li><a href="Moto.html">MOTO</a></li>
                            <li><a href="Galerie.html">GALERIE</a></li>
                            <li><a href="Boutique.html">BOUTIQUE</a></li>
                            <li><a href="Adhesions.html">ADHESIONS & DONS</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
        </div>
    </section>

    <!-- ACCUEIL
========================================-->

<section id="formulaire_participe">

    <h1>Je participe !</h1>
    
            <?php require_once "Formulaire.php"?>

<h2>Vous souhaitez participer à un évènement ?</h2>

       
        <form id="formulaire" method="POST" action="">
            
            <!-- Nom et prénom -->
            <div class="form">
                <div class="contact-form1">
                    <label>Nom :</label>
                    <input type="text" name="name" placeholder="Votre nom" value="<?php if(isset($name)) { echo $name; } ?>" /><br /> <br />
                </div>

                <div style="margin-left:5%" class="contact-form1">
                    <label>prénom :</label>
                    <input type="text" name="lastname" placeholder="Votre prénom" value="<?php if(isset($lastname)) { echo $lastname; } ?>" /><br /><br />
                </div>
            </div>
            <!-- Email et tel -->
            <div class="form">
                <div class="contact-form1">
                    <label>Email :</label>
                    <input type="email" name="email"  placeholder="Votre email" value="<?php if(isset($email)) { echo $email; } ?>" /><br /><br />
                </div>

                <div style="margin-left:5%" class="contact-form1">
                    <label>Tel :</label>
                    <input type="text" name="phone"  placeholder="Votre numéro de tel" value="<?php if(isset($phone)) { echo $phone; } ?>" /><br /><br />
                </div>
            </div>
            <!-- dates évènements -->
            <div class="form">
                <div class="contact-form1">
                    <label>Date de début de l'évènement :</label>
                    <input type="text" name="deb-even"  placeholder="--/--/--" value="<?php if(isset($datedeb)) { echo $datedeb; } ?>" /><br /><br />
                </div>

                <div style="margin-left:5%" class="contact-form1">
                    <label>Date de fin de l'évènement :</label>
                    <input type="text" name="fin-even"  placeholder="--/--/--" value="<?php if(isset($datefin)) { echo $datefin; } ?>" /><br /><br />
                </div>
            </div>
            <!-- Message -->
            <h6 style="color: #020753">Merci d'indiquer dans votre message le poste que vous aimeriez occuper</h6>
            <div class="contact-form1">
                <label>Votre message :</label>
                <textarea name="message" placeholder="Votre message"><?php if(isset($message)) { echo $message; } ?></textarea><br /><br />
            </div>
            <center><input class="btn btn-contact" type="submit" value="Envoyer" name="mailform" /></center>

        </form>

    <?php if(isset($msg)) {
     echo $msg;
  }
  ?>

</section>

    <!-- SPONSORS
========================================-->

    <h4>Merci à nos pricipaux sponsors !</h4>

    <section id="sponsors_logo">
        <img src="../ressources/images/sponsors/PGC.jpg" alt="pgc">
        <img src="../ressources/images/sponsors/CREALIS.jpg" alt="crealis">
        <img src="../ressources/images/sponsors/FOST.jpg" alt="fost">
        <img src="../ressources/images/sponsors/Bsearch.jpg" alt="bsearch">
        <img src="../ressources/images/sponsors/Milton-Services.jpg" alt="miltonservices">
        <img src="../ressources/images/sponsors/honda.png" alt="honda">
        <img src="../ressources/images/sponsors/3AS-Racing.jpg" alt="3AS-Racing">
    </section>

    <!--FOOTER
=======================================-->
    <section id="footer">
        <h5>N'hésitez pas à contacter l'équipe ARB-Performances
            <br><a href="#">contact@arb-perfomances.fr</a>
            <br>--</h5>
        <h6>Dévoloppé par <a href="RomainMirial.fr">RomainMirial.fr</a> - 2021</h6>
    </section>

    <!--JAVASCRIPT-->

    <script type="text/javascript" src="../Javascript/App.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
      </script>

</body>

</html>