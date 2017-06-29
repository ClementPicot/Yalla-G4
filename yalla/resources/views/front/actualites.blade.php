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
                        <h4><a href="#">Faire un don</a></h4></div>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--FIN HEADER-->

<!--Actualite-->
<main id="actualite">
    <section class="actu">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="container_article col-md-12 col-sm-12 col-xs-12">
                    @foreach ($articles as $article)
                    <div class="article_shadow col-md-3 col-sm-5 col-xs-12" href="{{ route('article', $article->id) }}">
                        <div class="margin_article col-md-12 col-sm-12 col-xs-12" href="{{ route('article', $article->id) }}">
                            <img src="{{asset('img-content/mission.jpg')}}" alt="Article 1">
                            <a href="{{ route('article', $article->id) }}">{{$article->title}}</a>

                            <div class="date taille_img2 col-md-2 col-sm-2 col-xs-5">
                                <img src="{{asset('img-content/clock.png')}}" alt="Date">
                            </div>

                            <div class="date col-md-4 col-sm-4 col-xs-5">
                                <p>{{$article->date}}</p>
                            </div>

                            <div class="date taille_img2 col-md-2 col-sm-2 col-xs-5">
                                <img src="{{asset('img-content/folder.png')}}" alt="Date">
                            </div>

                            <div class="date col-md-4 col-sm-4 col-xs-5">
                                <p>{{$article->categorie}}</p>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>



</main>

<!-- Debut Footer -->
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

<!-- Fin Footer -->


</body>

</html>
