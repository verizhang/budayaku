<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ars = Article::all();
        return view('articles.articles', compact('ars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {

        $file = $request->file('image');
        $file->move('storage/app/public/', $file->getClientOriginalName());

        $ar = new Article;
        $ar->image = $file->getClientOriginalName();
        $ar->title = $request->title;
        $ar->body = $request->body;
        $ar->save();

        return redirect("/dashboard");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ar = Article::find($id);
        return view("articles.articles-detail", compact("ar"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ar = Article::find($id);
        return view("articles.edit", compact('ar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, $id)
    {

        $ar = Article::find($id);
        if ($request->file('image') != null) {
            $file = $request->file('image');
            $file->move('storage/app/public/', $file->getClientOriginalName());
            $ar->image = $file->getClientOriginalName();
        }
        $ar->title = $request->title;
        $ar->body = $request->body;
        $ar->save();

        return redirect("/dashboard");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect("/dashboard");
    }
}
