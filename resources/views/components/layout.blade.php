<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset("css/main.css") }}">

</head>

<body>
    <header>
        <div class="avatar">
            <img src>
        </div>
        <div class="title">
            <span>My Organization Name</span>
            <span> Category</span>
        </div>
        <div class="action-btns">
            <div class="btn">Login</div>
        </div>
    </header>
    <main>
        <section></section>
        <section>
            {{ $slot }}
        </section>
    </main>
</body>

</html>
