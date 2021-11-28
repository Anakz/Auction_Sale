<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrateurController extends Controller
{
    //Lister les articles
    public function index()
    {
        $listarticle = Article::all();
        return view('article.index' , ['articles' => $listarticle]);
    }

    //Permet de supperimer un article
    public function destroy(Request $request, $id)
    {
        $article = Article::find($id);

        $article->delete();

        return redirect('articles');
    }
}
