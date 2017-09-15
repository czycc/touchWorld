<!DOCTYPE html>
<html lang="en">
<head>
    <title>touchWorld</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/NewsDetails.css">
</head>
<body>
<div class="all">
    <div class="newList container">
        <h3 class="title">{{ $article->title }}</h3>
        {!! $article->content !!}
    </div>

</div>

</body>
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>