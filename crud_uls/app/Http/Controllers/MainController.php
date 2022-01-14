<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Author;

class MainController extends Controller
{
    public function index()
    {
       $news = News::paginate(10);
       $authors = Author::get(); 
       return view('list', compact('news'), compact('authors')); 
    }

    public function create()
    {
        $news = News::get();
        $authors = Author::get(); 
        return view('create', compact('news'), compact('authors')); 
    }

    public function new(Request $request)
    {
        $valid = $request->validate([
            'titlu' => 'required|max:100',
            'text' => 'required|min:15|max:500',
            'nume' => 'required',
        ]); 

        
        $new = new News();
        
        $new->titlu = $request->input('titlu');
        $new->text = $request->input('text');
        $new->autor = $request->input('nume');
        

        $new->save();
        
        return redirect('/')->withSuccess('Data was Created!');
    }


    public function edit(int $id)
    {
        $new = News::findOrFail($id);
        $news = News::get();
        $authors = Author::get(); 
        
        return view('edit', compact(['new']), compact('authors')); 
    }

    public function edit_new(Request $request, int $id)
    {
        $new = News::findOrFail($id);

        $valid = $request->validate([
            'titlu' => 'required|max:100',
            'text' => 'required|min:15|max:500',
            'nume' => 'required',
        ]); 
        
        $new->titlu = $request->input('titlu');
        $new->text = $request->input('text');
        $new->autor = $request->input('nume');
        
        $new->update();
        
        return redirect('/')->withSuccess('Data was Updated!');
    }

    public function show(int $id)
    {
       
       $authors = Author::get(); 
       $new = News::findOrFail($id);
       return view('show', compact(['new']), compact('authors')); 
    }


    public function delete(int $id)
    {
        $new = News::findOrFail($id);
        $new->delete();

        return redirect('/')->withSuccess('Data was Deleted!');
    }

    public function search(Request $request)
    {
        $s = $request->s;
        
        $authors = Author::get(); 
        $news = News::where('titlu', 'LIKE', "%{$s}%")->paginate(10);
        return view('list', compact('news'), compact('authors')); 
    }

    
}
