<div>

    @include('layouts.header')
</div>


<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl" style="color: #FFC300;text-align: center;">
            Notre equipes
        </h1>
        <h4>
        Bienvenue sur notre page dédiée à notre équipe de coiffure et d'esthétique ! Nous sommes une équipe passionnée et talentueuse, composée de professionnels qualifiés et expérimentés dans le domaine de la beauté et du bien-être.

Notre mission est de vous offrir des services de qualité supérieure.

        </h4>
    </div>
</div>


@if (session()->has('messages'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('messages') }}
        </p>
    </div>
@endif
 
@if (Auth::check())
<div class="pt-15 w-4/5 m-auto">
    <a href="/equipe/create" class="btn-create">
        Créer une équipe
    </a>
</div>


@endif
<div class="line">
  <div class="row">
    @foreach ($equipes as $equipe )
      <div class="col">
        <div class="d-flex">
          <img src="{{ asset('images/' . $equipe->image_path) }}" class="album-image d-inline-block" style="max-width: 400px;max-height: 300px;">
          <h5>{{ $equipe->title }}</h5><br>
  <h5 style="padding: 10px;margin-top: 40px;background-color:white ;"> {{ $equipe->description }}</h5>
        </div>

        @if (isset(Auth::user()->id) && Auth::user()->id == $equipe->user_id)
          <span class="float-right">
            <a href="/equipe/{{ $equipe->slug }}/edit" class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
            <button class="btn-edit" onclick="editItem()">
  <i class="fa fa-pencil"></i> Modifier
</button>  
            </a>
          </span>
           <span class="float-right">
            <form action="/equipe/{{ $equipe->slug }}" method="POST">
              @csrf
              @method('delete')
              <button class="btn-delete" type="submit">
  <i class="fa fa-trash"></i> Supprimer
</button>
            </form>
          </span>
        @endif
      </div>
    @endforeach
  </div>
</div>

<div>
            @include('layouts.footer')
      </div>
      <style>
        h4 {
  font-size: 20px;
  font-weight: bold;
  color: #333;
  text-align: center;
  margin-bottom: 1rem;
}

  .btn-edit {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .btn-edit i {
    margin-right: 5px;
  }
  
  .btn-edit:hover {
    background-color: #0069d9;
  }
  
    .btn-delete {
    background-color: #dc3545;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .btn-delete i {
    margin-right: 5px;
  }
  
  .btn-delete:hover {
    background-color: #c82333;
  }
  
  .d-flex {
    position: relative;
    display: inline-block;
  }
  
  .d-flex:hover h5{
    display: block;
    background-color: gold;
  }
  .d-flex:hover h4 {
    background-color: #F89C18;
    display: inline-block;
    padding: 5px;
    margin-top: 30px;
    
  }
  
  .d-flex h5,
  .d-flex h4 {
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    padding: 10px;
    transform: translate(-50%, -50%);
    margin-bottom: 10px;
  }
  
  .d-flex h4 {
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    padding: 10px;
    transform: translate(-50%, -50%);
      bottom: 0;
  }
  .album-image:hover + h5,
  .album-image:hover + h4 {
    display: block;
  }
  
  
    .btn-create {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1.2rem;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    border-radius: 20px;
    transition: all 0.3s ease-in-out;
    margin-top: -10px;
  }
  
  .btn-create:hover {
    background-color: #0062cc;
  }
    .line {
      display: inline-block;
    }
  
    .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin: -5px;
    }
  
    .col {
      flex-basis: 30%;
      padding: 0px;
      margin: 5px;
    }
  
    .album-image {
      width: 100%;
      border-radius: 10%;
      box-shadow: 5px 5px 8px 0 rgba(0, 0, 0, 0.6);
      transition: transform 0.2s;
      margin: 0px;
    }
  
    .album-image:hover {
      transform: scale(0.8);
    }
      </style>