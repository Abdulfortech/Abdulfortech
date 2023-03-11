<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Project;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {   
        return view('public.index', [
            'projects' => Project::whereNotNull('status')
            ->where('status', 'Active')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get(),
            'articles' => Article::whereNotNull('status')
            ->where('locale', 'English')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get()
        ]);
    } 

    public function hireMe()
    {
        return view('public.hireme');
    }

    public function about()
    {
        return view('public.about');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function projects()
    {   
        return view('public.projects', [
            'projects' => Project::whereNotNull('status')
            ->where('status', 'Active')
            ->orderBy('id', 'desc')
            ->get()
        ]);
    } 

    public function projectView($project)
    {
        $fetchProject = Project::where('slug', $project)->firstOrFail(); 
        return view('public.projectShow', [
            'project' => $fetchProject
        ]);
    }

    public function blog()
    {   
        return view('public.blog', [
            'articles' => Article::where('status', 'Active')
            ->where('locale', 'English')
            ->orderBy('id', 'desc')
            ->get()
        ]);
    } 

    public function blogView($article)
    {
        $blog = Article::where('slug', $article)->firstOrFail(); 
        return view('public.blogShow', [
            'article' => $blog
        ]);
    }
}
