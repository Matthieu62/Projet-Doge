<!DOCTYPE html>
<html lang="fr">
<head>
    <title>The Dodge Club</title>
<!--Meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="robots, authors, copyright, keywords, distribution, abstract">
    <meta name="robots" content="index, follow">
    <meta name="authors" lang="fr" content="Homerine Deschamps, Damien Crepel & Matthieu Debuire">
    <meta name="copyright" content="Wild Code School">
    <meta name="keywords" lang="Fr" content="Doge, Lille">
    <meta name="distribution" content="global">
    <meta name="abstract" content="Ce site présente le nouveau Doge Club">
<!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
<!-- menu -->
    <link rel="stylesheet" type="text/css" href="menu.css">
<style>
.corps{
  padding-top: 90px;
}

.title_entreprises{
  font-size: 30px;
}

a:link{
  color: black;
}
</style>
</head>
<body>

<?php include ('header.php'); ?>

<div class="corps">
<div class="container-fluid">

    <!--title Entreprises-->
    <div class="col-sm-12 color">
        <h2 class="title_entreprises">Entreprises du Doge Club</h2>
    </div>

    <!--Adista Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/adista.jpg" class="hidden-xs col-sm-5" alt="Adista">
            <h2 class="col-sm-6">Adista</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#adista">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="adista" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Adista</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : 03 57 54 01 22 <br>
                            email : candre@adista.fr <br>
                            Site : Site : <a href=http://www.adista.fr>Adista</a></p>
                    </div>
                    <h4><span>secteur d'activité : </span>Les réseaux & télécoms</h4>

                    <img src="logos/adista.jpg" class="hidden-xs col-sm-5" alt="Adista">
                </div>
                <div class="modal-body">
                    <p>Hébergement, opérateur telecom (VPN, Internet, téléphonie),
                        services distants et infogérés, sécurité informatique, visio conférence
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:candre@adista.fr">contacter</a></button>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
              </div>
            </div>
        </div>



    <!--Axellience Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/axellience.jpg" class="hidden-xs col-sm-5" alt="Axellience">
            <h2 class="col-sm-6">Axellience</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#axellience">En savoir plus</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="axellience" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Axellience</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : +33 3 59 61 07 19 <br>
                            email : contact@axellience.com <br>
                            Site : <a href=http://www.axellience.com/>Axellience</a>
                    </div>
                    <h4><span>secteur d'activité : </span> Editeur de Logiciels</h4>

                    <img src="logos/axellience.jpg" class="hidden-xs col-sm-5" alt="Axellience">
                </div>
                <div class="modal-body">
                    <p>Axellience édite des logiciels qui ont pour objectif de rendre les équipes de développement
                        plus productives.
                        Les outils d’Axellience s’appuient sur des technologie innovantes de modélisation et de
                        génération automatique de code.
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:contact@axellience.com">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                                  </div>
            </div>
        </div>
    </div>

    <!--Critizr Entreprise-->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/critizr.png" class="hidden-xs col-sm-5" alt="Critizr">
            <h2 class="col-sm-6">Critizr</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#critizr">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="critizr" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Critizr</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : 03 59 61 07 17<br>
                            email : team@critizr.com <br>
                            Site : <a href=http://critizr.com/>Critizr</a>
                    </div>
                    <h4><span>secteur d'activité : </span>Editeur de logiciels</h4>

                    <img src="logos/critizr.jpg" class="hidden-xs col-sm-5" alt="Critizr">
                </div>
                <div class="modal-body">
                    <p>Critizr est une solution d’engagement client et de mesure de la satisfaction.
                        Fondée en 2012 par Nicolas Hammer et Thibaut Carlier, la société a pour vocation
                        de faciliter les interactions entre les enseignes physiques multicanal et leurs clients.
                        Critizr renouvelle la relation client à travers son application « Appelez-moi le directeur »,
                        qui permet aux consommateurs de s’adresser directement aux responsables de points de vente.
                        Une question sur un produit, une suggestion, un problème lors d’un achat ?
                        Plus besoin de faire la queue en magasin sans savoir à qui s’adresser, fini le remplissage de
                        formulaires à rallonge. En 2015, 650 000 utilisateurs
                        des services Critizr ont envoyé près de 1,5 millions de feedbacks aux enseignes.
                        Grâce au déploiement de son dispositif, qui s’intègre également à l’ensemble de l’écosystème
                        des entreprises (application mobile, page web, page Facebook, email, SMS…), Critizr fait parler
                        les clients et permet de collecter des informations précieuses source de management, de
                        fidélité,
                        de recommandation ou encore d’innovation.
                        Agissant comme tiers de confiance de la relation client, Critizr permet de mieux collecter,
                        traiter et valoriser les feedbacks clients (verbatims, notations, NPS…).
                        Les plus grandes entreprises françaises font confiance à Critizr
                        (Carrefour, Total, SNCF, Darty…) et ces dernières améliorent la satisfaction et l’expérience de
                        leurs clients grâce à l’engagement client.
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:team@critizr.com">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>

                </div>
            </div>
        </div>
    </div>

    <!--Drawer Entreprise-->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/drawer.jpg" class="hidden-xs col-sm-5" alt="Drawer">
            <h2 class="col-sm-6">Drawer</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#drawer">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="drawer" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Drawer</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : +33(0)811 380 680﻿<br>
                            email : tcontact@drawer.fr<br>
                            Site : <a href=https://www.drawer.fr>Drawer</a>
                    </div>
                    <h4><span>secteur d'activité : </span>E-commerce, Pure Players</h4>

                    <img src="logos/drawer.jpg" class="hidden-xs col-sm-5" alt="Drawer">
                </div>
                <div class="modal-body">
                    <p> www.drawer.fr c’est un cocktail en ligne trendy et revigorant de mobilier
                        et déco design à prix tout doux. La famille Drawer qui compte plus de 2000
                        chaises, canapés, tabourets, tables et tables basses, tapis et cadres déco,
                        lampadaires et buffets designs, s’agrandit jour après jour.
                        S’inspirant de l’univers de l’édition haut de gamme, des tendances et des grands
                        designers de mobilier, Drawer invente des histoires avec ses produits et propose de
                        réinventer notre cadre de vie avec originalité et du « design for all » !
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:tcontact@drawer.fr">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Effipilot Entreprise-->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/effipilot.png" class="hidden-xs col-sm-5" alt="Effipilot">
            <h2 class="col-sm-6">Effipilot</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#effipilot">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="effipilot" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Effipilot</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : 03 51 08 11 63<br>
                            email : communication@effipilot.com<br>
                            Site : <a href=https://www.effipilot.com/>Effipilot</a>
                    </div>
                    <h4><span>secteur d'activité : </span>Edition de logiciels</h4>

                    <img src="logos/effipilot.png" class="hidden-xs col-sm-5" alt="Effipilot">
                </div>
                <div class="modal-body">
                    <p> effiPilot, le pilote automatique de l’énergie, est une solution innovante
                        qui intègre des algorithmes pour apporter un surplus d’intelligence aux
                        bâtiments, maximiser le confort des occupants, faciliter l’exploitation et
                        maîtriser les dépenses énergétiques.Fondée en 2011, effiPilot est une startup de
                        11 personnes qui aide les entreprises et collectivités à réduire la consommation
                        d’énergie de leurs bâtiments grâce au digital.
                        Basée à EuraTechnologies, elle adresse les domaines du numérique, du bâtiment et
                        du Développement Durable.
                        Editrice d’un logiciel SaaS, effiPilot permet à ses clients de reprendre la maîtrise
                        des énergies et d’opérer la transition numérique des parcs de bâtiments et de leur gestion en
                        lien avec les acteurs du métier.Les résultats générés sont des économies d’énergie de 25%,
                        des gains en efficacité opérationnelle et
                        un maximum de confort.
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:communication@effipilot.com">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Giroptic Entreprise-->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/giroptic.jpg" class="hidden-xs col-sm-5" alt="Giroptic">
            <h2 class="col-sm-6">Giroptic</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#giroptic">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="giroptic" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Giroptic</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : 0825 000 360<br>
                            email : contact@giroptic.com<br>
                            Site : <a href=http://www.giroptic.com>Giroptic</a>
                    </div>
                    <h4><span>secteur d'activité : </span>E-commerce, Le digital e-commerce</h4>

                    <img src="logos/giroptic.jpg" class="hidden-xs col-sm-5" alt="Giroptic">
                </div>
                <div class="modal-body">
                    <p>Basée à Lille et San Francisco, Giroptic est une startup française,
                        et un leader mondial de l’imagerie en 360°. Sa mission est de permettre
                        au grand public de communiquer, capturer et partager ses expériences de vie
                        de la façon la plus immersive possible, grâce à des produits et services
                        innovants. Fondée en 2008, c’est une pionnière dans ce domaine, notamment
                        avec sa technologie brevetée de fusion d’image en temps réel.
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:contact@giroptic.com">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Homido Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/homido.jpg" class="hidden-xs col-sm-5" alt="Homido">
            <h2 class="col-sm-6">Homido</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#homido">
                En savoir plus
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="homido" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Homido</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : <br>
                            email : info@homido.com <br>
                            Site : <a href=http://homido.com/>Homido</a>
                    </div>
                    <h4><span>secteur d'activité : </span>Réalité virtuelle</h4>

                    <img src="logos/homido.jpg" class="hidden-xs col-sm-5" alt="Homido">
                </div>
                <div class="modal-body">
                    <p>Homido est une entreprise avec une équipe de professionnels expérimentés dans les domaines
                        de la réalité virtuelle, du développement d'applications mobiles, du cinéma 3D, de la
                        conception de produits, de la fabrication et de la logistique. Le siège d'Homido se trouve
                        à Lille, au nord de la France, et a également son siège en Chine, dans la région de Shanghai. Du
                        développement haut de gamme de la conception et de l'élaboration des applications françaises à
                        la production de matériel en Chine, toute la chaîne de produits Homido est détenue à un niveau
                        exceptionnellement élevé pour apporter une qualité et une fiabilité aux utilisateurs.
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:info@homido.com">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Itelios Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/itelios.png" class="hidden-xs col-sm-5" alt="Itelios">
            <h2 class="col-sm-6">Itelios</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#itelios">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="itelios" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Itelios</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : +33 (0)3 20 09 00 95<br>
                            email : <br>
                            Site : <a href=http://www.itelios.com>Itelios</a>
                    </div>
                    <h4><span>secteur d'activité : </span>Conseils en E-commerce</h4>

                    <img src="logos/itelios.png" class="hidden-xs col-sm-5" alt="Itelios">
                </div>
                <div class="modal-body">
                    <p>ITELIOS vous accompagne dans vos initiatives de commerce digital et cross-canal
                        en vous permettant de:
                        – Construire les plates-formes e-commerce, web et sociales adaptées aux enjeux du multi-canal
                        et aux usages de vos clients,
                        – Faire la différence en concevant avec vous des applications mobiles à forte valeur ajoutée,
                        – Comprendre et fidéliser vos clients en leur offrant une relation client-marque interactive,
                        personnalisée et cohérente grâce à un socle CRM intelligent et une expérience d’achat
                        multicanal.
                        – Décupler la dimension conseil et service client en réseau physique en proposant des
                        applications
                        riches et connectées à vos équipes de vente.
                        ITELIOS est une société de service et conseil spécialiste du commerce connecté et digital qui
                        accompagne les distributeurs et les marques dans la mise en œuvre de leurs plateformes digitales
                        et dans le développement des synergies commerciales entre les canaux de vente.
                        Plus de 100 experts ITELIOS, conçoivent et développent au quotidien des interfaces digitales
                        adaptées aux usages et aux attentes de vos clients.
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Kayak Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/kayak.png" class="hidden-xs col-sm-5" alt="Kayak">
            <h2 class="col-sm-6">Kayak</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#kayak">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="kayak" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Kayak</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : 03 61 76 07 91<br>
                            email : contact@kayakcommunication.fr<br>
                            Site : <a href=http://www.kayakcommunication.fr>Itelios</a>
                    </div>
                    <h4><span>secteur d'activité : </span> Accompagnement / Soutien à l'entrepreneuriat,
                        Autres, E-commerce, Intégrateur/Conseil, Le digital e-commerce, Les réseaux & télécoms,
                        Pure Players, SEO</h4>

                    <img src="logos/kayak.png" class="hidden-xs col-sm-5" alt="Kayak">
                </div>
                <div class="modal-body">
                    <p>NOTRE POINT DE DÉPART ? VOUS.<br>
                        NOTRE PORTÉE ? GLOBALE.<br>
                        25 ans d’expertise, d’attention et de créativité, de la stratégie à l’opérationnel et de la
                        communication interne à l’externe, nous répondons aux attentes des marques régionales,
                        nationales ou
                        internationales à travers des prestations online et offline.
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:contact@kayakcommunication.fr">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Le Village Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/le_village_CA.png" class="hidden-xs col-sm-5" alt="Le Village">
            <h2 class="col-sm-6">Le Village</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#village">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="village" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Le Village</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : <br>
                            email : <br>
                            Site : <a href=""> </a>
                    </div>
                    <h4><span>secteur d'activité : </span> Banque</h4>

                    <img src="logos/le_village_CA.png" class="hidden-xs col-sm-5" alt="Le Village">
                </div>
                <div class="modal-body">
                    <p>Le Crédit Agricole Nord de France porte une initiative majeure au service de
                        l’innovation et de la dynamique économique de son territoire en créant sur
                        la métropole lilloise le Village By CA Nord de France à EuraTechnologies, lieu de
                        convergence des acteurs économiques, du monde de la recherche et de la formation dans
                        le domaine du digital.
                        Ce partenariat est le résultat de la volonté commune de ces deux acteurs de soutenir les
                        initiatives
                        innovantes sur leur territoire régional.
                    </p>
                      <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Onyme Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/onyme.png" class="hidden-xs col-sm-5" alt="Onyme">
            <h2 class="col-sm-6">Onyme</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#onyme">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="onyme" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Onyme</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : <br>
                            email : <br>
                            Site : <a href=http://www.onyme.com></a>
                    </div>
                    <h4><span>secteur d'activité : </span> Solution web</h4>

                    <img src="logos/onyme.png" class="hidden-xs col-sm-5" alt="Onyme">
                </div>
                <div class="modal-body">
                    <p>SSII spécialisée dans les solutions Web et l’analyse sémantique
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Picto Travel Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/picto_travel.png" class="hidden-xs col-sm-5" alt="Picto Travel">
            <h2 class="col-sm-6">Picto Travel</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#pictotravel">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="pictotravel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Picto Travel</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : 06 33 73 76 29<br>
                            email : contact@unisc.fr<br>
                            Site : <a href=http://www.pictotravel.fr>Picto Travel</a>
                    </div>
                    <h4><span>secteur d'activité : </span> Services dédiés au tourisme</h4>

                    <img src="logos/picto_travel.png" class="hidden-xs col-sm-5" alt="Picto Travel">
                </div>
                <div class="modal-body">
                    <p>Picto travel© (marque déposée) est le premier service innovant développé par Unis C.
                        Picto travel est un moteur de recherche et un site de planification de voyage pour personnes
                        à mobilité réduite qui vous permet de composer votre voyage dans un annuaire de milliers
                        d’offres touristiques (activités, hébergements, restaurations, transports et services).
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:contact@unisc.fr">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Soft Computing Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/soft_computing.png" class="hidden-xs col-sm-5" alt="Soft Computing">
            <h2 class="col-sm-6">Soft Computing</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#softcomputing">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="softcomputing" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Soft Computing</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : +33 (0)3 20 54 02 86<br>
                            email : <br>
                            Site : <a href=http://www.softcomputing.com>Soft Computing</a>
                    </div>
                    <h4><span>secteur d'activité : </span> Intégrateur/Conseil, Le digital e-commerce</h4>

                    <img src="logos/soft_computing.png" class="hidden-xs col-sm-5" alt="Soft Computing">
                </div>
                <div class="modal-body">
                    <p>PSoft Computing est une Entreprise de Services du Numérique spécialiste en Digital, Marketing
                        et Big Data, réunissant près de 400 consultants, délivrant des prestations de Conseil, de
                        Technologie et de Marketing Services.
                        Ses 400 consultants, experts en sciences de la donnée, en marketing digital et en
                        technologies Big Data, aident au quotidien plus de 150 entreprises à travers le monde, à
                        exploiter tout le potentiel de la donnée pour améliorer l’expérience de leurs clients et le
                        ROI de leur marketing digital.
                        Soft Computing est coté à Paris sur NYSE Euronext (ISIN : FR0000075517, Symbole : SFT).
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Trust Designer Computing Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/trust_designer.png" class="hidden-xs col-sm-5" alt="Trust Designer">
            <h2 class="col-sm-6">Trust Designer</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#trustdesigner">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="trustdesigner" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Trust Designer</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : 09 52 88 36 14 <br>
                            email : contact@trustdesigner.fr<br>
                            Site : <a href=http://www.trustdesigner.com>Trust Designer</a>
                    </div>
                    <h4><span>secteur d'activité : </span> Editeur de logiciels</h4>

                    <img src="logos/trust_designer.png" class="hidden-xs col-sm-5" alt="Trust Designer">
                </div>
                <div class="modal-body">
                    <p>Sécurité du système d’information, Authentification forte, signature, chiffrement,
                        messagerie sécurisée,
                        protection réseau.
                        Audit Conseil et Logiciel en sécurité informatique
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:contact@trustdesigner.fr">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Le Wagon  Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/wagon.png" class="hidden-xs col-sm-5" alt="Le Wagon">
            <h2 class="col-sm-6">Le Wagonr</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#wagon">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="wagon" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Le Wagon</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : +33 676 687 376 <br>
                            email : <br>
                            Site : <a href=https://www.lewagon.com/fr/lille>Le Wagon</a>
                    </div>
                    <h4><span>secteur d'activité : </span> Formation</h4>

                    <img src="logos/wagon.png" class="hidden-xs col-sm-5" alt="Le Wagon">
                </div>
                <div class="modal-body">
                    <p>Le Wagon est une école de codage fondée en 2013 et dirigée par Boris, Romain et Sébastien à
                        Paris, en France. La mission de Le Wagon est d'apporter des compétences techniques aux
                        créateurs. Notre bootcamp de codage de 9 semaines vous permet de construire un prototype de
                        toute idée que vous pourriez avoir. Aucun fondement technique requis, juste votre motivation.
                        Plus de 1750 étudiants ont déjà obtenu leur diplôme de Le Wagon. Ils ont trouvé des
                        positions en tant que développeurs Web juniors, gestionnaires de produits (qui peuvent coder,
                        énormes!), Ventes techniques, etc. D'autres ont commencé leur entreprise, ont mobilisé de
                        l'argent, ont construit une équipe. D'autres ont repris leur ancien emploi avec leurs nouvelles
                        superpuissances.<br>
                          Les logiciels mangent le monde
                        - Marc Andreessen
                        Êtes-vous prêt à changer votre vie?
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Wild Code School  Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/Wild_code_school.png" class="hidden-xs col-sm-5" alt="Wild Code School">
            <h2 class="col-sm-6">Wild Code School</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#wcs">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="wcs" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Wild Code School</h2>
                    <div class="contact">
                        <h3> Contact : </h3>
                        <p><br> Tel : 07 06 83 26 08<br>
                            email : olivier@wildcodeschool.fr<br>
                            Site : <a href=https://wildcodeschool.fr/>Wild Code School</a>
                    </div>
                    <h4><span>secteur d'activité : </span> Formation</h4>

                    <img src="logos/Wild_code_school.png" class="hidden-xs col-sm-5" alt="Wild Code School">
                </div>
                <div class="modal-body">
                    <p> C’est au cœur du site EuraTechnologies que la Wild Code School, école de développement web et
                        mobile,
                        a choisi d’installer son nouveau campus. Des locaux flambant neufs, conçus en open space pour
                        favoriser
                        la convivialité et le travail collaboratif, points clés de la pédagogie de cette école nouvelle
                        génération.

                        Valoriser la motivation
                        La Wild Code School accueille des élèves de tous horizons, sans condition de diplômes, et offre
                        une
                        expérience d’apprentissage unique, basée sur la pratique, l’autonomie, la passion, la créativité
                        et l
                        a motivation. A partir de 18 ans, avec ou sans le Bac, entrepreneurs, salariés, demandeurs
                        d’emploi ou
                        personnes en reconversion professionnelle peuvent candidater pour rejoindre la communauté de
                        Wilders.
                        A la Wild Code School, tout est affaire de motivation et de persévérance. 85% des anciens élèves
                        sont en
                        poste 1 an après la fin de la formation.
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:olivier@wildcodeschool.fr">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Ak 10 Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/Ak_10.png" class="hidden-xs col-sm-5" alt="Ak 10">
            <h2 class="col-sm-6">Ak 10</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#ak10">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="ak10" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Ak 10</h2>
                    <h4><span>secteur d'activité : </span></h4>

                    <img src="logos/Ak_10.png" class="hidden-xs col-sm-5" alt="Ak 10">
                </div>
                <div class="modal-body">
                    <p> Pas de description pour l'instant
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Allianzes Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/allianzes.png" class="hidden-xs col-sm-5" alt="Allianzes">
            <h2 class="col-sm-6">Allianzes</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#allianzes">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="allianzes" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Ak 10</h2>
                    <h4><span>secteur d'activité : </span></h4>

                    <img src="logos/allianzes.png" class="hidden-xs col-sm-5" alt="Allianzes">
                </div>
                <div class="modal-body">
                    <p> Pas de description pour l'instant
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--Unis C Entreprise -->

    <div class="jumbotron col-sm-offset-1 col-sm-3">
        <div class="row">
            <img src="logos/unis_c.png" class="hidden-xs col-sm-5" alt="Unis C">
            <h2 class="col-sm-6">Unis C</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn_more" data-toggle="modal" data-target="#unis">
                En savoir plus
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="unis" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Ak 10</h2>
                    <h4><span>secteur d'activité : </span></h4>

                    <img src="logos/unis_c.png" class="hidden-xs col-sm-5" alt="Unis C">
                </div>
                <div class="modal-body">
                    <p> Pas de description pour l'instant
                    </p>
                    <button type="button" class="btn_more" data-toggle="modal" data-target="#form"><a href="mailto:">contacter</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>



</div>
</div>
	<script src="https://use.fontawesome.com/39d63e1489.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--menu-->
	<script src="http://code.jquery.com/jquery-3.1.1.slim.min.js"></script> 
  	<script>
    	$(document).ready(function () {
    		$('.mobile-nav-button').on('click', function() {
    			$( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
    			$( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");  
    			$( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");  
    			$('.mobile-menu').toggleClass('mobile-menu--open');
    			return false;
    		}); 
    	});
    </script>
	<script type="text/javascript">
    function checkScroll(){
	var startY = $('.navbar').height() * 1; //The point where the navbar changes in px

if($(window).scrollTop() > startY){
    $('.navbar').addClass("scrolled");}
else{
    $('.navbar').removeClass("scrolled");}
}

if($('.navbar').length > 0){
    $(window).on("scroll load resize", function(){
    checkScroll(); });
}
</script>

<footer>
    <?php include ('footer.php'); ?>
</footer>

</body>
</html>
