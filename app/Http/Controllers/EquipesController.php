<?php
   
namespace App\Http\Controllers;

use App\Models\Equipe;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request; 

class EquipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('equipe.index')->with('equipes', Equipe::orderBy('updated_at', 'desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('equipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Equipe::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Equipe::class, 'slug', $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/equipe')
            ->with('messages', 'Your post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug 
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('equipe.show')
            ->with('equipe', Equipe::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('equipe.edit')
            ->with('equipe', Equipe::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Equipe::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(Equipe::class, 'slug', $request->title),
                'user_id' => auth()->user()->id
            ]);

        return redirect('/equipe')
            ->with('messages', 'information mie a jour !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $equipe = Equipe::where('slug', $slug);
        $equipe->delete();

        return redirect('/equipe')
            ->with('messages', 'equipe ajouter!');
    }
}
