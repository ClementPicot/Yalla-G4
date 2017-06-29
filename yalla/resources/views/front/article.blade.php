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
        <a href="{{route('home')}}"><img class="logo" src="{{asset('img-content/logo.svg')}}" width="50" height="50" alt="Yalla"></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="nous-connaitre.html">Nous connaître</a></li>
          <li><a href="{{route('mission')}}">Notre mission</a></li>
          <li><a href="projet.html">Nos projets</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- Fin HEADER -->

<!-- Debut Body -->
<main id="article">

  <section class="head_article">
    <div class="container-fluid background_article">
      <div class="content_head_article">
        <h1>{{$article->title}}</h1>
      </div>
    </div>
    <div class="container-fluid background_article2"></div>
  </section>

  <section class="article">
    <div class="container-fluid">
      <div class="content_article col-md-12 col-sm-12 col-xs-12">
        <div class="post_article col-md-8 col-sm-8 col-xs-12">
          <p>{{$article->contenu}}</p>
        </div>
      </div>
    </div>
  </section>

  <section class="article_date">

    <div class="container-fluid">
      <div class="content_article col-md-12 col-sm-12 col-xs-12">
        <div class="categorie_date col-md-5 col-sm-5 col-xs-8">

          <div class="date taille_img col-md-2 col-sm-2 col-xs-4">
            <img src="{{asset('img-content/clock.png')}}" alt="Date">
          </div>

          <div class="date col-md-4 col-sm-4 col-xs-7">
            <p>{{$article->date}}</p>
          </div>

          <div class="date taille_img col-md-2 col-sm-2 col-xs-4">
            <img src="{{asset('img-content/folder.png')}}" alt="Date">
          </div>

          <div class="date col-md-4 col-sm-4 col-xs-7">
            <p>{{$article->categorie}}</p>
          </div>

        </div>
      </div>
    </div>

  </section>

  <section class="actu">
    <div class="container-fluid">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h2>Voir d'autres actualités</h2>
      </div>


      <div class="container-fluid">
        <div class="container_article col-md-12 col-sm-12 col-xs-12">

          <div class="article_shadow col-md-3 col-sm-5 col-xs-12">
            <div class="margin_article col-md-12 col-sm-12 col-xs-12">
              <img src="asset('img-content/img_article.jpg')" alt="Article 1">
              <h3>Yalla ! Pour les Enfants au marché des céramistes de Quimper les 5 et 6 septembre</h3>

              <div class="date taille_img2 col-md-2 col-sm-2 col-xs-5">
                <img src="img-content/clock.png" alt="Date">
              </div>

              <div class="date col-md-4 col-sm-4 col-xs-5">
                <p>7 Février 2016</p>
              </div>

              <div class="date taille_img2 col-md-2 col-sm-2 col-xs-5">
                <img src="img-content/folder.png" alt="Date">
              </div>

              <div class="date col-md-4 col-sm-4 col-xs-5">
                <p>Non Classé</p>
              </div>

            </div>
          </div>

          <div class="article_shadow col-md-3 col-sm-5 col-xs-12">
            <div class="margin_article col-md-12 col-sm-12 col-xs-12">
              <img src="img-content/img_article.jpg" alt="Article 1">
              <h3>Yalla ! Pour les Enfants au marché des céramistes de Quimper les 5 et 6 septembre</h3>

              <div class="date taille_img2 col-md-2 col-sm-2 col-xs-5">
                <img src="img-content/clock.png" alt="Date">
              </div>

              <div class="date col-md-4 col-sm-4 col-xs-5">
                <p>7 Février 2016</p>
              </div>

              <div class="date taille_img2 col-md-2 col-sm-2 col-xs-5">
                <img src="img-content/folder.png" alt="Date">
              </div>

              <div class="date col-md-4 col-sm-4 col-xs-5">
                <p>Non Classé</p>
              </div>

            </div>
          </div>

          <div class="article_shadow col-md-3 col-sm-5 col-xs-12">
            <div class="margin_article col-md-12 col-sm-12 col-xs-12">
              <img src="img-content/img_article.jpg" alt="Article 1">
              <h3>Yalla ! Pour les Enfants au marché des céramistes de Quimper les 5 et 6 septembre</h3>

              <div class="date taille_img2 col-md-2 col-sm-2 col-xs-5">
                <img src="img-content/clock.png" alt="Date">
              </div>

              <div class="date col-md-4 col-sm-4 col-xs-5">
                <p>7 Février 2016</p>
              </div>

              <div class="date taille_img2 col-md-2 col-sm-2 col-xs-5">
                <img src="img-content/folder.png" alt="Date">
              </div>

              <div class="date col-md-4 col-sm-4 col-xs-5">
                <p>Non Classé</p>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js " charset="utf-8 "></script>
<script src="js/bootstrap.min.js " charset="utf-8 "></script>

<script type="text/javascript ">
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
