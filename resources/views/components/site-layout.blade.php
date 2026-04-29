<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Hello, world!</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <link rel="icon" href="favicon.png">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
<nav class="bg-amber-400">
    <a href="/">Welcome</a>
    <a href="/Contact">Contact</a>
    <a href="/About">About</a>
</nav>
<h1>Hello, world!</h1>
</br>

<main>
    {{$slot}}
</main>
<footer class="bg-blue-300">
    <p>Footer</p>
</footer>

</body>
</html>
