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
                        <h4><a href="{{asset('soutenir')}}">Faire un don</a></h4></div>

                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Fin HEADER -->

<!-- Debut Body -->
<main id="contact">

    <section class="don">
        <div class="container-fluid">
            <h1>Faire un don</h1>
        </div>
        <div class="don_content col-md-12 col-sm-12 col-xs-12">

            <div class="background_don col-md-3 col-sm-5 col-xs-12">
                <h2>Chèque Bancaire</h2>
                <br>
                <p>à l’ordre de « Yalla! Pour les Enfants »
                    <br>
                    <br> adressé à
                    <br>
                    <br> Yalla! 13, rue René Villermé 75011 Paris
                </p>
            </div>

            <div class="background_don col-md-3 col-sm-5 col-xs-12">
                <h2>Virement bancaire</h2>
                <br>
                <p>Virement bancaire sur le compte
                    <br>
                    <br> de notre association
                    <br>
                    <br><a href="#">coordonnées bancaires</a>
                </p>
            </div>

            <div class="background_don col-md-3 col-sm-5 col-xs-12">
                <h2>Don en ligne</h2>
                <br>
                <p>Don en ligne sur le site de notre
                    <br>
                    <br>partenaire la plateforme <a href="#">de financement
                        <br>
                        <br>participatif W4 (Women’s WorldWide Web). </a>
                </p>
            </div>

        </div>
    </section>

    <section class="don membre">
        <div class="container-fluid">
            <h1>Devenir Membre</h1>
        </div>
        <div class="don_content col-md-12 col-sm-12 col-xs-12">

            <div class="background_don col-md-5 col-sm-8 col-xs-12">
                <h2>Par courrier</h2>
                <br>
                <p>Yalla! 13, rue René Villermé 75011 Paris
                    <br>
                    <br>accompagné d’un chèque de 20 euros (montant de l’adhésion annuelle) à
                    <br>
                    <br>l’ordre de “Yalla! Pour les Enfants”
                </p>
            </div>

            <div class="background_don col-md-5 col-sm-8 col-xs-12">
                <h2>Par e-mail</h2>
                <br>
                <p>à l’ordre de « Yalla! Pour les Enfants »
                    <br>
                    <br> adressé à
                    <br>
                    <br>Yalla! 13, rue René Villermé 75011 Paris
                </p>
            </div>

        </div>
    </section>

    <section class="don membre contact_text">
        <div class="container-fluid">
            <div class="don_content col-md-12 col-sm-12 col-xs-12">
                <div class="message_contact col-md-10 col-sm-10 col-xs-12">
                    <p>Pour répondre à nombreuses de vos questions, nous n’organisons pas de parrainage individuel et personnalisé en raison de nos ressources, limitées, et
                        <br> de notre principe d’équité, de ne pas faire de différence entre nos écoliers. Toutefois, le don régulier de nos adhérents et sympathisants n’en reste pas
                        <br> moins crucial pour le bon déroulement de l’année scolaire. il permettra aux enfants d’avoir une scolarité ininterrompue, ce qui est indispensable à son
                        <br>équilibre et à sa progression. En donnant 15 euros par mois, vous couvrez les frais de scolarisation d’un enfant syrien pendant une semaine.
                        <br>
                        <br> Il suffit pour cela d’autoriser un virement automatique de votre compte en banque sur celui de Yalla! en indiquant en objet : “Parrainage Yalla!”.
                    </p>
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
