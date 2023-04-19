<!DOCTYPE html>
<html>
  <head>
    <title>Administration</title>
    <style>
      /* Centrer le contenu de la page */
      html, body {
        display: flex;
        justify-content: center;
        height: 100%;
        background-color: #f5f5f5;
      }

      /* Définir le style du titre h1 */
      h1 {
        padding: 0;
        margin: 0;
        outline: none;
        font-family: Roboto, Arial, sans-serif;
        font-size: 16px;
        color: #333;
      }

      /* Style du titre principal */
      h1 {
        padding: 10px 0;
        font-size: 32px;
        font-weight: 300;
        text-align: center;
      }

      /* Style du bloc principal de la page */
      .main-block {
        text-align: center;
        min-width: 360px;
        min-height: 200px;
        padding: 20px;
        margin: auto;
        border-radius: 5px;
        border: solid 1px #ccc;
        box-shadow: 1px 2px 5px rgba(0,0,0,.1);
        background: #fff;
      }

      /* Style des liens */
      a {
        display: inline-block;
        padding: 10px 20px;
        font-size: 20px;
        font-weight: 400;
        color: #fff;
        text-align: center;
        text-decoration: none;
        border-radius: 3px;
        transition: background-color 0.3s ease;
        margin-right: 10px;
      }

      a {
        background-color: #f5f5f5;
        border:none;
        color: #f5f5f5;
      }
      a:hover {
        background-color: #fefefe;
        color: #734484;
      }

      /* Style du lien pour s'enregistrer */
      #ghost {
        background-color: #734484;
        border:none;
      }

      #ghost:hover {
        background-color: #fefefe;
        color: #734484;
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <h1>Administration</h1>
      <a class="no-underline hover:underline" href="{{ route('login') }}" id="ghost">{{ __('Se connecter') }}</a>

      <!-- <a href="{{ route('logout') }}" class="no-underline hover:underline"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();" id="ghost">{{ __('Déconnexion') }}</a>

 -->

<a href="{{ route('logout') }}" id="ghost"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>




    </div>
    @if (Route::has('register'))
        <a class="no-underline hover:underline" style="margin-top: 100%;"  href="{{ route('register') }}">{{ __("S'enregistrer") }}</a>
      @endif
  </body>
</html>