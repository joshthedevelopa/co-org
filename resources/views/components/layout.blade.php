<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">

</head>

<body>

    <header>
        <nav class="navigation">
            <img class="logo" src="{{ asset('images/logo.png') }}">
            <ul>
                <li>Subscriptions</li>
                <li>Request</li>
            </ul>
        </nav>
        <div class="profile">
            <div class="title">
                <span>Org Me Inc.</span>
                <span>NGO</span>
            </div>
            <div class="avatar">
                <img src="">
            </div>
            <div class="btn primary">Signin</div>
        </div>
    </header>
    <main>

        {{ $slot }}

    </main>
    <footer>
        <span>Product of the SF Foundation</span>
    </footer>

</body>

</html>
