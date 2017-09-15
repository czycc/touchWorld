<!DOCTYPE html>
<html lang="en">
<head>
    <title>touchWorld</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/new.css">

</head>
<body>
<div class="all">
    <div class="newList container">
        @foreach($articles as $article)
            <a href="{{ url('article').'/'.$article->id }}" class="row">
                <div class="col-md-6">
                    <img src="../uploads/{{$article->top_img}}" alt="">
                </div>
                <div class="col-md-6">
                    <h4>{{$article->title}}</h4>
                    <p>{{ $article->intro }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>

</body>
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>