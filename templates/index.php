<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laventure framework</title>

    <style>
        nav ul li {
            display: inline-block;
            list-style: none;
            border: 1px solid #ccc;
        }

        nav ul li a {
            text-decoration: none;
        }
    </style>
</head>
<body>

<nav>
    <ul>
        <li>
            <a href="<?= $router->generate('homepage') ?>">Home</a>
        </li>
        <li>
            <a href="<?= $router->generate('about') ?>">About</a>
        </li>
        <li>
            <a href="<?= $router->generate('contact') ?>">Contact</a>
        </li>
    </ul>
</nav>
</body>
</html>