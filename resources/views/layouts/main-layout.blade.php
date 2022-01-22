<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css' integrity='sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==' crossorigin='anonymous'/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Movies</title>
</head>
<body>
    <header class="my-4">
        <nav>
            <ul class="ms-list d-flex">
                <li class="me-3">
                    <a href="{{ route('home')}}">Home</a>
                </li>
                <li class="me-3">
                    <a href="/">Contacts</a>
                </li>
                <li class="me-3">
                    <a href="/">About Us</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="my-4">
        @yield('main-content')
    </main>

    <footer class="container text-center my-4">
        <span>
            All rights reserved
        </span>
    </footer>
</body>
</html>