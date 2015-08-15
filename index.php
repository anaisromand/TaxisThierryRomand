<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="Taxis Thierry Romand : votre artisan taxi à Suippes, Châlons-en-Champagne, Fagnières, Saint-Memmie et Sainte-Marie-à-Py.">

        <title>Taxis Thierry Romand</title>

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300italic,400' rel='stylesheet' type='text/css'>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="js/maps.js" type="text/javascript"></script>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-57362027-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>

    <body data-target="#header-nav" data-spy="scroll">

        <div class="bg-header">
            <div id="bg-color">
                <div class="container header">
                    <div class="row">
                        <div itemscope itemtype="http://schema.org/LocalBusiness" id="header">
                            <img src="img/logo_blanc.svg" onerror="this.onerror=null; this.src='img/logo_blanc.png'" alt="Logo Taxis Thierry Romand"/>
                            <h1 itemprop="name">Taxis Thierry Romand</h1>
                            <h3>« Partout avec vous »</h3>
                            <a href="tel:+33326665331"><h2>
                                <span itemprop="phone">03 26 66 53 31</span>
                            </h2></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="test" id="header-nav">
            <nav>
                <ul class="nav nav-tabs">
                    <li><a href="#presentation">Présentation</a></li>
                    <li><a href="#tma">Transports de malade assis</a></li>
                    <li><a href="#te">Transports d'enfants</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>

        <div class="container content">
            <div class="row" id="presentation">
                <h1>Présentation</h1>
                    <div class="col-sm-5 col-xs-12 col-sm-offset-1">
                        <p>Taxis Thierry Romand regroupe les taxis de Suippes, Châlons-en-Champagne, Fagnières, Saint-Memmie et de Sainte-Marie-à-Py. 
                        Nous vous accompagnons maintenant depuis plus de 9 ans.<br /><br />
                        Grâce à nos 9 véhicules, nous pouvons vous transporter pour tous vos déplacements, qu'ils soient personnels ou d'ordre
                        médicale.<br />Nous aidons vos proches à mobilité réduite à se rendre sur leurs lieux </p>
                    </div>
                    <div class="col-sm-5 col-xs-12">
                        <p>de rendez-vous, ainsi que vos enfants pour les trajets entre le domicile et leurs établissements.<br /><br />
                        Soucieux de l’impact environnemental des voitures nous avons commencé à nous intéresser depuis 2014 
                        aux voitures électriques performantes afin de lier confort et écologie. Contactez-nous pour vivre 
                        l'expérience du tout électrique en Tesla !</p>
                    </div>
            </div>
        </div>
            
            <div>
                <div id="map-container">
                </div>
            </div>

        <div class="container content">
            <div class="row" id="tma">
                <h1>Transports de malade assis</h1>
                
                <div class="col-sm-6 col-xs-12">
                    <p>Les chauffeurs de taxis doivent être obligatoirement titulaires du brevet de secouriste. Nos chauffeurs de taxi ont donc passé 
                    une formation de secourisme et sont titulaire de ce dernier. Conventionné par les organismes sociaux, nous sommes habilités, au 
                    même titre que les VSL, à transporter des malades assis, sur prescription médicale. N'hésitez pas à nous contacter pour plus de 
                    renseignements. Munissez-vous de votre attestation de carte vitale ainsi que du bon de transport de votre médecin.<br />
                    </p>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <p>Au cours de votre déplacement, vous bénéficiez de notre assistance continue que ce soit pour l'accompagnement jusqu'au service 
                    concerné, pour l'accomplissement des formalités (bureau des entrées et des sorties, secrétariat, salle d'attente, ... ), aide pour 
                    l'accès au véhicule ainsi qu'à votre domicile.<br />
                    </p>
                </div>

                <div class="col-sm-8 col-xs-12 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Vous trouverez ci-dessous les cas où vous aurez le droit au remboursement du transport assis :
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Lorsque le traitement est en rapport avec une affection de longue durée prise en charge à 100%.</li>
                            <li class="list-group-item">Pour les hospitalisations (entrées et sorties).</li>
                            <li class="list-group-item">Pour les transports en série<span class="green">*</span>
                                                        (au moins 4 transports de plus de 50 km sur deux mois, pour un même traitement).
                            </li>
                            <li class="list-group-item">Pour les transports de plus de 150 km<span class="green">*</span>.</li>
                            <li class="list-group-item">Pour les accidents du travail ou maladies professionnelles.</li>
                        </ul>

                            <p class="right"><span class="green">*</span>accord préalable de votre organisme nécessaire</p>
                    </div>
                </div>
            </div>
        </div>

    <!--     <div class="bg-center">
        <div id="bg-color">
            <div class="container header">
                <div class="row">
                    <div id="header">
                        <h3>Nos véhicules peuvent être équipés de réhausseurs ou de sièges-auto à votre demande. 
                        Pour plus de sûreté, la sécurité enfant est activé sur chaque portières arrières.</h3>
                    </div>
                </div>
            </div>
        </div>
        </div> -->

        <div class="container content">
            <div class="row" id="te">
                <h1>Transports d'enfants</h1>
                
                <div class="col-xs-12">
                    <div class="col-md-6 col-xs-12">
                        <h2>Transport extra-scolaire</h2>
                            <p>Votre enfant a une prescription médicale et il doit être suivi au CMPP, Centre Lewis Carroll, 
                            en hôpital de jour ou dans une toutes autres structures. Nous sommes conventionné par les organismes 
                            sociaux, nous pouvons prendre votre enfant en charge.<br /><br />
                            Vous avez une préférence pour l'un de nos chauffeurs taxi ? N'hésitez pas nous le dire, nous pouvons 
                            mettre à votre disposition le chauffeur que vous désirez.</p>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Nous vous garantissons :
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item">la prise en charge par son éducateur(trice).</li>
                                <li class="list-group-item">d'être présent avant la fin de sa séance.</li>
                                <li class="list-group-item">que votre enfant ne se trouve jamais seul dans la salle d'attente.</li>
                                <li class="list-group-item">un siège réhausseur pour son déplacement, si besoin.</li>
                                <li class="list-group-item">une aide pour l'accès au véhicule, à votre domicile.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-md-6 col-xs-12">
                        <h2>Transport scolaire</h2>
                        <p>Sur simple demande nous pouvons transporter votre enfant à son école, ci celui-ci doit se rendre en CLIS nous pouvons vous 
                        établir un devis pour le conseil général avec lequel nous travaillons.<br />
                        Votre enfant doit se rendre dans un IME, CAT ou bien dans un autre institut spécialisé, nous pouvons l'accompagner.<br />
                        Sur simple demande nous pouvons vous établir un devis.</p>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Nous vous garantissons :
                            </div>
                                <ul class="list-group">
                                    <li class="list-group-item">une aide pour l'accès au véhicule, à votre domicile.</li>
                                    <li class="list-group-item">d'attendre la prise en charge par son établissement.</li>
                                    <li class="list-group-item">d'être présent avant sa sortie, le soir.</li>
                                    <li class="list-group-item">que votre enfant ne se trouve jamais seul. </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact" id="contact">
            <div class="content container">
                <div class="row">
                    <h1>Contact</h1>
                        <div class="col-md-4 col-md-offset-1 col-xs-12 cgauche">
                            <div class="row">
                                <h2>
                                    <a href="tel:+33326665331">
                                        <span itemprop="phone">03 26 66 53 31</span>
                                    </a>
                                </h2>
                            </div>
                            <div class="row">
                                <span class="ou">ou</span>
                            </div>
                            <div class="row">
                                <h2>
                                    <a href="mailto:contact@taxisthierryromand.fr">contact[at]taxisthierryromand.fr</a>
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-1 col-xs-12">

                            <?php
                                $name    = $_POST['name'];
                                $prenom  = $_POST['prenom'];
                                $email   = $_POST['email'];
                                $message = $_POST['message']; 
                                $to      = 'contact@taxisthierryromand.fr'; 
                                $subject = $_POST['subject'];
                                $headers = 'From: contact@taxisthierryromand.fr' . "\r\n" . 'Reply-To: contact@taxisthierryromand.fr' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
                                $body    = "De: $prenom\n $name\n E-Mail: $email\n Message:\n $message";
                                            
                                if ($_POST['submit']) {
                                    if ($_POST['prenom'] !== '' && $_POST['name'] !== '' && $_POST['email'] !== '' && $_POST['message'] !== '') {
                                        if (mail($to, $subject, $body, $headers)) { 
                                            echo '<p>Votre message a bien été envoyé.</p>';
                                        } else { 
                                            throw new Exception('Une erreur vient de survenir. Revenez en arrière et réessayez.'); 
                                        } 
                                    } else {
                                        echo 'Merci de renseigner les champs nécessaires.'; 
                                    }                
                                }
                            ?>


                            <form method="post" class="form-inline">
                                

                                <div class="row">
                                    <div class="col-md-5 col-md-offset-1">
                                        <div class="input-group">
                                            <input name="name" type="text" class="form-control" placeholder="Nom*" required />
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <input name="prenom" type="text" class="form-control" placeholder="Prénom*" required />
                                        </div>
                                    </div>
                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-md-5 col-md-offset-1">
                                        <div class="input-group">
                                            <input name="email" type="email" class="form-control" placeholder="E-mail*" required />
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <input type="tel" class="form-control" id="Telephone" placeholder="Téléphone">
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <textarea class="form-control" name="message" placeholder="Message*" required></textarea>
                                </div>
                            </div>

                             <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <button name="submit" type="submit" value="submit" class="btn btn-default">Envoyer</button>
                                </div>
                            </div>

                            </form>
                        </div>


                        <div class="mentions col-xs-12">
                            <h3>Taxis Thierry Romand — 1 cité lépine 51600 SUIPPES</h3>
                            <a href="https://plus.google.com/105651429917594902779" rel="publisher"></a> 
                        </div>
                </div>
            </div>
        </div>

    <script type="text/javascript">
        $('#header-nav').affix({
              offset: {
                top: 600,
              }
        }); 

        $('[data-spy="scroll"]').each(function () {
          var $spy = $(this).scrollspy('refresh')
        });
    </script>

    </body>
</html>