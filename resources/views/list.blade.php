<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>menu</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/assets/sass/icons.scss', 'resources/assets/sass/trail.scss', 'resources/assets/sass/loader.scss'])
    <script src="https://kit.fontawesome.com/aa77dd4e79.js" crossorigin="anonymous"></script>
</head>
<body class="text-orbitron">

<div class="flex flex-col">
    <h1 class='group text-white transition-all duration-300 ease-in-out md:translate-x-44 md:translate-y-20'>
        <span class='hover:bg-neutral-400 bg-left-bottom bg-gradient-to-r from-white to-white bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out'>
          tailwind rebuilds</span>

        <p class="absolute hidden group-hover:block transition duration-500 ease-in-out delay-150 mt-2 bg-red-500 w-120 p-0 m-0 text-left">
            a collection of web pages and web components built in tailwind</p>
    </h1>

    <div class="loader md:absolute md:bottom-0 md:right-0 m-32">
        <a class="loader__square square--1 cursor-pointer" href="/github" target="_blank"></a>
        <a class="loader__square square--3" href="#"></a>
        <a class="loader__square square--2" href="#"></a>
        <a class="loader__square square--4" href="#"></a>
    </div>
</div>

</body>
</html>
