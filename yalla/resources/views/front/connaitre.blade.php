<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/screen.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
</head>

<body>

<!--DEBUT HEADER-->
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="don navbar-left">
                </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{route('home')}}"><img class="logo"  src="{{asset('img-content/logo.svg')}}" width="50" height="50" alt="Yalla"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active_header"><a href="actualites.html">Actualités</a></li>
                    <li><a href="{{route('connaitre')}}">Nous connaître</a></li>
                    <li><a href="{{route('mission')}}">Notre mission</a></li>
                    <li><a href="projet.html">Nos projets</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <select name="lang" id="lang">
                        <option value="fr">fr (France)</option>
                        <option value="en">en (England)</option>
                    </select>
                    <div class="don">
                        <h4><a href="{{route('soutenir')}}">Faire un don</a></h4></div>

                </ul>
            </div>
        </div>
    </nav>
</header>
<!--FIN HEADER-->

<!-- DEBUT MAIN -->

<main id="connaitre">

    <!-- DEBUT SECTION 1 -->

    <section class="connaitre">
        <div class="container-fluid background_connaitre">
            <div class="content_connaitre">
                <h1>Notre Philosophie</h1>
                <div class="ancre_connaitre">
                    <h2 class="scroll" href="#philosophie">Notre philosophie</h2>
                    <h2 class="scroll" href="#equipe">Notre equipe</h2>
                    <h2 class="scroll" href="#fonctionnement">Notre fonctionnement</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- FIN SECTION 1 -->

    <!-- PHILOSOPHIE -->

    <section class="philosophie">
        <div id="philosophie" class="container-fluid">
            <div class="content_philosophie col-md-12 col-sm-12 col-xs-12">
                <div class="post_philosophie col-md-12 col-sm-12 col-xs-12">
                    <h3>Notre philosophie</h3>
                    <hr>
                    <div class="post_vision-aide col-md-12 col-sm-12 col-xs-12">
                        <div class="content_vision col-md-4 col-sm-4 col-xs-12">
                            <h4><strong><span>Notre vision : l’aide humanitaire de proximité</span></strong></h4>
                            <br>
                            <p>Développer la solidarité internationale en créant un pont entre les sociétés civiles en mesure de d’aider et celles qui en ont besoin.<br><br> ⇒ Grâce à une structure rationalisée, au plus près des donateurs et des bénéficiaires, Yalla
                                ! permet aux membres de la société civile solidaire de visualiser l’impact de leurs dons.
                                <br><br> ⇒ Afin de garantir l’efficacité et la pérennité de ses projets, Yalla ! implique les bénéficiaires de l’aide à toutes les étapes du développement du projet, de l’élaboration à l’évaluation.
                            </p>
                        </div>
                        <div class="content_valeurs col-md-4 col-sm-4 col-xs-12">
                            <h4><strong><span>Nos valeurs:  Les droits de l’enfant comme valeurs souveraines</span></strong></h4>
                            <br>
                            <p>Les droits de l’enfant : Les missions de Yalla ! sont guidées par le respect et la mise en œuvre des droits fondamentaux de l’enfant tels que définis dans la Convention internationale des droit de l’enfant de 1989.<br><br> Laïcité et
                                apolitisme : La religion et la politique sont absentes des enseignements et activités dispensés par Yalla ! afin que tout enfant et tout bénévole participant aux projets se sent accueilli et respecté quelles que soient ses opinions
                                religieuses ou politiques.<br><br> Egalité : Tout enfant et tout bénévole est considéré par Yalla ! de la même façon, quelque soit son sexe, sa nationalité ou son appartenance ethnique ou religieuse. Yalla ! promeut l’égalité fille-garçon
                                à travers ses activités et enseignements. La mixité au sein des équipes de bénévoles est également un impératif que se donne Yalla !.<br><br> Transparence : Yalla ! est responsable, vis-à-vis de ses donateurs et des bénéficiaires de
                                l’aide, de la manière dont elle met en œuvre sa mission et gère ses comptes.</p>
                        </div>
                        <div class="content_histoire col-md-4 col-sm-4 col-xs-12">
                            <h4><strong><span>Notre histoire</span></strong></h4>
                            <br>
                            <p>Yalla! Pour les Enfants a été créée en juillet 2013 par des citoyens français connaisseurs de la Syrie et du Moyen-Orient, et soucieux du respect des droits l’Homme.
                                <br><br> Cette initiative est née d’un triple constat :
                                <br><br> ⇒ La dégradation des conditions de vie des enfants syriens réfugiés et les besoins criant en terme d’éducation et de soutien psycho-social
                                <br><br> ⇒ La volonté de la société française d’aider le peuple syrien tout en ayant des garanties sur la destination et l’utilisation de ses dons
                                <br><br> ⇒ La multiplication d’initiatives lancées par les réfugiés syriens eux-mêmes et les communautés d’accueil nécessitant un soutien financier et technique.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FIN PHILOSOPHIE -->

    <!-- DEBUT EQUIPE -->

    <section class="philosophie">
        <div id="equipe" class="container-fluid background_shadow">
            <div class="content_philosophie col-md-12 col-sm-12 col-xs-12">
                <div class="post_philosophie col-md-12 col-sm-12 col-xs-12">
                    <h3>Notre Equipe</h3>
                    <hr>
                    <div class="post_vision-aide col-md-12 col-sm-12 col-xs-12">
                        <div class="content_equipe col-md-2 col-sm-3 col-xs-6">
                            <img src="{{asset('img-content/mary.jpg')}}" alt="Mary LEMELAND-MELLIONEC">
                            <p>Mary LEMELAND-MELLIONEC</p>
                            <p>Présidente de l’association</p>
                        </div>
                        <div class="content_equipe col-md-2 col-sm-3 col-xs-6">
                            <img src="{{asset('img-content/sophie.jpg')}}" alt="Sophie FANUCCHI">
                            <p>Sophie FANUCCHI</p>
                            <p>Secrétaire et référente juridique</p>
                        </div>
                        <div class="content_equipe_logo col-md-2 col-sm-3 col-xs-6">
                            <img src="{{asset('img-layout/logo.svg')}}" alt="Logo">
                        </div>
                        <div class="content_equipe col-md-2 col-sm-3 col-xs-6">
                            <img src="{{asset('img-content/mélina.jpg')}}" alt="Mélina PELE">
                            <p>Mélina PELE</p>
                            <p>Vice-présidente et référente communication </p>
                        </div>
                        <div class="content_equipe col-md-2 col-sm-3 col-xs-6">
                            <img src="{{asset('img-content/pierre.jpg')}}" alt="Pierre LEMELAND">
                            <p>Pierre LEMELAND</p>
                            <p>Trésorier</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FIN EQUIPE -->

    <!-- DEBUT FONCTIONNEMENT -->

    <div class="container-fluid">
        <section class="fonctionnement col-md-12">
            <div id="fonctionnement" class="content_fonctionnement col-md-6 col-sm-12 col-xs-12">
                <h3>Notre fonctionnement</h3>
                <hr>
                <p>Yalla ! est dirigée par un Bureau composé de quatre membres, qui rendent compte des actions de Yalla ! aux adhérents de l’association à travers des rapports d’activités concernant chaque projet et lors des Assemblées générales tenues une fois
                    par an à Paris.
                    <br><br> Les bénévoles de Yalla ! à Paris et sur le terrain ont préalablement adopté les valeurs de l’association et agissent conformément à ses principes. Ils rapportent leurs activités de façon régulière au Bureau qui contrôle la conformité
                    des actions développées sur le terrain à la mission et aux valeurs que s’est données Yalla !.
                    <br><br> La tenue des comptes de l’association et celles des structures créées sur le terrain est assurée par un comptable qui effectue un rapport financier à la fin de chaque projet et de chaque exercice comptable.</p>
            </div>

            <div class="image_fonctionnement col-md-5 col-sm-12 col-xs-12">
                <img src="{{asset('img-content/fonctionnement.jpg')}}" alt="fonctionnement (image enfants)">
            </div>

        </section>

        <!-- FIN FONCTIONNEMENT -->


