<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div>
        <nav class="flex justify-between">
            <div>
                <a href="{{Vite::asset('resources/images/logo.svg')}}"><img src="" alt="logo"></a>
                </div>
            <div>
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            <div><a href="">Post a Job</a></div>
        </nav>

        <main>{{$slot}}</main>
    </div>
</body>
</html>