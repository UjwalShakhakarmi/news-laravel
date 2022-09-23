<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .content {
        text-align: center;
        margin:73px;
        margin-left:361px;
        border:1px solid black;
        width:800px;
    }
    h1 {
        text-align: center;
        text-transform : uppercase;
    }
    h2 {
        font-size:30px;
    }
    h2:hover {
        font-size:35px;
        transition:0.9s;
        color:red;
    }

    </style>
</head>
<body>
<div class="content">
    <h2>{{$article['title']}}</h1>
    <p>{{$article['desc']}}</p>
</div>
</body>
</html>