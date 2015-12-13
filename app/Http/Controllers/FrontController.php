<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category;
use App\Tag;
use Carbon\Carbon;

class FrontController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(4);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });

        $categories = Category::orderBy('id', 'DESC')->get();
        $categories->each(function($categories){
           $categories->articles; 
        });

        $tags = Tag::orderBy('name', 'DESC')->get();

        return view('front.index')
            ->with('articles', $articles)
            ->with('categories', $categories)
            ->with('tags', $tags);
    }
}
