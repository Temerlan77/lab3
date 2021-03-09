<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400i|Open+Sans:700|Raleway:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>ActiveBox</title>
</head>
<body>
<style>
body {
    margin: 0;

    font-family: 'Raleway', sans-serif;
    font-size: 14px;
    color: #6c7279;
    -webkit-font-smoothing: antialiased;

    background-color: #fff;
}

*,
*:before,
*:after {
    box-sizing: border-box;
}

h1, h2, h3, h4, h5, h6 {
    margin: 0;
}

p {
    margin: 0 0 10px;
}


/* Container
===================*/
.container {
    width: 100%;
    max-width: 1170px;
    margin: 0 auto;
}


/* Header
===================*/

.header {
    width: 100%;
    height: 100px;

    position: absolute;
    top: 0;
    left: 0;
    z-index: 1000;
}

.header__inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 35px 0;

    border-bottom: 1px solid #515369;
}


/* Nav
===================*/

.nav {
    display: flex;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
}

.nav__link {
    margin-left: 50px;

    color: #fff;
    text-decoration: none;
    opacity: .75;

    transition: opacity .1s linear;
}

.nav__link:first-child {
    margin-left: 0;
}

.nav__link:hover {
    opacity: 1;
}


/* Intro
===================*/

.intro {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 750px;
    padding-top: 100px;

    background: #31344e url("img/intro-bg.jpg") center no-repeat / cover;
    /*
    Если не работает запись выше, используйте эту:
    background: #31344e url("img/intro-bg.jpg") center no-repeat;
    background-size: cover;
    */
}

.intro__inner {
    width: 100%;
    max-width: 970px;
    margin: 0 auto;

    text-align: center;
}

.intro__title {
    margin: 0 0 30px;

    font-family: 'Open Sans', sans-serif;
    font-size: 65px;
    line-height: 1.1;
    color: #fff;
    font-weight: 700;
    text-transform: uppercase;
}

.intro__subtitle {
    margin-bottom: 60px;

    font-size: 22px;
    color: #fff;
    line-height: 1.5;
    font-weight: 400;
}


/* Button
===================*/
.btn {
    display: inline-block;
    vertical-align: top;
    padding: 14px 40px;

    border-radius: 2px;
    border: 0;
    cursor: pointer;

    font-family: 'Raleway', sans-serif;
    font-size: 13px;
    color: #fff;
    font-weight: 600;
    text-transform: uppercase;
    text-decoration: none;

    transition: background .1s linear;
}

.btn--red {
    background-color: #e84545;
}

.btn--red:hover {
    background-color: #dd3434;
}











</style>


<!-- Header -->
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <img src="img/activebox-logo.png" alt="">
            </div>

            <nav class="nav">
                <a class="nav__link" href="#">Features</a>
                <a class="nav__link" href="#">Works</a>
                <a class="nav__link" href="#">Our Team</a>
                <a class="nav__link" href="#">Testimonials</a>
                <a class="nav__link" href="#">Download</a>
            </nav>
        </div>
    </div>
</header>


<!-- Intro -->
<div class="intro">
    <div class="container">
        <div class="intro__inner">
            <h1 class="intro__title">Your Favorite One Page Multi Purpose Template</h1>
            <h2 class="intro__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna vel scelerisque nisl consectetur et.</h2>
            <a class="btn  btn--red" href="#">Find Out More</a>
        </div>
    </div>
</div>


</body>
</html>
