<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.png" />
    <link rel="stylesheet" href="css/general.css">

    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>mashad TAXI</title>
</head>
<body dir="rtl">
@include('header')

@yield('content')

@include('footer')

<script src="js/script.js"></script>
<script src="js/notification.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAovp7XpE5uP9WCfdcUPdHBb21iGk0JhI&callback=myMap"></script>
</body>
</html>
