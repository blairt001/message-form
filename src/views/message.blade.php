<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Send us a message</title>
</head>
<body>
<center><h1>Send us a message</h1>

<form action="{{'message'}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Your Full Name">
    <br />
    <br />
    <input type="email" name="email" placeholder="Your Email Here">
    <br />
    <br />
    <textarea name="message" cols="20" rows="10" placeholder="Actual Mesage"></textarea>
    <br />
    <input type="submit" value="Send">
    </form>
</center>
</body>
</html>
