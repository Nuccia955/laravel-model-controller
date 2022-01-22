<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Movies</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/">Contacts</a>
                </li>
                <li>
                    <a href="/">About Us</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('main-content')
    </main>

    <footer>
        <span>
            All rights reserved
        </span>
    </footer>
</body>
</html>