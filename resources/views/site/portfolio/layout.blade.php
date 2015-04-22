<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Raleway:900,100,500' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1 "/>
    <link rel="shortcut icon" href="/assets/images/logo.png">
    <link href="/assets/images/logo.png" rel="apple-touch-icon-precomposed"/>
    <title>Graphic Design, Web Design and Web Development. - Steven Hernandez - Richmond and Midlothian, VA</title>
</head>

<body>
    <header id="header">
        <div><a href="/">Steven<wbr/><span class="accent">Hernandez</span></a></div>
    </header>
    <nav id="sticky_navigation">
        <ul>
            <li><a href="#about">About.</a></li>
            <li><a href="#portfolio">Portfolio.</a></li>
            <li><a href="#contact">Contact.</a></li>
        </ul>
    </nav>
    <article>

        @yield('content')

    </article>

<footer>
    Steven<wbr/><span class="accent">Hernandez</span> 2014<br/>
    Graphic Design, Web Design and Web Development. <span class="accent">- Richmond and Midlothian, VA</span><br/><br/>
    <a href="/#contact">Contact</a>.
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="/assets/js/scroll.js"></script>
@include('layout._analytics')
</body>
</html>