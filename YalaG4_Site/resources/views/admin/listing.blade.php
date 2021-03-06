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
  <h1 class="text-center">Liste des articles</h1>
    <div role="main" class="container">
        <p><a href="{{route('admin.article_add')}}"><input type="button" value="Add" class="btn btn-success btn-sm"></a></p>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>titre</th>
                <th>Slug</th>
                <th>Date</th>
                <th>Media</th>
                <th>Catégorie</th>
                <th>Contenu</th>
                <th>Visible(1)/Non visible (0)</th>
            </tr>
         @foreach ($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->slug}}</td>
                <td>{{$article->date}}</td>
                <td>{{$article->media}}</td>
                <td>{{$article->categorie}}</td>
                <td>{{$article->contenu}}</td>
                <td>{{$article->visible}}</td>

                <td>
                <a href="{{route('admin.article_edit', $article->id)}}"><button type="button" value="Edit" class="btn btn-warning btn-sm">
                  Edit</button></a>
                <a onClick=\"return confirm('Are you sure you want to delete?')\" href="{{route('admin.article_delete', $article->id)}}"><input type="button" value="Delete" class="btn btn-danger btn-sm"></a>
                <a href="{{route('admin.change_visible', $article->id)}}" ><button type="button" name="button" class="btn btn-success" value="" >visible/non visible</button></a>
                </td>
            </tr>
        @endforeach
        </table>
    </div>
</body>
</html>
