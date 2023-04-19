@extends('layouts.app')
@section('list')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl" style="color: black;">
            
          <h3 class="animate-charcte">les tendances</h3>
          <h3>impact</h3>
        </h1>
        <h4 id="re">Restez à la pointe de la mode avec nos dernières actualités et nos nouveaux designs de coupes de cheveux. Nous sommes toujours à l'affût des dernières tendances et des techniques innovantes pour vous offrir le meilleur de la coiffure. Ne manquez pas nos dernières nouveautés et soyez prêt à briller avec style</h4>

    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif 

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/blog/create"
            class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Cree un post
        </a>
    </div>
@endif


@foreach ($posts as $post)

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">

        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2> 

            <span class="text-gray-500">
            <span class="font-bold italic text-gray-800"></span>Publier le {{ date('j M Y', strtotime($post->updated_at)) }}
            </span> 

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit
                    </a>
                </span>

                <span class="float-right">
                     <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            @endif
        </div>

        <div class="image-grid">
          
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>

		<style>
 
  .image-grid img {
    width: 70%;
	border-radius: 10%;
	box-shadow: 5px 5px 8px 0 rgba(0, 0, 0, 0.6);
  }
  img {
    transition: transform 0.2s;
  }
  img:hover {
    transform: scale(1.1);
  }
    #re
    {
       
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  font-weight: bold;
  text-transform: uppercase;
  color: #333;
  letter-spacing: 2px;
  margin: 20px 0;
  text-align: center;

}
  
</style>

    </div>    
@endforeach
@endsection