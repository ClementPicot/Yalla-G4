<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div role="main" class="container">
        <form class="" action="{{route('admin.article_update', $article->id)}}" method="post">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <label for="title">Titre</label>
          <input type="text" name="title" value="{{$article->title}}" class="form-control">
          <label for="title">Slug</label>
          <input type="text" name="slug" value="{{$article->slug}}" class="form-control">
          <label for="title">date</label>
          <input type="text" name="date" value="{{$article->date}}" class="form-control">
          <label for="title">media</label>
          <input type="text" name="media" value="{{$article->media}}" class="form-control">
          <label for="title">catégorie</label>
          <input type="text" name="categorie" value="{{$article->catégorie}}" class="form-control">
          <label for="title">Texte de l'article</label>
          <textarea name="contenu" rows="8" cols="80" class="form-control">{{$article->contenu}}</textarea>
          <input type="submit" name="" value="Modifier" class="btn btn-success">
        </form>
    </div>
</body>
</html
