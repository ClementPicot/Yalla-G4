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
                    <li class="active_header"><a href="{{route('actu')}}">Actualités</a></li>
                    <li><a href="{{route('connaitre')}}">Nous connaître</a></li>
                    <li><a href="{{route('mission')}}">Notre mission</a></li>
                    <li><a href="#">Nos projets</a></li>
                    <li><a href="#">Contact</a></li>
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

<!--DEBUT BODY-->
<main id="projet">
    <!-- Banner -->

    <section class="projet">
        <div class="container-fluid background_projet">
            <div class="content_projet">
                <h1>Notre Philosophie</h1>
                <div class="ancre_projet">
                    <h2 class="scroll" href="#strategie">Notre stratégie</h2>
                    <h2 class="scroll" href="#action">Nos actions</h2>
                    <h2 class="scroll" href="#objectif">Nos objectifs</h2>
                </div>
            </div>
        </div>

    </section>

    <!-- Fin Banner -->
    <!-- Stratégie -->

    <div class="container-fluid">
        <section class="strategie_action col-md-16 ">
            <div id="projet" class="content_strategie col-md-6 col-sm-12 col-xs-12">
                <h3>Projet Passé</h3>
                <hr>
                <p>De mars à juillet 2014, Yalla! a ouvert une école informelle accueillant 50 enfants syriens réfugiés dans le quartier de Karam Zeitoun à Beyrouth. L’équipe pédagogique, composée d’une directrice des études libanaise et de trois professeurs
                    syriens réfugiés, ont remis à niveau 50 enfants syriens réfugiés en arabe, mathématiques et anglais.</p>
                <p>Les enfants également ont bénéficié d’activités psycho-pédagogiques, animés par des bénévoles syriens, qui leur ont permis de se développer dans un environnement serein. Chaque jour, des ateliers de dessins et de chants, ainsi que des cours
                    de sport ont participé à leur épanouissement. Par ailleurs, ils ont eu l’occasion de s’exprimer et développer leur imaginaire, grâce à un atelier d’expression orale et écrite animée par un psychiatre-poète durant deux mois.</p>
            </div>
            <!--Fin notre stratégie -->
            <!-- Debut actions -->
            <div id="action" class="content_action col-md-6 col-sm-12 col-xs-12">
                <h3>Projet Actuel</h3>
                <hr>
                <p>⇒ Qui?</p>
                <p>120 filles et garçons syriens réfugiés (âgés de 6 à 13 ans, répartis en 4 niveaux), un directeur des études syrien réfugié indemnisé, quatre professeurs syriens réfugiés indemnisés, des intervenants bénévoles (libanais syriens et internationaux),
                    et un comptable syrien bénévole</p>
                <p>⇒ Où?</p>
                <p>Aley et Liban, dans les locaux d’un Institut privé loué l’après-midi</p>
                <p>⇒ Quand?</p>
                <p>Cinq jours par semaine, dont quatre heures par jour, d’Octobre 2014 à Juillet 2015</p>
                <p>⇒ Quoi?</p>
                <p>Le programme élaboré par l’UNICEF: Arabe, Anglais, Mathématiques <br> Initiation à la langue française <br> Initiation à la géographie, l’histoire et les sciences <br> Activités sportives <br> Activités socio-éducatives: arts-plastiques, chants,
                    atelier théâtre, atelier d’expression écrite, jardinage. <br> Sensibilisation à l’équilibre alimentaire et à l’hygiène dentaire</p>
            </div>
        </section>
    </div>
    <!--Fin nos actions -->
    <!--Debut nos objectifs -->
    <section class="objectif">
        <div id="objectif" class="container-fluid background_shadow">
            <div class="container">
                <div class="row">
                    <div class="content_objectif col-md-12 col-sm-10 col-xs-12">
                        <div class="post_objectif col-md-12 col-sm-10 col-xs-12">
                            <h3>Le Contexte</h3>
                            <hr>
                            <div class="post_education-paix col-md-12 col-sm-12 col-xs-12">
                                <div class="content_education col-md-4 col-sm-12 col-xs-12">
                                    <p><strong><span>Garantir le droit à l’éductation et au développement de l’enfant</span></strong></p>
                                    <br>
                                    <p>Le conflit syrien: La Syrie a sombré dans la guerre à la suite d’un soulèvement populaire, débuté en mars 2011 dans le contexte du printemps arabe. Quatre ans plus tard, on compte 130 000 morts, 4 millions de réfugiés et plus six
                                        millions de déplacés internes.<br><br> Les enfants, premières victimes de la crise humanitaire syrienne : Les besoins en aide humanitaire en Syrie et dans les pays limitrophes – notamment le Liban – s’accroissent à mesure que la
                                        crise syrienne prend de l’ampleur et s’installe dans la durée. Les enfants syriens sont les premières victimes de cette crise. Si les besoins des enfants réfugiés syriens en aide alimentaire et en aide médicale sont jusqu’à ce
                                        jour globalement couverts par la communauté internationale, une défaillance apparait concernant les besoins en éducation de ces enfants déracinés et en souffrance. Déscolarisés depuis des mois, voire des années, ces enfants se
                                        voient refuser leur droit fondamental à l’éducation, garanti par la Convention relative aux droits de l’enfant de 1989.<br><br> Le défi des acteurs sur le terrain à assurer une éducation aux enfants syriens: Aujourd’hui, les réfugiés
                                        syriens représentent un quart de la population vivant au Liban et la moitié d’entre eux sont des enfants. Au 1er janvier 2015, le Haut commissariat aux réfugiés des Nations Unies comptait 400 000 enfants syriens enregistrés au
                                        Liban. Parmi eux, un peu plus de 100 000 bénéficient d’une éducation formelle ou informelle. Le système éducatif libanais, déjà saturé, ne peut absorber un si grand nombre d’élèves supplémentaire et nécessite une aide d’urgence.<br><br>                        Notre objectif: scolariser le plus grand nombre d’enfants syriens dans le respect des principes de laïcité et d’égalité, en harmonie avec leur communauté d’accueil.


                                    </p>
                                </div>
                                <div class="content_paix col-md-4 col-sm-12 col-xs-12">
                                    <p><strong><span>Développer des mécanismes de construction de la paix</span></strong></p>
                                    <br>
                                    <p>Qu’est ce qu’un réfugié syrien au Liban?<br><br> Selon la Convention de Genève de 1951 sur le statut de réfugié, un réfugié est une personne qui a fui son pays, parce qu’elle y craint des persécutions en raison de son ethnie, sa
                                        religion, ses opinions politiques ou de son appartenance à un groupe social. Cette personne a traversé une frontière internationale pour trouver asile dans un autre pays que le sien.<br><br> Lorsque le pays d’asile est partie à
                                        la Convention de Genève, la personne reconnue réfugiée est dès lors sous la protection du pays d’accueil et se voit reconnaître des droits (cf. article 12 à 34 de la Convention de Genève).<br><br> Cependant, le Liban n’étant pas
                                        signataire de la Convention de Genève de 1951, les réfugiés syriens ne bénéficient pas des droits attachés à ce statut sur le territoire libanais.<br><br></p>

                                    <p>Le statut juridique des réfugiés syriens au Liban <br><br> Le gouvernement libanais a laissé ses frontières ouvertes à l’afflux de réfugiés syriens fuyant les massacres de civils, respectant ainsi le principe de droit international
                                        coutumier de non-refoulement. Toutefois, il ne reconnaît pas les Syriens situés sur son territoire comme des réfugiés, ce qui signifie que les autorités libanaises leur appliquent le droit des étrangers. <br><br>

                                    </p>
                                </div>
                                <div class="content_paix col-md-4 col-sm-12 col-xs-12">
                                    <p><strong><span>Notre Développer des mécanismes de construction de la paix</span></strong></p>
                                    <br>
                                    <p>Le Haut commissariat aux réfugiés des Nations Unies, agence chargée de faire respecter le droit relatif au statut de réfugié, collabore avec les autorités libanaises pour venir en aide aux Syriens exilés. Elle les enregistre en tant
                                        que réfugiés syriens afin que ces derniers puissent bénéficier de l’assistance des organisations internationales (ils reçoivent une aide médicale primaire et d’urgence et peuvent bénéficier d’autres services pour les plus vulnérables:
                                        aide alimentaire, soutien psychologique, aide au logement, etc.).<br><br> L'enregistrement au Haut commissariat aux réfugiés des Nations Unies leur permet donc de recevoir une aide pour les besoins les plus élémentaires mais ne
                                        leur accorde aucun droit. Ainsi, beaucoup de Syriens arrivés au Liban sans papier ou n’ayant pu faire renouveler leur titre de séjour – dont le coût s’élève à 200 dollars par an, se retrouvent en situation d’illégalité sur le territoire
                                        libanais et n’ont pas le droit de travailler.<br><br> On observe une très grande disparité s’agissant des conditions de vie des réfugiés Syriens au Liban. Ainsi, certains réfugiés sont hébergés chez des proches, d’autres ont pour
                                        le moment les moyens de louer un appartement. Mais la majorité d’entre eux font face à de grandes difficultés de logement : dans les villes, les familles vivent dans des conditions de suroccupation, dans la plaine de la Bekka,
                                        elles s’abritent sous des tentes de fortune sujettes aux intempéries et aux incendies.<br><br> Dans ces conditions, l’éducation est délaissée au profit des besoins les plus élémentaires. Elle est pourtant indispensable au bon développement
                                        de l’enfant et constitue un de ses droits inaliénables. Yalla! se fixe donc pour priorité d’apporter une éducation aux enfants syriens défavorisés. <br><br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin nos objectifs -->
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