</main>

<footer>
    <div class="container-fluid bckg-color">
        <div class="container">
            <div class="row">
                <div class="footer">
                    <div class="logo_content col-md-3">
                        <a href="{{route('home')}}"><img src="{{asset('img-layout/logo.svg')}}" width="50" height="50" alt=""></a>
                    </div>
                    <div class="mention_content col-md-8 col-xs-12">
                        <p>Mentions légale</p>
                        <p>Contact</p>
                        <button type="button" name="button">Faire un don</button>
                        <div class="reseaux_content col-md-4 col-xs-12">
                            <a href="#"><img src="{{asset('img-content/facebook-footer.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('img-content/twitter.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('img-content/pinterest.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('img-content/instagram.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="actualite_content">
                        <div class="last_actualite">
                            <h6>Dernières actualités</h6>
                        </div>
                        <div class="all_actualite">
                            <a href="#">
                                <p>Fest-noz solidaire le 29 octobre à Poullaouen</p>
                            </a>
                            <a href="#">
                                <p>Assemblé Générale de Yalla ! Pour les enfants jeudi 29 septembre 2016 à, à Paris</p>
                            </a>
                            <a href="#">
                                <p>Pétition "Ban ki-moon:STOPPONS LA GUERRE EN SYRIE"</p>
                            </a>
                            <a href="#">
                                <p>Les prochains évènements de Souria Houria</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" charset="utf-8"></script>
<script src="js/bootstrap.min.js" charset="utf-8"></script>

<script type="text/javascript">
    $(function() {

        $('.scroll').click(function() {

            var cible = $(this).attr('href');
            console.log(cible)

            $('html, body').animate({
                scrollTop: $(cible).offset().top
            }, 1000);
        });

    });

</script>

</body>

</html>
