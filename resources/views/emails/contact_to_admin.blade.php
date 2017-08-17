<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>{{ $data['name'] }}</h1>
<hr>
<h2>{{ $data['subject'] }}</h2>
<p>{{ $data['message'] }}</p>
<hr>
<hr>
<address>
    Tel: {{ $data['phone'] }} <br>
    <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
</address>
</body>
</html>