<?php

namespace App\Http\Controllers;

use App\Models\Categorie;

use App\Models\Article;

use App\Models\Encherir;

use Auth;

use Illuminate\Http\UploadedFile;

use Illuminate\Http\Request;

use App\Http\Requests\articleRequest;

class EncherirController extends Controller
{
    public function enche($id)
    {
        if (!Auth()->check()) 
        {
            return redirect('login');
        }
        else
        {
            $encherir = new Encherir();

            $article = Article::find($id);

            $article->prix_seuil=$article->prix_seuil+$article->prix_seuil*0.1;

            $encherir->id_enchereur = Auth::user()->id;
            $encherir->id_article = $id;

            $encherir->prix_encherir=$article->prix_seuil;

            $encherir->date_encherir = date('Y-m-d H:i:s');

            $article -> save();
            $encherir -> save();
            
            
            session()->flash('success', 'Encherissement réussi !!');

            return back();

        }
    }
}