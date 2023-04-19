<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Impact Beauty</title>
    <meta name="description" content="impactB">
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">

    <!-- Place favicon.ico in the root directory -->
 

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet">
    <!--Fonts-->

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!--FontAwesome-->
</head>

<body class="stop-scroll">

  <!--Start loader-->
  <div class="loader-wrap">
      <div class="loader">
          <span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span>
      </div>
  </div>
  <!--Start Dots-->
  <div class="dots">
      <div class="active one" data-x="header"></div>
      <div class="two" data-x=".recipes"></div>
      <div class="three" data-x=".fixed-image"></div>
  </div>
  <!--End Dots-->
 <!--Start Header-->
  <header>
      <nav style="background-color: black;">
          <div class="logo">
          <a href="/"><img src="/images/t2.png" style="width: 80px; position: fixed; top: 0;"></a>
        

        
        </div>
          <div class="navigation-bar">
              <ul>    
                  <li><a href="/">Aceuil<span class="underline"></span></a></li>
                  <li><a href="/blog">Actualite<span class="underline"></span></a></li>
                  <li><a href="/equipe">Equipes<span class="underline"></span></a></li>
                  <li><a href="/about">About<span class="underline"></span></a></li>
                  <li><a href="/contact">Contact<span class="underline"></span></a></li>  
                  @if (isset(Auth::user()->id) && Auth::user()->id )
        
<a href="{{ route('logout') }}" id="ghost"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>


@endif  
                  
              </ul>
          </div>
      </nav>
      <div class="text">
              <a href="" target="_blank">
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="animate-charcter">Impact Beauty</h3>
    </div>
  </div>
</div>
  </a>
            
          <br>

         
      </div>
     
  </header>
  <!--End Header-->

</body>
</html>
<style>
  /*Start Global*/
  .animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );

  background-size: auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 5s linear infinite;
  display: inline-block;
      font-size: 100px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}


.animate-charcte
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #18F892 29%,
    #ff1361 67%,
    #F89C18 100%
  );

  background-size: auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 4s linear infinite;
  display: inline-block;
      font-size: 100px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}







  .slider-para{
    max-width: 600px;
    margin: 100px auto;
    overflow: hidden;
    border: 1px;
}

.slider-para .slider{
    display: flex;
    animation: slider-para 12s infinite ease-in-out;
}
.slider-para p{
    margin-top: auto;
    max-height: 200px;
    flex-shrink: 0;
    width: 100%;
    padding: 75px 0;
    text-align: center;
    color: black;
}

@keyframes slider-para{
    0%,
    20% {
        transform: translateX(0);
    }
    25%,
    45%{
        transform: translateX(-100%);
    }
    50%,
    70%{
        transform: translateX(-200%);
    }
    75%,
    95%{
        transform: translateX(-300%);
    }
    100%{
        transform: translateX(-400%);
    }
}

/** vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv*/


.slider-parad{
    max-width: 900px;
    margin: 100px auto;
    overflow: hidden;
    border: 1px;
}

.slider-parad .slider{
    display: flex;
    animation: slider-parad 12s infinite ease-in-out;
}
.slider-parad p{
    
    margin-top: auto;
    max-height: 500px;
    flex-shrink: 0;
    width: 101%;
    padding: 75px 0;
    text-align: center;
    color: black;
}

@keyframes slider-parad{
    0%,
    20% {
        transform: translateX(0);
    }
    25%,
    45%{
        transform: translateX(-100%);
    }
    50%,
    70%{
        transform: translateX(-200%);
    }
    75%,
    95%{
        transform: translateX(-300%);
    }
    100%{
        transform: translateX(-400%);
    }
}

/** vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv*/


.slider-parady{
    max-width: 900px;
    margin: 100px auto;
    overflow: hidden;
    border: 1px;
}

.slider-parady .slider{
    display: flex;
    animation: slider-parady 7s infinite ease-in-out;
}
.slider-parady h2{
    
    margin-top: auto;
    max-height: 500px;
    flex-shrink: 0;
    width: 101%;
    padding: 75px 0;
    text-align: center;
    color: black;
}

@keyframes slider-parady{
    0%,
    20% {
        transform: translateX(0);
    }
    25%,
    45%{
        transform: translateX(-100%);
    }
    50%,
    70%{
        transform: translateX(-200%);
    }
    75%,
    95%{
        transform: translateX(-300%);
    }
    100%{
        transform: translateX(-400%);
    }
}


