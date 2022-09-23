<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main {
        border:1px solid black;
        /* background-color:rgb(28, 218, 158);;     */
        }
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
    a {
        font-size:30px;
        text-decoration:none;
        color:black;
    }
    a:hover {
        font-size:35px;
        transition:0.9s;
        color:red;
    }

    </style>
</head>
<body>
    <div class="main">
        <h1>{{$header}}</h1>
            @foreach($article as $value)
            <div class="content">
                <h2> <a href="article/{{$value['id']}}">{{$value['title']}}</a> </h1>
                <p>{{$value['desc']}}</p>
            </div>
        @endforeach
    </div>
</body>
    
</html>