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
<!-- Début Home-->
<main id="home">

  <!--DEBUT atelier theatre-->
  <section class="activity_theatre">
    <div class="container-fluid banner_theatre">
      <div class="container">
        <div class="row  infos_theatre">
          <div class="content_theatre col-md-6 col-xs-10">
            <h1>Atelier theatre</h1>
            <hr>
            <p>L'association Yalla aimerait mettre en place un atelier théâtre, qui permettrait aux jeunes enfants de s'épanouir dans une activité ludique.
            </p>
            <button class="don_theatre" type="button" name="button">Faite un don</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>
  <!-- FIN atelier theatre -->

  <!-- Début Qui somme nous -->
  <section class="activity_who">
    <div class="container-fluid banner_who">
      <div class="container">
        <div class="row infos_who">
          <div class="content_who col-md-6 col-xs-10">
            <h1>Qui somme nous ?</h1>
            <hr>
            <p>Culpa probant te nescius ut tempor voluptatibus cernantur tempor nescius. Iis mentitum o arbitror in doctrina efflorescere in nostrud.
            </p>
            <button class="don_who" type="button" name="button">Nous découvrir</button>
          </div>
        </div>
      </div>
    </div>
    </div>

    </div>

  </section>
  <!--FIN Qui somme nous -->

  <!--Debut Constat-->
  <section class="constat">
    <div class="banner_constat container_fluid">
      <div class="container">
        <div class="row">
          <div class="content_constat col-md-12 col-xs-16">
            <h2>Nos constats</h2>
            <hr>
            <p>Yalla! Pour les Enfants a été créée en juillet 2013 par des citoyens français connaisseurs de la Syrie et du Moyen-Orient, et soucieux du respect des droits l’Homme</p>
            <br>
            <p>Cette initiative est née d’un triple constat : </p>
            <br>
            <p>La dégradation des conditions de vie des enfants syriens réfugiés et les besoins criant en terme d’éducation et de soutien psycho-social</p>
            <p>La volonté de la société française d’aider le peuple syrien tout en ayant des garanties sur la destination et l’utilisation de ses dons</p>
            <p>La multiplication d’initiatives lancées par les réfugiés syriens eux-mêmes et les communautés d’accueil nécessitant un soutien financier et technique.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FIN constat-->

  <!-- Debut nos actions-->
  <section class="nos_actions">
    <div class="container">
      <div class="row">
        <div class="content_actions col-md-12">
          <div class="actions col-md-4 col-xs-7">
            <h2>Nos actions</h2>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Debut video-->
  <section class="video">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="content_video">
            <iframe width="854" height="480" src="https://www.youtube.com/embed/zfCNuSMyfTQ" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Fin video-->
  <!-- Debut Création de centre d'éducation -->
  <section class="education">
    <div class="container">
      <div class="row">
        <div class="content_education col-md-12">
          <p>Création de centres d’éducation informelle de qualité à destination d’enfants syriens réfugiés</p>
          <br>
          <p>Plaidoyer auprès des autorités libanaises locales et gouvernementales pour l’intégration des enfants syriens au sein du système scolaire libanais, après remise à niveau par Yalla !</p>
          <br>
          <p>Organisation d’activités sportives et artistiques à destination d’enfants libanais et syriens dans le cadre du dialogue intercommunautaire porté par Yalla!</p>
        </div>
      </div>

    </div>
  </section>
  <!-- Fin centre d'éducation -->
  <!-- Nous aider -->
  <section class="aider">
    <div class="container-fluid background_aider">
      <div class="container">
        <div class="row">
          <div class="content_aider col-md-12">
            <div class="education_don col-offset-md-4 col-md-4 col-xs-12">
              <h2>Nous aider ?</h2>
              <hr>
              <p>Projet en cours: Atelier théâtre</p>
              <p>54% de notre objectif</p>
              <button class="don_aider" type="button" name="button">Faite un don</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin nous aider -->
  <!--Debut Fil d'actualité-->
  <section class="actualite">
    <div class="container">
      <div class="row">
        <div class="content_actualite col-md-12">
          <h3>L'actualité</h3>
          <hr>
          <div class="first_actualite col-md-12">
            <a class="col-md-6" href="#"><img class="img_actualite col-md-6" src="{{asset('img-content/projet.jpg')}}" alt="nous-connaitre"></a>
            <a href="#"><h4>Fest-noz solidaire le 29 octobre à Poullaouen</h4></a>
            <div class="date_categorie">

              <div class="date_content">
                <a href="#"><img class="clock" src="{{asset('img-content/clock.png')}}" alt=""></a>
                <p>27 septembre 2017</p>
              </div>

              <div class="categorie_content">
                <a href="#"><img class="folder" src="{{asset('img-content/folder.png')}}" alt=""></a>
                <p>non classé</p>
              </div>
            </div>
            <hr>
          </div>



          <div class="first_actualite col-md-12">
            <a class="col-md-6" href="#"><img class="img_actualite col-md-6" src="{{asset('img-content/projet.jpg')}}" alt=""></a>
            <a href="#"><h4>Fest-noz solidaire le 29 octobre à Poullaouen</h4></a>
            <div class="date_categorie">

              <div class="date_content">
                <a href="#"><img class="clock" src="{{asset('img-content/clock.png')}}" alt=""></a>
                <p>27 septembre 2017</p>
              </div>

              <div class="categorie_content">
                <a href="#"><img class="folder" src="{{asset('img-content/folder.png')}}" alt=""></a>
                <p>non classé</p>
              </div>
            </div>
            <hr>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!-- Nos réseaux sociaux -->
  <section class="reseaux_sociaux">
    <div class="container-fluid background_reseau">
      <div class="container">
        <div class="row">
          <div class="content_reseau col-md-12">
            <h3>Suivez nous sur les réseaux sociaux</h3>
            <a href="#"><img src="{{asset('img-content/facebook.png')}}" alt="facebook"></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin réseaux sociaux -->
  <!-- Debut partenaire -->
  <section class="partenaire">
    <div class="container-fluid">
      <div class="content_partenaire col-md-12">
        <h3>Nos partenaire</h3>
        <div class="thumb_partenaire">
          <img class="col-md-4" src="{{asset('img-content/calam.jpeg')}}" alt="calam">
          <img class="col-md-4" src="{{asset('img-content/institut.jpg')}}" alt="institut française">
          <img class="col-md-4" src="{{asset('img-content/womens.png')}}" alt="women's world wide web">
        </div>
      </div>
    </div>
  </section>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
