<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <h1 class="d-flex justify-content-center">{{ $mailData['title'] }}</h1>
    <hr>

    <h1> {{ $mailData['id'] }} </h1>
    <hr>
    <h1>{{ $mailData['body'] }}</h1>
    <hr>
    <p>{{ $mailData['description'] }}</p>
    <hr>
    <p>{{ $mailData['img'] }}</p>
</body>
</html>
