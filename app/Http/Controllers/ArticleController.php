<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $allArticles = Article::whereNotNull('status')->get()->count();
        $activeArticles = Article::where('status', 'Active')->count();
        $englishArticles = Article::where('locale', 'English')->whereNotNull('status')->count();
        $hausaArticles = Article::where('locale', 'Hausa')->whereNotNull('status')->count();
        return view('articles', [
            'title' => 'All Articles',
            'allArticles' => $allArticles,
            'activeArticles' => $activeArticles,
            'englishArticles' => $englishArticles,
            'hausaArticles' => $hausaArticles,
            'articles' => Article::whereNotNull('status')
            ->orderBy('id', 'desc')
            ->get()
        ]);
    }

    public function show(Article $article)
    {
        return view('articleShow', [
            'article' => $article
        ]);
    }

    public function newArticle()
    {
        return view('articleNew');
    }

    public function addArticle(Request $request)
    {
        $data = $request->validate([
            'user_id' => ['required'],
            'title' => ['required', 'min:3'],
            'category' => ['required', 'min:4'],
            'locale' => ['required'],
            'author' => ['required'],
            'status' => ['required'],
            'body' => ['required'],
        ]);
        
        if($request->hasFile('thumbnail')){
            $data['thumbnail'] = $request->file('thumbnail')->store('articles', 'public');
        }
        
        Article::create($data);
        return redirect('/admin/articles')->with('message','Article has been published');
    } 

    public function edit(Article $article)
    {
        return view('articleEdit', [
            'article' => $article
        ]);
    }

    public function update(Request $request, Article $article)
    {
        $data = $request->validate([
            'user_id' => ['required'],
            'title' => ['required', 'min:3'],
            'category' => ['required', 'min:4'],
            'locale' => ['required'],
            'author' => ['required'],
            'status' => ['required'],
            'body' => ['required'],
        ]);
        
        if($request->hasFile('thumbnail')){
            $data['thumbnail'] = $request->file('thumbnail')->store('articles', 'public');
        }
        
        $article->update($data);
        return redirect('/admin/articles')->with('message','Article has been updated');
    }

    public function ActivateArticle(Article $article){
        $data = ([
            'status' => 'Active'
        ]);
        $article->update($data);
        return redirect('/admin/articles')->with('message','Article has been activated');
    }

    public function DeactivateArticle(Article $article){
        $data = ([
            'status' => 'Inactive'
        ]);
        $article->update($data);
        return redirect('/admin/articles')->with('message','Article has been deactivated');
    }

    public function DeleteArticle(Article $article){
        $article->update(['status' => null]);
        return redirect('/admin/articles')->with('message','Article has been deleted');
    }
}
