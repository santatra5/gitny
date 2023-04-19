@extends('layouts.app')


@section('content')


  <!--start About Us-->
  <div class="about-us">
      <div class="text">
          <h4 class="animate-charcte">Decouvrez</h4>
          <h3>notre histoire</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>Plongez dans notre histoire et découvrez comment notre passion pour la coiffure nous a conduit à devenir l'un des meilleurs salons de coiffure de la ville. Nous avons une histoire inspirante et nous sommes impatients de la partager avec vous !</p>
          <div><a class="a-CTA" href="/about">A propos de nous</a></div>
      </div>
      <!-- <div class="image-container">
          <div class="image image1">
              <img src="/images/femmes-beau-nail-art.jpg" alt="fille en chapeau">
          </div>
          <div class="image image2">
              <img src="/images/IMPACT BEAUTY.jpg"  alt="fille en chapeau">
          </div>
      </div> -->
            
        <div class="slider-container slider-para">
            <div class="slider">
            <p><img src="/images/femmes-beau-nail-art.jpg" alt="fille en chapeau"></p>
            <p><img src="/images/woman-3146093_960_720.jpg" ></p>
            <p><img src="/images/15.jpg" alt="fille en chapeau"></p>
            <p><img src="/images/woman-3146093_960_720.jpg" ></p>
            <p><img src="/images/femmes-beau-nail-art.jpg" alt="fille en chapeau"></p>
            </div>
        </div>  
  </div>
  <!--End About Us-->

  <!--start Recipes-->
  <div class="recipes">
      <div class="image"></div>
      <div class="text">
          <h3 class="animate-charcte">les tendances</h3>
          <h3>IMPACT </h3>
      </div>
  </div>
  <!--End Recipes-->

  <!--start Menu-->
  <div class="menu">
      <div class="box-model">
          <i class="fas fa-times fa-2x close"></i>
          <div class="arrow">
              <div class="arrow arrow-right"></div>
              <div class="arrow arrow-left"></div>
          </div>
          <div class="box-image-container">
              <div class="box-image">
                  <img src="/images/fashion-2309519_960_720.jpg" >
              </div>
          </div>
      </div>
      <div class="menu-image-container">
          <div class="image active">
              <img src="/images/woman-3146093_960_720.jpg" >
          </div>
          <div class="image active">
              <img src="/images/woman-3040029_960_720.jpg" >
          </div>
          <div class="image active">
              <img src="/images/beauty-4993470_960_720.jpg" >
          </div>
          <div class="image active">
              <img src="/images/essential-oils-2738555_960_720.jpg" >
          </div>
         
      </div>
      <div class="text">
          <h4 class="animate-charcte">Decouvrez</h4>
          <h3>Nos Equipes</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>Découvrez notre équipe de coiffeurs talentueux et passionnés qui travaillent ensemble pour vous offrir une expérience de coiffure exceptionnelle. Notre équipe est notre fierté et nous sommes impatients de vous la présenter !</p>
          <div><a class="a-CTA" href="/actu">Equipe</a></div>
      </div>
  </div>
  <!--End Menu-->
 

  <div class="recipes">
      <div class="image">
          <h3 >Nos </h3><h3 style="margin-left: 90%;">A </h3>
          <h3 >Produits</h3><h3 style="margin-left: 84%;">votre </h3>
          <h3 >de Luxes</h3><h3 style="margin-left: 78%;">Services</h3>
        </div>
      <div class="text">
      <div class="slider-container slider-parad">
            <div class="slider">
            <p><img src="/images/1.jpg" alt="fille en chapeau"></p>
            <p><img src="/images/2.jpg" ></p>
            <p><img src="/images/3.jpg" alt="fille en chapeau"></p>
            <p><img src="/images/3.jpg" ></p>
            <p><img src="/images/1.jpg" alt="fille en chapeau"></p>
            </div>
        </div>  
      </div>
  </div>
  <!--start About Us-->
  <div class="reservation">
      <div class="text">
          <h4 class="animate-charcte">Nouveaux</h4>
          <h3>Dessign</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>Restez à jour avec nos dernières actualités et nos nouveaux designs de coupes de cheveux à la pointe de la mode. Nous sommes toujours à la recherche des dernières tendances et des techniques innovantes pour vous offrir le meilleur de la coiffure. Ne manquez pas nos dernières nouveautés !</p>
          <div><a class="a-CTA" href="/blog">Actualite</a></div>
      </div>
      <div class="image-container">
          <div class="image image1">
              <img src="/images/woman-4685862_960_720.jpg">
          </div>
          <div class="image image2">
              <img src="/images/woman-4873600_960_720.jpg">
          </div>
      </div>
  </div>
  <!--End About Us-->



@endsection