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
    <section>
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

    <!-- BOUTIQUE
========================================-->

    <h2 style="text-decoration: underline;">Boutique 2021</h2>

    <!--Paragraphe introduction-->
    <section id="texte_p">
        <p>Bienvenue sur la boutique ARB-Performances.<br>
            <br>
            Vous trouverez sur cette page les vêtements officiels du Team mais aussi des Goodies.<br>
            Les commandes et les paiements sont sécurisés. <br>
            <br>
            Après votre commande vous recevrez un mail de confirmation.<br>
            <br>
            Vos achats seront à retirer directement auprès de ARB-Performances (circuits ou atelier)
            mais peuvent aussi êtres adressés par courrier (frais de port en sus).<br>
    </section>

    <!--POLO HOMME-->

    <section class="articles poloH">
        <div class="image_produit">
            <img class="article" src="../ressources/images/Boutique/POLO-ARB.jpg" alt="polo homme">
        </div>
        <div class="Description_produit">
            <h5>POLO ARB HOMME - 35€</h5>
            <p>description du produit:<br>
                <br>
                Maille piquée 200, 100% coton, coupe ajustée, couleur bleu marine
                Fine bande rayée bicolore à l’encolure + sur la patte de boutonnage + aux fentes latérales + tag bas de
                manche
            </p>
            <div class="lien_taille">
                <a href="">Guide des tailles</a>
            </div>
        </div>
        <div class="boutton_produit">
            <input type="texte" id="Taille" placeholder="Taille">
            <input type="texte" id="Quantité" placeholder="Quantité">
            <button class="Ajouter">Ajouter au panier</button>
        </div>
    </section>

    <!--POLO FEMME-->

    <section class="articles poloF">
        <div class="image_produit">
            <img class="article" src="../ressources/images/Boutique/POLO-ARB.jpg" alt="polo femme">
        </div>
        <div class="Description_produit">
            <h5>POLO ARB FEMME - 35€</h5>
            <p>description du produit:<br>
                <br>
                Maille piquée 200, 100% coton, coupe ajustée, couleur bleu marine
                Fine bande rayée bicolore à l’encolure + sur la patte de boutonnage + aux fentes latérales + tag bas de
                manche
            </p>
            <div class="lien_taille">
                <a href="">Guide des tailles</a>
            </div>
        </div>
        <div class="boutton_produit">
            <input type="texte" id="Taille" placeholder="Taille">
            <input type="texte" id="Quantité" placeholder="Quantité">
            <button class="Ajouter">Ajouter au panier</button>
        </div>
    </section>

    <!--CASQUETTE-->

    <section class="articles casquette">
        <div class="image_produit">
            <img class="article" src="../ressources/images/Boutique/Casquette-ARB.jpg" alt="casquette">
        </div>
        <div class="Description_produit">
            <h5>CASQUETTE ARB - 20€</h5>
            <p>description du produit:<br>
                <br>
                La casquette type Baseball fera son effet dans les paddocks ou même pendant vos vacances à l’abris du
                soleil. Coupe ajustée et visière courbée.
                <br>
                Disponible en Noir ou Bleu.
            </p>
        </div>
        <div class="boutton_produit">
            <input type="texte" id="Couleur" placeholder="Couleur">
            <input type="texte" id="Quantité" placeholder="Quantité">
            <button class="Ajouter">Ajouter au panier</button>
        </div>
    </section>

    <!--BONNET-->

    <section class="articles bonnet">
        <div class="image_produit">
            <img class="article" src="../ressources/images/Boutique/Bonnet-ARB.jpg" alt="bonnet">
        </div>
        <div class="Description_produit">
            <h5>BONNET ARB - 20€</h5>
            <p>description du produit:<br>
                <br>
                Le bonnet pompon est incontournable pour la saison hivernale ou les moments de fraîcheur.<br>
                Coupe ajustée.
                <br>
                Disponible en Noir ou Bleu.
            </p>
        </div>
        <div class="boutton_produit">
            <input type="texte" id="Couleur" placeholder="Couleur">
            <input type="texte" id="Quantité" placeholder="Quantité">
            <button class="Ajouter">Ajouter au panier</button>
        </div>
    </section>

    <!--HORLOGE-->

    <section class="articles horloge">
        <div class="image_produit">
            <img class="article" src="../ressources/images/Boutique/Horloge-ARB.jpg" alt="horloge">
        </div>
        <div class="Description_produit">
            <h5>HORLOGE ARB - 20€</h5>
            <p>description du produit:<br>
                <br>
                Le Team utilise cette horloge dans son box pour s’assurer de sa ponctualité sur la grille
                de départ! Vous aussi ressentez l’émotion de la course en regardant ces 3 aiguilles sur un fond
                aux couleurs ARB-Performances.
            </p>
        </div>
        <div class="boutton_produit">
            <input type="texte" id="Quantité" placeholder="Quantité">
            <button class="Ajouter">Ajouter au panier</button>
        </div>
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
</body>

</html>