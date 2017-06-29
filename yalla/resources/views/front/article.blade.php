<!DOCTYPE html>
<html>

  <head>
    <title>Article</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--LINK fichier boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- LINK Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/screen.css')}}">
    <!-- LINK Font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  </head>
  <body>
    <body>
      <!--DEBUT HEADER-->
      <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <div class="don navbar-left">
                <h4><a href="#">Faire un don</a></h4>
              </div>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              <a href="index.html"><img class="logo" src="img-content/logo.svg" width="50" height="50" alt="Yalla"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#about">Nous connaître</a></li>
                <li><a href="mission.html">Notre mission</a></li>
                <li><a href="#skills">Nos partenaires</a></li>
                <li><a href="#experience">Nos projets</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Fin HEADER -->

      <!-- Debut Body -->
      <main id="article">
        <section class="article">
          <div class="container-fluid">
            <div class="content_article col-md-16">
              <h1>{{$article->title}}</h1>
              <hr>
              <div class="thumb_article col-md-8">
                <img src="img-content/projet.jpg" width="100%" alt="projet">
              </div>
              <div class="info_article col-md-12">
                <div class="date_categorie col-md-12">
                  <div class="date_content col-md-4">
                    <img class="clock" src="img-content/clock.png" alt="">
                    <p>27 septembre 2017</p>
                  </div>
                  <div class="categorie_content col-md-4">
                    <img class="folder" src="img-content/folder.png" alt="">
                    <p>non classée</p>
                  </div>
                </div>
                <hr>
                <div class="text_article col-md-7">
                  <p>{{$article->contenu}}</p>
                </div>
                <div class="download_content">
                  <h3>Télecharger l'article</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
  </body>
</html>