/**/ 
















* {
    box-sizing: border-box;
}
body {
    margin: 0;
    padding: 12px;
}

a {
    text-decoration: none;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
img {
    max-width: 90%;
}
h2 {
    font-family: 'Herr Von Muellerhoff', cursive;
    font-size: 100px;
    font-weight: normal;
    margin: 0 0 -5px;
    
}
h1, h3 {
    font-family: "Source Code Pro", sans-serif;
    font-size: 47px;
    font-weight: bold;
    letter-spacing: 9.4px;
    margin: 0 0 15px; 
}
p {
    color: #515151;
    line-height: 27px;
}

/*End Global*/

/*Start Mutual*/
p, .a-CTA, input, header .navigation-bar a, .copyright li, .contact .form form label, .contact .form form button {
    font-family: Cabin, sans-serif;
}
.fa-asterisk, .a-CTA, h2, header .navigation-bar a:hover, header nav.active .navigation-bar a:hover, footer .social-media .links a:hover, .copyright .info li a, .copyright .CTA li a:hover {
    color: #a96700;
}
header nav .navigation-bar .underline, header .text .button button:hover, .contact .form form button:hover, .contact .text i:hover {
    background-color: #a96700;
}
header .navigation-bar ul li, header .text, .about-us .text, .reservation .text, .menu .box-model, .menu .text, .fixed-image .text, footer, .copyright, .contact .text i {
    text-align: center;
}
header nav, header .navigation-bar ul, .about-us, .reservation, .about-us .image-container, .reservation .image-container, .menu, .menu .menu-image-container, footer .contact-container, .copyright ul, .contact {
    display: flex;
}
header nav .toggle, header nav .toggle span, header .navigation-bar, header .navigation-bar ul, .menu .box-model .close, footer .social-media .links a, .copyright .CTA li a {
    transition: .3s;
}
header, header nav .toggle span, header .navigation-bar a, header .text, header .text .arrow .left, header .text .arrow .right, .recipes, .menu .box-image-container, .fixed-image .text, .copyright, .copyright .arrow-up {
    position: relative;
}
header nav .toggle, header .navigation-bar .underline, header .text .arrow .left:after, header .text .arrow .right:after, header .svg-down, header .arrow-down, .recipes .text, .menu .box-model .close, .menu .box-model .arrow .arrow-right,.menu .box-model .arrow .arrow-left, .menu .box-image-container .box-image, .copyright .svg-up {
    position: absolute;
}
.recipes .text, .fixed-image .text, .menu .box-image-container, .menu .box-image-container .box-image {
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
header nav, header .navigation-bar a:hover .underline, header .navigation-bar li.active .underline, .menu .box-model, .menu .box-image-container, .menu .box-image-container .box-image {
    width: 100%;
}
button, .dots > div, header nav .toggle, header .arrow-down, .menu .box-model .close, .menu .box-model .arrow .arrow-right,.menu .box-model .arrow .arrow-left, .menu .menu-image-container .image img, footer .newsletter i, .copyright .arrow-up {
    cursor: pointer;
}
.dots .active, header nav.active, header nav.active .toggle.active span, header nav .toggle span, header .navigation-bar .underline, header .text .arrow .left, header .text .arrow .right, header .text .button button, .contact form button {
    background-color: #fff;
}
h1, h3, header .navigation-bar a, header .text span, .menu .box-model .close:hover, footer .text h2, footer .text p, footer .social-media .links a, .contact .text i, .contact .form form button {
    color: #fff;
}
header nav, header .navigation-bar.show, header .navigation-bar a:hover .underline, header .navigation-bar li.active .underline, header .text .arrow .left:after, .menu .box-model, .copyright .arrow-up {
    left: 0;
}
header .text .arrow .left:after, header .text .arrow .right:after, header .text span, footer .social-media .links a, footer .newsletter i, .copyright .arrow-up, .contact .text i, .contact .form form label {
    display: inline-block;
}
/*End Mutual*/

/* Start Header*/
header {
    height: calc(60vh - 22px);
    background: url("/images/girl.jpg") fixed bottom;
    background-size: cover;
    padding: 20px 50px;
}


header nav {
    position: fixed;
    top: 0;
    height: 10px;
    padding: 36px 36px 20px;
    z-index: 20;
}

header nav .logo {
    flex-basis: 56%;
    padding-left: 50px;
}
header .navigation-bar.show {
    width: 40%;
}
header .navigation-bar.show a {
    color: #ccc !important;
}
header .navigation-bar.show a:hover {
    color: #fff !important;
}
header .navigation-bar ul li {
    flex: 1;
    padding: 0 10px;
}
header .navigation-bar a {
    text-decoration: none;
    transition: all .5s;
    font-size: 16px;
}
header nav.active .navigation-bar a {
    color: #000;
}
header .navigation-bar .underline {
    height: 2px;
    width: 0;
    left: 50%;
    bottom: -4px;
    transition: all .3s;
    display: block;
}
header .text {
    top: 24%;
}
header .text h1 {
    margin-bottom: 0;
}

header .text span {
    font-family: "Source Code Pro", sans-serif;
    font-size: 15px;
    margin-bottom: 12px;
}
header .text .button button, .contact form button {
    border: none;
    padding: 9px 18px;
    letter-spacing: 2.4px;
    font-size: 12px;
    font-family: source_sans_problack, sans-serif;
    border-radius: 3px;
}
header .text .button button, .contact form button:focus {
    outline: none;
}
header .svg-down {
    bottom: 0;
    left: 50%;
    z-index: 5;
    margin-left: -96px;
    margin-bottom: -12px;
    color: #fff;
}
header .arrow-down {
    width: 70px;
    height: 50px;
    bottom: -10px;
    left: 50%;
    transform: translate(-50%, 0);
    z-index: 10;
}
/*End Header*/

/*Start About-Us*/
.about-us, .reservation {
    padding: 60px;
}
.about-us .text, .reservation .text {
    flex: 50%;
    padding: 40px 52px 0 0;
}
.about-us .text h3, .reservation .text h3 {
    color: #000;
}
.about-us .text .fa-asterisk, .reservation .text .fa-asterisk {
    color: #9a9998;
}
.about-us .image-container, .reservation .image-container {
    flex: 50%;
}
.about-us .image, .reservation .image {
    margin-left: 20px;
}
/*End About-Us*/

/*start*/
.recipes .image {
    height: 350px;
    background: url("/images/bouquet-4736413_960_720.jpg") fixed center;
    background-size: cover;
}
/*End*/

/*Start Menu*/
.menu {
    padding: 60px;
}
.menu .box-model {
    display: none;
    position: fixed;
    height: 100%;
    top: 0;
    z-index: 20;
    background-color: rgba(0,0,0,.7);
}
.menu .box-model.active {
    display: block;
}
.menu .box-model.active body {
    overflow: hidden;
}
.menu .box-model .close {
    color: #ccc;
    right: 25px;
    top: 10px;
    z-index: 20;
}
.menu .box-model .arrow .arrow-right,.menu .box-model .arrow .arrow-left {
    width: 40px;
    height: 40px;
    right: 20px;
    top: 50%;
    border-right: 2px solid #fff;
    border-top: 2px solid #fff;
    transform: rotate(45deg);
    z-index: 20;
    
}
.menu .box-model .arrow .arrow-left {
    left: 20px;
    transform: rotate(-135deg);
}
.menu .box-image-container {
    height: 100%;
}
.menu .box-image-container .box-image img.active {
    animation: scale .5s;
}
@keyframes scale {
    from {transform: scale(0,0)}
    to {transform: scale(1,1)}
}
.menu .menu-image-container {
    flex-wrap: wrap;
    flex: 60%;
}
.menu .menu-image-container .image {
    margin: 0 20px 20px 0;
    flex: calc( 50% - 40px);
}
.menu .text {
    flex: 55%;
    padding: 40px 0 0 62px;
}
.menu .text h3 {
    color: #000;;
}
.menu .text .fa-asterisk {
    color: #9a9998;
}
/*End Menu*/

/*End Home Page*/
/*End Home Page Responsive*/
</style>
<script>
  // constants
const body = document.querySelector("body"),
    loader = document.querySelector(".loader-wrap"),
    links = document.querySelectorAll('a[href="#"]'),
    nav = document.querySelector("header nav"),
    navToggle = document.querySelector("header nav .toggle"),
    navSpanMiddle = document.querySelector("header nav .toggle .middle"),
    navNavigationBar = document.querySelector("header nav .navigation-bar"),
    navNavigationBarLi = document.querySelectorAll(
        "header nav .navigation-bar li"
    ),
    headerText = document.querySelector("header .text"),
    headerSection = document.querySelector("header"),
    aboutSection = document.querySelector(".about-us"),
    recipeSection = document.querySelector(".recipes"),
    menuSection = document.querySelector(".menu"),
    fixedImageSection = document.querySelector(".fixed-image"),
    footerSection = document.querySelector("footer"),
    dotOne = document.querySelector(".dots .one"),
    dotTwo = document.querySelector(".dots .two"),
    dotThree = document.querySelector(".dots .three"),
    dots = document.querySelectorAll(".dots > div"),
    logoImage = document.querySelector("header nav .logo img"),
    svgDown = document.querySelector("header .arrow-down"),
    svgUp = document.querySelector(".copyright .arrow-up"),
    menuImgs = document.querySelectorAll(".menu .menu-image-container img"),
    boxModel = document.querySelector(".menu .box-model"),
    menuImageContainer = document.querySelector(".menu-image-container"),
    boxModelArrow = document.querySelector(".menu .box-model .arrow"),
    boxModelImage = document.querySelector(".menu .box-model img"),
    pageTitle = document.querySelector("title");


// prevent links click hash
links.forEach(link =>
    link.addEventListener("click", function(e) {
        e.preventDefault();
    })
);

navToggle.addEventListener("click", () => {
    navToggle.classList.toggle("active");
    navSpanMiddle.classList.toggle("hide");
    navNavigationBar.classList.toggle("show");
});


// svg-up smooth scroll
svgUp.addEventListener("click", () => {
    window.scroll({
        top: 0,
        behavior: "smooth"
    });
});

window.onscroll = function() {
    // make navbar fixed & change logo color
    if (window.pageYOffset > headerSection.offsetHeight - 75) {
        nav.classList.add("active");
        logoImage.src = "/images/logoo.png";
    } else {
        nav.classList.remove("active");
        logoImage.src = "/images/logoo.png";
    }

    // home page JS
    if (pageTitle.text === "- Restaurant") {
        //change dots background color
        if (window.pageYOffset < headerSection.offsetHeight * 0.5) {
            dots.forEach(dot => dot.classList.remove("black"));
            dotTwo.classList.remove("active");
            dotOne.classList.add("active");
        } else if (
            window.pageYOffset > headerSection.offsetHeight * 0.5 &&
            window.pageYOffset < recipeSection.offsetTop * 0.72
        ) {
            dots.forEach(dot => dot.classList.add("black"));
        } else if (
            window.pageYOffset > recipeSection.offsetTop * 0.75 &&
            window.pageYOffset < menuSection.offsetTop * 0.81
        ) {
            dots.forEach(dot => dot.classList.remove("black"));
            dotOne.classList.remove("active");
            dotThree.classList.remove("active");
            dotTwo.classList.add("active");
        } else if (
            window.pageYOffset > menuSection.offsetTop * 0.81 &&
            window.pageYOffset < fixedImageSection.offsetTop * 0.86
        ) {
            dots.forEach(dot => dot.classList.add("black"));
            dotThree.classList.remove("active");
            dotTwo.classList.add("active");
        } else if (
            window.pageYOffset > fixedImageSection.offsetTop * 0.86 &&
            window.pageYOffset < footerSection.offsetTop * 0.72
        ) {
            dots.forEach(dot => dot.classList.remove("black"));
            dotTwo.classList.remove("active");
            dotThree.classList.add("active");
        } else if (
            window.pageYOffset > footerSection.offsetTop * 0.72 &&
            window.pageYOffset < footerSection.offsetTop * 0.901
        ) {
            dots.forEach(dot => dot.classList.add("black"));
        } else if (window.pageYOffset > footerSection.offsetTop * 0.901) {
            dots.forEach(dot => dot.classList.remove("black"));
        }
    }
};

// home page JS
if (pageTitle.text === "ROSA- Restaurant") {
    // svg-down smooth scroll
    svgDown.addEventListener("click", () => {
        window.scroll({
            top: aboutSection.offsetTop - 30,
            behavior: "smooth"
        });
    });


    // box model functions
}
</script>
