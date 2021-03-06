<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/screen.css')}}">
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
          <li><a href="{{route('projet')}}">Nos projets</a></li>
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

<!--DEBUT BODY-->
<main id="missions">
  <!-- Banner -->

  <section class="mission">
    <div class="container-fluid background_mission">
      <div class="content_mission">
        <h1>Notre Mission</h1>
        <div class="ancre_mission">
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
      <div id="strategie" class="content_strategie col-md-6 col-sm-12 col-xs-12">
        <h3>Notre stratégie</h3>
        <hr>
        <p>- Intégration des bénéficiaires et de la communauté d’accueil à tous les stades de développement du projet, afin de garantir une compréhension mutuelle des enjeux et objectifs du projet, et contribuer au succès de la mission</p>
        <p>- Respect de la coordination de l’aide humanitaire menée par les agences humanitaires des Nations Unies, afin de s’intégrer dans une action globale et parvenir ensemble à plus d’efficacité pour répondre aux besoins les plus prégnants</p>
        <p>- Création d’un lien dynamique entre les donateurs et les bénéficiaires afin de créer une solidarité de proximité et garantir une visibilité sur la destination et l’impact des dons quels que soient leurs montants, tout en faisant parvenir
          aux bénéficiaires un message de soutien concret de la part de la société civile solidaire</p>
      </div>
      <!--Fin notre stratégie -->
      <!-- Debut actions -->
      <div id="action" class="content_action col-md-6 col-sm-12 col-xs-12">
        <h3>Nos actions</h3>
        <hr>
        <p>- Création de centres d’éducation informelle de qualité à destination d’enfants syriens réfugiés</p>
        <p>- Plaidoyer auprès des autorités libanaises locales et gouvernementales pour l’intégration des enfants syriens au sein du système scolaire libanais, après remise à niveau par Yalla !</p>
        <p>- Organisation d’activités sportives et artistiques à destination d’enfants libanais et syriens dans le cadre du dialogue intercommunautaire porté par Yalla!</p>
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
              <h3>Nos objectifs</h3>
              <hr>
              <div class="post_education-paix col-md-12 col-sm-12 col-xs-12">
                <div class="content_education col-md-5 col-sm-6 col-xs-12">
                  <p><strong><span>Garantir le droit à l’éductation et au développement de l’enfant</span></strong></p>
                  <br>
                  <p>Les droits de l’enfant : Les missions de Yalla ! sont guidées par le respect et la mise en œuvre des droits fondamentaux de l’enfant tels que définis dans la Convention internationale des droit de l’enfant de 1989.<br><br> Laïcité
                    et apolitisme : La religion et la politique sont absentes des enseignements et activités dispensés par Yalla ! afin que tout enfant et tout bénévole participant aux projets se sent accueilli et respecté quelles que soient ses opinions
                    religieuses ou politiques.<br><br> Egalité : Tout enfant et tout bénévole est considéré par Yalla ! de la même façon, quelque soit son sexe, sa nationalité ou son appartenance ethnique ou religieuse. Yalla ! promeut l’égalité fille-garçon
                    à travers ses activités et enseignements. La mixité au sein des équipes de bénévoles est également un impératif que se donne Yalla !<br><br> Transparence : Yalla ! est responsable, vis-à-vis de ses donateurs et des bénéficiaires
                    de l’aide, de la manière dont elle met en œuvre sa mission et gère ses comptes.
                  </p>
                </div>
                <div class="content_paix col-md-5 col-sm-6 col-xs-12">
                  <p><strong><span>Notre Développer des mécanismes de construction de la paix</span></strong></p>
                  <br>
                  <p>Yalla! Pour les Enfants a été créée en juillet 2013 par des citoyens français connaisseurs de la Syrie et du Moyen-Orient, et soucieux du respect des droits l’Homme.<br><br> Cette initiative est née d’un triple constat :<br><br>                        ⇒ La dégradation des conditions de vie des enfants syriens réfugiés et les besoins criant en terme d’éducation et de soutien psycho-social. <br><br> ⇒ La volonté de la société française d’aider le peuple syrien tout en ayant des
                    garanties sur la destination et l’utilisation de ses dons. <br><br> ⇒ La multiplication d’initiatives lancées par les réfugiés syriens eux-mêmes et les communautés d’accueil nécessitant un soutien financier et technique.</p>
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
